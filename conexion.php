<?php
include ('conection.php');
      $nombre = utf8_decode($_POST['Name']);
      $apellido = utf8_decode($_POST['Lastname']);
      $correo = utf8_decode($_POST['Email']);
      $contrasena = utf8_decode($_POST['Password']);
      $ccontrasena = utf8_decode($_POST['Passwordc']);
      $telefono = utf8_decode($_POST['Phone']);
      $genero = utf8_decode($_POST['gender']);

if ($contrasena == $ccontrasena){
      $consult= "SELECT * FROM Clientes WHERE Correo='$correo'";
      $Resul=mysqli_query($conn, $consult);
      $filas=mysqli_num_rows($Resul);
      if($filas){
            echo "Error: correo ya registrado";
            }else{      
                  $insertvalue = "INSERT INTO usuarios (Nombre, Apellidos, Correo, Contrasena, Telefono, Sexo) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$telefono','$genero')";
                  if (mysqli_query($conn, $insertvalue)) {
                        header("Location: Cakes.html");
                  } else {
                        echo "Error: " . $insertvalue . "<br>" . mysqli_error($conn);
                  }
            }
}else{

}

    

mysqli_close($conn);

?>