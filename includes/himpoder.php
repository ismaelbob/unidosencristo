<?php
    include_once "db.php";
    class HimPoder extends DB {
        public function todoHimnario() {
            return $con = $this -> conectar() -> query("SELECT * FROM him_poder");
        }
        public function mostrarCancion($id) {
            $con = $this -> conectar() -> prepare("SELECT * FROM him_poder WHERE idcancion=:id");
            $con -> execute(["id" => $id]);
            $datos = $con -> fetch(PDO::FETCH_OBJ);
            $con = null;
            return $datos;
        }

        public function addCancion($id, $titulo, $autor, $nota, $letra, $enlace){
            $con = $this -> conectar() -> prepare('INSERT INTO him_poder (idcancion, titulo, autor, nota, letra, enlace) VALUES (:idcancion, :titulo, :autor, :nota, :letra, :enlace);');
            $con -> execute([':idcancion' => $id,':titulo'=> $titulo, ':autor'=> $autor, ':nota'=> $nota, ':letra'=> $letra, ':enlace' => $enlace]);
            $con = null; 
        }
        public function modCancion($id, $titulo, $autor, $nota, $letra, $enlace){
            $con = $this -> conectar() -> prepare('UPDATE him_poder SET titulo=:titulo, autor=:autor, nota=:nota, letra=:letra, enlace=:enlace WHERE idcancion=:id;');
            $con -> execute([':titulo'=> $titulo, ':autor'=> $autor, ':nota'=> $nota, ':letra'=> $letra, ':enlace' => $enlace, ':id'=> $id]);
            $con = null; 
        }
        public function delCancion($id){
            $con = $this -> conectar() -> prepare('DELETE FROM him_poder WHERE idcancion=:id;');
            $con -> execute([':id'=> $id]);
            $con = null; 
        }

        public function ultimoRegistro() {
            $con = $this -> conectar() -> query('SELECT MAX(idcancion) as ultima_fila FROM him_poder');
            $dato = $con -> fetch(PDO::FETCH_OBJ) -> ultima_fila;
            $con = null;
            return $dato;
        }
        public function existeCancion($id) {
            $con = $this -> conectar() -> query('SELECT idcancion FROM him_poder WHERE idcancion=' . $id);
            if($con -> rowCount()) {
                return true;
            } else {
                return false;
            }
            $con = null;
        }
    }
?>