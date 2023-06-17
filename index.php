<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and register-VISER</title>
    <link rel="stylesheet"href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <!--CONTENERDOR DE TODO-->
        <div class="contener_todo">
            <div class="caja_trasera">
                <div class="caja_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn_iniciar_sesion">Iniciar sesión</button>
                </div>
                <div class="caja_Register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrarse para iniciar sesión</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contener_login_and_register">
                <form action="php/login_usuario_be.php" method="POST" class="formlogin">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name ="correo">
                    <input type="password" placeholder="Contraseña" name ="contrasena">
                    <button>Entrar</button>
                </form>
                <form action="php/Registro_usuario_be.php" method="POST" class="formregister">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electrónico" name="correo_electronico">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Ubiciación" name="ubicacion">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>