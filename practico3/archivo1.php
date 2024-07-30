<?php
// Verificar si se recibieron los datos correctamente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_proyecto'], $_POST['descripcion_proyecto'], $_FILES['documento_proyecto'])) {
    $nombre_proyecto = $_POST['nombre_proyecto'];
    $descripcion_proyecto = $_POST['descripcion_proyecto'];
    $nombre_archivo = $_FILES['documento_proyecto']['name'];
    $tipo_archivo = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
    $tamano = $_FILES['documento_proyecto']['size'];
    $fecha_modificacion = date('Y-m-d H:i:s', filemtime($_FILES['documento_proyecto']['tmp_name']));
} else {
    die('Error: No se han recibido los parámetros correctamente.');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Archivo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        }

        .card {
            background-color: #f2f8f9;
            border-radius: 4px;
            padding: 24px;
            max-width: 600px; 
            width: 100%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            box-sizing: border-box;
            text-align: left; 
        }

        .card p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin: 10px 0;
        }

        .card p strong {
            font-weight: bold;
        }

        .card1 {
            text-decoration: none;
            color: inherit;
            display: block;
            position: relative;
            overflow: hidden; 
        }

        .card1:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: -16px;
            right: -16px;
            background: #00838d;
            height: 32px;
            width: 32px;
            border-radius: 32px;
            transform: scale(1);
            transform-origin: 50% 50%;
            transition: transform 0.25s ease-out;
        }
    </style>
</head>
<body>
    <div class="card">
        <a class="card1">
            <h2>INFORMACION DE ARCHIVO SUBIDO</h2>
            <p><strong>Nombre del Proyecto:</strong> <?php echo htmlspecialchars($nombre_proyecto); ?></p>
            <p><strong>Descripción del Proyecto:</strong> <?php echo htmlspecialchars($descripcion_proyecto); ?></p>
            <p><strong>Nombre del Archivo:</strong> <?php echo htmlspecialchars($nombre_archivo); ?></p>
            <p><strong>Tipo de Archivo:</strong> <?php echo htmlspecialchars($tipo_archivo); ?></p>
            <p><strong>Tamaño:</strong> <?php echo number_format($tamano / 1024, 2); ?> KB</p>
            <p><strong>Fecha de Modificación:</strong> <?php echo $fecha_modificacion; ?></p>
        </a>
    </div>
</body>
</html>
