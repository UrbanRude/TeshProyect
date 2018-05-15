<?php

    class Conexion{
        public function conectar(){
            $link = new PDO("mysql:host=localhost;dbname=db_proyecto_tesh","root","");
            return $link;
        }
    }

?>