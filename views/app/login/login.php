<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./views/app/login/login.css">
</head>
<body>
    <div class="box">
        <div class="logoTesh">
            <img src="./views/app/login/img/logoTesh.bmp">
        </div>
    <form>
        <div class="inputBox">
            <input type="text" name="user" require="" id="user" >
            <label>Usuario:</label>  
        </div>
        <div class="inputBox">
            <input type="password" name="password" require="" id="password" >
            <label>Contraseña</label>
        </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
                <div class="lock">
                     <a href="">
                        <img src="./views/app/login/img/lock.svg"> Recover password?
                     </a>
                </div>
    <button type="submit" id="btnLogin">Login</button>
    </form>
    <script src="./views/js/sweet.js"></script>
    <script src="./views/js/jquery.js"></script>   
    <!--<script src="./views/app/login/login.js"></script>-->
    <script>
        $('#btnLogin').click(function(e){
            e.preventDefault();
            let params = {'user':$('#user').val(),'password':$('#password').val()};

            if(params.user != params.password){
                $.ajax({
                url:'./controllers/userController.php?action=register',
                type:'POST',
                data:params,
                success:(data) =>{
                    console.log(data);
                    data == 1 ? 
                    location.href = "./views/app/panel/panel.php" :
                        swal("Opss !", "Usuarios y/o password incorrecto", "error"); 
                }
            });
            }else{
                location.href = "./views/app/first_login/first_login.php";
            }
        });
    </script>
    </div>
</body>
</html>