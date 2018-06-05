<?php

    require_once 'conec.php';
    class UserModel extends Conexion{
        
        public function validateLoginModel($user,$pwd){
            $sql = "SELECT usuario,pwd FROM ts_usuarios WHERE usuario=:p1 AND pwd=:p2; ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt -> bindParam(":p1",$user);
            $stmt -> bindParam(":p2",$pwd);
            $stmt -> execute();
            return $stmt -> fetch();
        }

        public function registerUserModel($userName,$userLastName,$userLastNameM,$user,$password){
            $sql = "INSERT INTO ts_usuarios(nombre,app,apm,usuario,pwd) VALUES (:p1,:p2,:p3,:p4,:p5)";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt -> bindParam(":p1",$userName);
            $stmt -> bindParam(":p2",$userLastName);
            $stmt -> bindParam(":p3",$userLastNameM);
            $stmt -> bindParam(":p4",$user);
            $stmt -> bindParam(":p5",$password);
            $stmt -> execute();
            return $stmt -> fetch();
        }

        public function updatePassword($idUser,$password){
            
        }

    }

?>