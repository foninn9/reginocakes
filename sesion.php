<?php
include ('conection.php');
$correos = utf8_decode($_POST['emails']);
$contrasenas = utf8_decode($_POST['Passwords']);
session_start();
$_SESSION['email']=$correos;
$consult= "SELECT * FROM Clientes WHERE Correo='$correos' and Contrasena='$contrasenas'";
$Resul=mysqli_query($conn, $consult);
$filas=mysqli_num_rows($Resul);

if($filas){
  
    header("location:Cakes.html");
    mysqli_close($conexion);
}else{
    echo "Error usuario o contraseña invalidos";
}
mysqli_free_result($Resul);
