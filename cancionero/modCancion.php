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
    $respuesta = false;

    if($titulo == '' || $autor == '' || $nota == '' || $letra == '') {
        $respuesta = false;
    } else {
        switch ($him) {
            case 1: {
                $himnario = new HimVerde();
                $himnario -> modCancion($idcancion, $titulo, $autor, $nota, $letra, $enlace);
                $respuesta = true;
                break;
            }
            case 2: {
                $himnario = new HimPoder();
                $himnario -> modCancion($idcancion, $titulo, $autor, $nota, $letra, $enlace);
                $respuesta = true;
                break;
            }
            case 3: {
                $himnario = new HimJovenes();
                $himnario -> modCancion($idcancion, $titulo, $autor, $nota, $letra, $enlace);
                $respuesta = true;
                break;
            }
            
            default:
                $respuesta = false;
                break;
        }
    }
    echo $respuesta;
?>