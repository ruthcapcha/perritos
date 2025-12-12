<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adoptar Perrito</title>
    <style>
        body {
            /* --- 🐾 ESTILOS DE CENTRADO AÑADIDOS --- */
            display: flex; /* Habilita el modo Flexbox */
            flex-direction: column; /* Coloca los elementos uno debajo del otro */
            align-items: center; /* Centra los elementos horizontalmente */
            min-height: 100vh; /* Asegura que el cuerpo ocupe toda la altura de la ventana */
            margin: 0; /* Elimina el margen por defecto del body */
            /* --- 🐾 FIN ESTILOS DE CENTRADO --- */
            
            /* Estilos de fondo y texto que ya tenías */
            background-image: url('https://lh5.googleusercontent.com/eWLkvPcv5AxSy9T2AXeUjmj6F_TlF1jsC3gdftsAEEt-fOVl6uZYZdmJKCXH5pBszbdgW2XMMfFYV5YiqEN70ykb4TYQfI-KgcptOYBTHmhL_d9GxdLFxr-3FZo5NmOI4yRrotekrB-FMsMm2vHReaQ');
            background-size: cover; /* Añadido para que la imagen cubra bien el fondo */
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            font-weight: bold; 
            padding: 20px;
        }
        h2 {
            color: #fcfafaff;
            text-align: center; /* Centra el texto del título */
        }
        form {
            /* Opcional: Centrar el contenido dentro del formulario (como los botones) */
            text-align: center;
            /* Opcional: Darle un fondo para que destaque sobre la imagen */
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con 80% de opacidad */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label, input, button {
            display: block;
            margin: 10px auto; /* Centra horizontalmente los elementos de bloque dentro del form */
            width: 90%; /* Ancho para que los inputs se vean uniformes */
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<h2>Formulario de Adopción</h2>

<form action="guardar_adopciones.php" method="POST">

    <label>ID del perrito</label><br>
    <input type="text" name="perro_nombre" required><br><br>

    <label>Nombre del adoptante</label><br>
    <input type="text" name="adoptante" required><br><br>

    <button type="submit">Adoptar</button>
</form>

</body>
</html>