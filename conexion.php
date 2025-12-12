<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "perritos_db";  // Nombre EXACTO de tu BD

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
