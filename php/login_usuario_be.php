<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_electronico='$correo'
    and Contrasena= '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../index2.html");
        exit;
    }else{
        echo '
          <script>
             alert("Usuario no existe, por favor verificar los datos introducidos");
             window.location ="../index.php";
         </script>    
    ';
    exit;
    }
?>