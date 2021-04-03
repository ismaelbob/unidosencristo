<?php
    include_once "../includes/himjovenes.php";
    include_once "../includes/himpoder.php";
    include_once "../includes/himverde.php";
    $himnario;
    $id = $_POST['id'];
    $him = $_POST['him'];

    if($him == 1) {
        $himnario = new HimVerde();
        $resultado = $himnario -> mostrarCancion($id);
        echo json_encode($resultado);
    }
    if($him == 2) {
        $himnario = new HimPoder();
        $resultado = $himnario -> mostrarCancion($id);
        echo json_encode($resultado);
    }
    if($him == 3) {
        $himnario = new HimJovenes();
        $resultado = $himnario -> mostrarCancion($id);
        echo json_encode($resultado);
    }
?>