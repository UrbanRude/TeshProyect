<?php
    
    require_once '../models/userModel.php';

    class UserController{

        public function validateUserController($user,$pwd){
            $respuestaModel = UserModel::validateUserModel($user,$pwd);
            if($respuestaModel['ususario'] == $user && $respuestaModel['pwd'] == $pwd){
                echo "1";
            }else{
                echo "2";
            }
        }

    }

?>