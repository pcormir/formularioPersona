<?php

$servername = "localhost";
$username = "pcormir";
$password = "pcormir";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Conexion fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

$sql = "INSERT INTO persona (nombre,edad) VALUES ('$nombre', $edad)";

if ($conn->query($sql) === TRUE) {
	echo "Nuevo registro insertado correctamente:";
} else  {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>

