<?php
//Variables mandadas por el formulario

$nombre=$_POST['myname'];
$apellido=$_POST['surname'];
$correo=$_POST['email'];
$movil=$_POST['mobile'];
$nomusu=$_POST['user'];
$pass=$_POST['pass1'];
$passdos=$_POST['pass2'];

//Variables para la conexion a la base de datos
$servername="localhost";
$database="proyecto";
$username="root";
$password="";

//Conexion a la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

//Insertar a la base de datos
$insertar="INSERT INTO usuarios (Nombre, Apellido, Correo, Movil, Usuario, Pass, RepeatPassword) VALUES ('$nombre','$apellido','$correo','$movil','$nomusu','$pass','$passdos')";
    //Estructura de control para comprobar si se agrega o no
    if (mysqli_query($conn, $insertar)) {
        echo 'Has sido regristado correctamente.';
  } else { //Si algo falla nos mandara este mensaje
        echo "Error: Intenta de nuevo " . mysqli_error($conn);
  }

  //Cierre de la conexion
mysqli_close($conn);
?>
