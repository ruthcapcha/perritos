<?php
include "conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM perros");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perritos en adopción</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Perritos disponibles 🐾</h1>

<div class="grid">
<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
    <div class="card">
        <img src="imagenes/<?php echo $fila['imagen']; ?>">
        <h3><?php echo $fila['nombre']; ?></h3>
        <p><?php echo $fila['descripcion']; ?></p>

        <!-- ✅ BOTÓN ADOPTAR -->
        <a href="contacto.php?id=<?php echo $fila['id']; ?>" class="btn-adoptar">
            Adoptar
        </a>
    </div>
<?php } ?>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perritos en Adopción</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1 style="text-align:center;">🐾 Perritos en Adopción</h1>

<nav style="text-align:center; margin-bottom:30px;">
    <a href="index.php">Inicio</a> |
    <a href="contactos.php">Contacto</a>
</nav>

<div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">

    <div style="border:1px solid #ccccccff; padding:15px; width:200px; text-align:center;">
        <img src="data:image/jpeg;base64,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" width="100%">
        <h3>Luna</h3>
        <p>Cariñosa y juguetona</p>
<div style="border:1px solid #ccccccff; padding:15px; width:200px; text-align:center;">
        <img src="https://preview.redd.it/uz2jwzbl5sy51.png?auto=webp&s=87cb7e08b746e6dc1554367c61bc04fbc6a6530b" width="100%">
        <h3>katiana</h3>
        <p>Cariñosa y hermosa</p>
        
