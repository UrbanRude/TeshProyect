<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="box">
        <h2>Registro</h2>
            <form id="formRegister">
                <div class="inputBox">
                    <input type="text" id="userName" required="">
                    <label>Nombre</label>
                </div>
                    <div class="inputBox">
                        <input type="text" id="userLastName" required="">
                        <label>Apellido Paterno</label>
                    </div>
                        <div class="inputBox">
                            <input type="text" id="userLastNameM" required="">
                            <label>Apellido Materno</label>
                        </div>
                            <div class="inputBox">
                                <input type="text" id="user" required="">
                                <label>Usuario</label>
                            </div>
                                <div class="inputBox">
                                    <input type="text" id="pwd" required=""> 
                                    <label>Contraseña</label>
                                </div>
                    <button id="btnRegister">Registrar</button>
            </form>
    </div>    
<script src="../../js/jquery.js"></script>
<script src="./register.js"></script>
</body>
</html>