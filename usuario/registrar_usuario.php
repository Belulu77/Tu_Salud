<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include("conex.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $obra_social = $_POST['obra_social'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];


    $consulta = "INSERT INTO pacientes (nombre, apellido, dni,obra_social,telefono,sexo,direccion) VALUES ('$name', '$apellido', '$dni','$obra_social','$telefono','$sexo','$direccion')";
    $resultado = mysqli_query($conn, $consulta);

}