<?php
include 'cn.php';
// recibir los datos
$email = $_POST["email"];
// consulta
$insertar = "INSERT INTO usuario(email) VALUES ('$email')";

$verificar_email = mysqli_query($conexion, "SELECT * FROM usuario WHERE email = '$email'");
if (mysqli_num_rows($verificar_email) > 0){
    echo '<script> 
          alert ("El correo ya esta registrado");
          window.history.go(-1);
          </script>';
    exit;
}
    
    
// ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!resultado) {
    echo 'Error al registrarse';
} else {
    echo 'Usuario registrado exitosamente';
        
    }
// Cerrar conexion
mysqli_close($conexion);


    
    