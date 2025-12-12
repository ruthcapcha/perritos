<?php
include "conexion.php";

$resultado = mysqli_query($conexion, "SELECT * FROM adopciones");

echo "<h2>Lista de Adopciones</h2>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Adoptante: <strong>".$fila['adoptante']."</strong>
        | Perrito ID: ".$fila['perro_nombre']."
        | Fecha: ".$fila['fecha']."<br>";
}
?>
