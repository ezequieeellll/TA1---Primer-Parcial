<?php


$servername = "****";
$database = "****";
$username = "****";
$password = "****";

$conn = mysqli_connect($servername, $username, $password, $database);


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$fechaNac = $_POST['fechaNac'];
$mail = $_POST['mail'];



$sql = "INSERT INTO Persona (nombre, apellido, telefono, edad, fechaNac, mail) VALUES ($nombre, $apellido, $telefono, $edad, $fechaNac, $mail)";
mysqli_close($conn);

?>