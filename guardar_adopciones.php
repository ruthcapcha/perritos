<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $perro_id  = $_POST['perro_nombre'];
    $adoptante = $_POST['adoptante'];

    $sql = "INSERT INTO adopciones (perro_nombre, adoptante, fecha)
            VALUES ('$perro_id', '$adoptante', NOW())";

    if (mysqli_query($conexion, $sql)) {
        echo "<h2>✅ Adopción registrada correctamente</h2>";
        echo "<a href='adoptar.php'</a>";
    } else {
        echo "❌ Error: " . mysqli_error($conexion);
    }
} else {
    echo "❌ Acceso no permitido";
}
?>
