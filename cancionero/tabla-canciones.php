<?php
    include_once "../includes/himjovenes.php";
    include_once "../includes/himpoder.php";
    include_once "../includes/himverde.php";
    include_once '../includes/sesion.php';
    include_once '../includes/usuario.php';
    $himnario;
    $listacanciones;
    $himnarioSeleccionado = $_POST["him"];

    $sesion = new Sesion();
    $usuario = new Usuario();
    if(isset($_SESSION['user-uec'])) {
        $usuario -> setUsuario($sesion -> getSesion());
    }
    $usu_actual = $usuario -> getUsuario();

    if($himnarioSeleccionado == "1") {
        //Himnario verde
        $himnario = new HimVerde();
        $listacanciones = $himnario -> todoHimnario();

        echo "<thead><tr><th scope='col'>#</th><th scope='col'>Titulo</th><th scope='col'>Nota</th><th scope='col'></th>";
        if($usu_actual <> '') {
            echo "<th scope='col'></th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        foreach ($listacanciones as $fila) {
            echo "<tr><th scope='row'>" . $fila["idcancion"] . "</th>";
            echo "<td><button type='button' class='btn btn-link w-100 text-start' data-bs-toggle='modal' data-bs-target='#modal-cancion' onclick=mostrarCancion(" . $fila["idcancion"] . ",1)>" . $fila["titulo"] . "</button></td>";
            echo "<td>" . $fila["nota"] . "</td>";
            if($usu_actual <> '') {
                echo "<td><button class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#modal-nueva-cancion' onclick=cargarDatosCancion(" . $fila["idcancion"] . ",1)>Editar</button></td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
    } else {
        if($himnarioSeleccionado == "2") {
            //Himnario poder
            $himnario = new HimPoder();
            $listacanciones = $himnario -> todoHimnario();

            echo "<thead><tr><th scope='col'>#</th><th scope='col'>Titulo</th><th scope='col'>Nota</th><th scope='col'></th>";
            if($usu_actual <> '') {
                echo "<th scope='col'></th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            foreach ($listacanciones as $fila) {
                echo "<tr><th scope='row'>" . $fila["idcancion"] . "</th>";
                echo "<td><button type='button' class='btn btn-link w-100 text-start' data-bs-toggle='modal' data-bs-target='#modal-cancion' onclick=mostrarCancion(" . $fila["idcancion"] . ",2)>" . $fila["titulo"] . "</button></td>";
                echo "<td>" . $fila["nota"] . "</td>";
                if($usu_actual <> '') {
                    echo "<td><button class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#modal-nueva-cancion' onclick=cargarDatosCancion(" . $fila["idcancion"] . ",2)>Editar</button></td>";
                }
                echo '</tr>';
            }
            echo "</tbody>";
        } else {
            if($himnarioSeleccionado == "3") {
                //Himnario de jovenes
                $himnario = new HimJovenes();
                $listacanciones = $himnario -> todoHimnario();

                echo "<thead><tr><th scope='col'>#</th><th scope='col'>Titulo</th><th scope='col'>Artista</th>";
                if($usu_actual <> '') {
                    echo "<th scope='col'></th>";
                }
                echo "</tr></thead>";
                echo "<tbody>";
                foreach ($listacanciones as $fila) {
                    echo "<tr><th scope='row'>" . $fila["idcancion"] . "</th>";
                    echo "<td><button type='button' class='btn btn-link w-100 text-start' data-bs-toggle='modal' data-bs-target='#modal-cancion' onclick=mostrarCancion(" . $fila["idcancion"] . ",3)>" . $fila["titulo"] . "</button></td>";
                    echo "<td>" . $fila["autor"] . "</td>";
                    if($usu_actual <> '') {
                        echo "<td><button class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#modal-nueva-cancion' onclick=cargarDatosCancion(" . $fila["idcancion"] . ",3)>Editar</button></td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
            } else {
                echo "";
            }
        }
    }
?>