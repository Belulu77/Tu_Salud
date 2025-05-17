<!--conexion php a bd
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tu_salud_bd";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>