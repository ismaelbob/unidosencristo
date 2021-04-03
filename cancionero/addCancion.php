<?php
    include '../includes/himjovenes.php';
    include '../includes/himpoder.php';
    include '../includes/himverde.php';
    $himnario;
    $him = $_POST['txthimnarioform'];
    $idcancion = $_POST['txtnumerocancion'];
    $titulo = $_POST['txttitulocancion'];
    $autor = $_POST['txtautorcancion'];
    $nota = $_POST['txtnotacancion'];
    $letra = $_POST['txtletracancion'];
    $enlace = $_POST['txtenlacecancion'];
    $respuesta = '';

    if($idcancion == '' || $titulo == '' || $autor == '' || $nota == '' || $letra == '') {
        $respuesta = 'falta';
    } else {
        switch ($him) {
            case 1: {
                $himnario = new HimVerde();
                if($himnario -> existeCancion($idcancion)) {
                    $respuesta = 'existe';
                } else {
                    $himnario -> addCancion($idcancion, $titulo, $autor, $nota, $letra, $enlace);
                    $respuesta = 'correcto';
                }
                break;
            }
            case 2: {
                $himnario = new HimPoder();
                if($himnario -> existeCancion($idcancion)) {
                    $respuesta = 'existe';
                } else {
                    $himnario -> addCancion($idcancion, $titulo, $autor, $nota, $letra, $enlace);
                    $respuesta = 'correcto';
                }
                break;
            }
            case 3: {
                $himnario = new HimJovenes();
                if($himnario -> existeCancion($idcancion)) {
                    $respuesta = 'existe';
                } else {
                    $himnario -> addCancion($titulo, $autor, $nota, $letra, $enlace);
                    $respuesta = 'correcto';
                }
                break;
            }
            default:
                $respuesta = 'error';
                break;
        }
    }
    echo $respuesta;
?>