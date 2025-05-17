<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Registrarse</h1>
	<form method="post">
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="number" name="dni" placeholder="dni">
        <input type="text" name="obra_social" placeholder="obra social">
        <input type="telefono" name="telefono" placeholder="telefono">
		<input type="text" name="sexo" placeholder="Sexo">
		<input type="text" name="direccion" placeholder="direccion">
		<input type="submit" name="register">
	</form>
	<?php 
	include("procesar_registro.php");
	?>
</body>
</html>