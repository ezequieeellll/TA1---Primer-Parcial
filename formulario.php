<?php


$servername = "****";
$database = "****";
$username = "****";
$password = "****";

$conn = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST['nombre']) and isset($_POST['apellido']) and 
      isset($_POST['telefono']) and isset($_POST['edad']) and isset($_POST['fechaNac']) and isset($_POST['mail']) and ($_POST['nombre'])!=($_POST['apellido']))
  	) 
{	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$fechaNac = $_POST['fechaNac'];
	$mail = $_POST['mail'];

	$sql = "INSERT INTO Persona (nombre, apellido, telefono, edad, fechaNac, mail) VALUES ('$nombre', '$apellido', '$telefono', '$edad', '$fechaNac', '$mail')";
	mysqli_close($conn);
}
else 
{

    echo "hubo un problema al procesar la solicitud";
}



?>