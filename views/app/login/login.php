<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <div class="logoTesh">
            <img src="img/logoTesh.bmp">
        </div>
    <form>

        <div class="inputBox">
            <input type="text" name="" require="" id="user" >
            <label for="user">Usuario:</label>
            
        </div>

        <div class="inputBox">
            <input type="password" name="" require="" id="pwd" >
            <label for="pwd">Contraseña</label>
            
        </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>

                <div class="lock">
                     <a href="">
                        <img src="img/lock.svg"> Recover password?
                     </a>
                </div>

    <button type="submit" id="btnLogin">Login</button>

    </form>
    <script src="./views/js/jquery.js"></script>   
    <script src="./views/app/login/login.js"></script>
    </div>
</body>
</html>