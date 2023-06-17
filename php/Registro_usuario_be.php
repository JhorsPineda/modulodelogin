<?php 

   include 'conexion_be.php';

   $nombre_completo = $_POST['nombre_completo'];
   $correo_electronico = $_POST['correo_electronico'];
   $usuario = $_POST['usuario'];
   $ubicacion = $_POST['ubicacion'];
   $contrasena = $_POST['contrasena'];
   
   /*INCRIPTAR LA CONTRASEÑA EN LA BASE DE DATOS
   $contrasena_e = hash('sha512', $contrasena);*/

   $query = "INSERT INTO usuarios(Nombre_completo, Correo_electronico, Usuario, Ubicacion, Contrasena)
            VALUES('$nombre_completo','$correo_electronico','$usuario','$ubicacion','$contrasena')";

/*VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS*/ 
   $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_electronico ='$correo_electronico'");
   if(mysqli_num_rows ($verificar_correo) > 0){
      echo '
        <script>
           alert ("Este correo ya está registrado, intenta con otro diferente");
           window.location ="../index.php";
        </script>
       ';
       mysqli_close ($conexion);
       exit();    
   }
/*VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BASE DE DATOS*/ 
   $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario ='$usuario'");
   if(mysqli_num_rows ($verificar_usuario) > 0){
      echo '
        <script>
           alert ("Este usuario ya está registrado, intenta con otro diferente");
           window.location ="../index.php";
        </script>
       ';
       mysqli_close ($conexion);
       exit();    
   }

   $ejecutar = mysqli_query($conexion, $query);  
   
   if($ejecutar){
    echo'
       <script> 
           alert("Usuario registrao exitosamente");
           window.location ="../index.php";
       </script>
   ';
   }else{
    echo'
    <script>
        alert("Usuario no registrado, inténtalo nuevamente");
        window.location ="../index.php";
    </script>
    ';
   }
   mysqli_close ($conexion);
   
?>