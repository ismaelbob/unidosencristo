<?php
    class Sesion{
        public function __construct(){
            session_start();
        }
        public function setSesion($usu){
            $_SESSION["user-uec"] = $usu;
        }
        public function getSesion(){
            return $_SESSION["user-uec"];
        }
        public function cerrarSesion(){
            session_unset();
            session_destroy();

        }
    }
?>