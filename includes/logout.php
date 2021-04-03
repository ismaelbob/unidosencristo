<?php
    include_once "sesion.php";
    $sesion = new Sesion();
    $sesion -> cerrarSesion();

    header("location:../")
?>