<?php
    include_once 'db.php';
    class Usuario extends DB {
        private $id;
        private $nomUsuario;
        private $nombre;
        private $nivel;
        private $pass;

        public function existeUsuario($nom, $pas){
            $pasMD5 = md5($pas);
            $con = $this->conectar()->prepare("SELECT * FROM usuario WHERE usuario= BINARY :us AND pass=:pa");
            $con->execute(["us"=>$nom, "pa"=>$pasMD5]);

            if($con->rowCount()){
                foreach($con as $fila){
                    $this->id =$fila['idusuario'];
                    $this->nomUsuario = $fila["usuario"];
                    $this->nombre = $fila["nombre"];
                    $this->nivel = $fila["nivel"];
                    $this->pass = $fila["pass"];
                }
                return true;
            }else{
                return false;
            }
            $con = null;
        }
        public function setUsuario($user){
            $con = $this->conectar()->prepare("SELECT * FROM usuario WHERE usuario= BINARY :us");
            $con->execute(["us"=> $user]);
            foreach($con as $fila){
                $this->id =$fila['idusuario'];
                $this->nomUsuario = $fila["usuario"];
                $this->nombre = $fila["nombre"];
                $this->nivel = $fila["nivel"];
                $this->pass = $fila["pass"];
            }
            $con = null;
        }
        public function getId() {
            return $this->id;
        }
        public function getUsuario()
        {
            return $this->nomUsuario;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getNivel(){
            return $this->nivel;
        }
        public function getPass(){
            return $this->pass;
        }
        public function cambiarPass($user, $pas){
            $pasMD5 = md5($pas);
            $con = $this -> conectar() -> prepare("UPDATE usuario SET pass=:p WHERE idusuario=:u");
            $con -> execute(["p" => $pasMD5, "u" => $user]);
        }
    }
?>