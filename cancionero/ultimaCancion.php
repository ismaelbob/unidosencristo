<?php
    include '../includes/himjovenes.php';
    include '../includes/himpoder.php';
    include '../includes/himverde.php';
    $himnario;
    $resultado;
    $him = $_POST['him'];

    if($him == 1) {
        $himnario = new HimVerde();
        $resultado= $himnario -> ultimoRegistro();
        echo $resultado;
    } else {
        if($him == 2) {
            $himnario = new HimPoder();
            $resultado= $himnario -> ultimoRegistro();
            echo $resultado;
        } else {
            if($him == 3) {
                $himnario = new HimJovenes();
                $resultado= $himnario -> ultimoRegistro();
                echo $resultado;
            } else {
                echo 'error';
            }
        }
    }

?>