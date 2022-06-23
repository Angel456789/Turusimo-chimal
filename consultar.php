<?php
//Variables mandadas por el formulario
$nombre=$_POST['nombre'];
$contra=$_POST['contra'];

$array = [
    "code" => "1",
    "mensaje" => "Bienvenido"
];

//Variables para la conexion a la base de datos
$servername="localhost";
$database="proyecto";
$username="root";
$password="";

//Conexion a la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

//Insruccion para consultar
$consultar=mysqli_query($conn,"SELECT Usuario, Pass FROM usuarios WHERE Usuario='$nombre' and Pass='$contra'");

$nr=mysqli_num_rows($consultar);

//Estructura para saber si coinciden datos
// if($nr== 1){
//     $array
// } else 
if($nr==0){
    $array = [
        "code" => "2",
        "mensaje" => "Contraseña o Usuario Incorrecto",
    ];
}

echo json_encode($array);
//Terminar consulta
mysqli_free_result($consultar);

//Cierre de la conexion
mysqli_close($conn);
?>