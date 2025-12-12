<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php
// --- CONEXIÓN A LA BASE DE DATOS ---
$conexion = mysqli_connect("localhost", "root", "", "perritos_db");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1 class="titulo-contacto">Contáctanos</h1>

<div class="contacto-form-container">
    <form action="" method="POST" class="form-contacto">

        <label>Nombre completo</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico</label>
        <input type="email" name="correo" required>

        <label>Mensaje</label>
        <textarea name="mensaje" rows="5" required></textarea>

        <button type="submit" class="btn-enviar">Enviar mensaje</button>
    </form>
</div>

<?php

// --- GUARDAR EN LA BASE DE DATOS ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre  = $_POST["nombre"];
    $correo  = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO contactos (nombre, correo, mensaje)
            VALUES ('$nombre', '$correo', '$mensaje')";

    if (mysqli_query($conexion, $sql)) {
        echo "<div class='mensaje-enviado'>
                <h3>¡Mensaje enviado correctamente!</h3>
              </div>";
    } else {
        echo "<p>Error al guardar: " . mysqli_error($conexion) . "</p>";
    }
}
?>

</body>
</html>
