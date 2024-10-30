<?php

$servername = 'localhost';
$username = 'pcormir';
$password = 'pcormir';


$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
	die("Conexion fallida: " . $conn->connect_error);

}

echo "Conexion exitosa a MySQL";
$conn->close();


?>
