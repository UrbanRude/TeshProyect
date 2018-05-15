<?php

    require_once 'conec.php';
    class UserModel extends Conexion{
        
        public function validateLoginModel($user,$pwd){
            $sql = "SELECT usuario,pwd FROM ts_usuarios WHERE usuario=:p1 AND pwd=:p2; ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt -> bindParam(":p1",$user);
            $stmt -> bindParam(":p1",$pwd);
            $stmt -> execute();
            return $stmt -> fetch();

        }

    }

?>