<?php
    include '../includes/sesion.php';
    include '../includes/usuario.php';
    $sesion = new Sesion();
    $usuario = new Usuario();

    if(isset($_SESSION['user-uec'])) {
        $usuario -> setUsuario($sesion -> getSesion());
        header('Location:../');
    } else {
        if(isset($_POST['txtusuario'])) {
            $user = $_POST['txtusuario'];
            $pas = $_POST['txtpassword'];
            if($usuario -> existeUsuario($user, $pas)) {
                $sesion -> setSesion($usuario -> getUsuario());
                header('Location:../');
            } else {
                echo 'Datos invalidos';
            }
        } else {
            echo 'No hay datos';
        }
    }
?>