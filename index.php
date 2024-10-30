<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Persona</title>
</head>
<body>
	<h1>Formulario para insertar datos en la tabla persona</h1>
	<form action="insert.php" method="POST">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>
		<br><br>
		<label for="edad">Edad:</label>
		<input type="number" id="edad" name="edad" required>
		<br><br>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
