<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="first_login.css">
</head>
<body>
    <div class="box">
        <h2>Cambio de contraseña</h2>
            <form id="firstLogin">
                <div class="inputBox">
                    <input type="text" id="password" required="">
                    <label>Contraseña Anterior</label>
                </div>
                    <div class="inputBox">
                        <input type="text" id="newPassword" required="">
                        <label>Nueva Contraseña</label>
                    </div>
                        <div class="inputBox">
                            <input type="text" id="confirmPassword" required="">
                            <label>Confirmar Contraseña</label>
                        </div>
                <button id="btnFirstLogin">Cambiar</button>
            </form>
    </div>
    <script src="../../js/jquery.js"></script>
    <script src="./first_login.js"></script>
</body>
</html>