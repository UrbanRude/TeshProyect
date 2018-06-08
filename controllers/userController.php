<?php
    
    require_once '../models/userModel.php';


    switch ($_REQUEST['action']) {
        case 'register':
            
            $userController = new UserController();
            $encriptarPassword = crypt($_POST['password'],'$2a$07$usesomesillystringforsalt$');
            $userController -> validateUserController($_POST['user'],$encriptarPassword);
            break;
        default:
            # code...
            break;
    }

    // $controller = new UserController();
    // $controller -> registerUserController('Sofia','S','S','200','200');


    class UserController{

        public function validateUserController($user,$pwd){
            $respuestaModel = UserModel::validateLoginModel($user,$pwd);
            $encriptarPassword = crypt($_POST['password'],'$2a$07$usesomesillystringforsalt$');
            else if($respuestaModel['usuario'] == $user && $respuestaModel['pwd'] == $encriptarPassword){
                echo "1";
            }else{
                echo "2";
            }
        }

        public function registerUserController($userName,$userLastName,$userLastNameM,$user,$password){
            $encriptarPassword = crypt($password,'$2a$07$usesomesillystringforsalt$');
            $respuestaModel = UserModel::registerUserModel($userName,$userLastName,$userLastNameM,$user,$encriptarPassword);
            if($respuestaModel == '1'){
                echo '1';
            }else{
                echo '2';
            }
        }
    }


?>