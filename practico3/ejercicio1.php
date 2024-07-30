<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documento de Proyecto</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="file"] {
            padding: 10px 0;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
</head>
<body>
    <h2>Subir Documento de Proyecto</h2>
    <form action="archivo1.php" method="post" enctype="multipart/form-data">
        <label for="nombre_proyecto">Nombre del Proyecto:</label><br>
        <input type="text" id="nombre_proyecto" name="nombre_proyecto" required pattern="[A-Za-z0-9\s]+" title="Solo letras, números y espacios"><br><br>
        
        <label for="descripcion_proyecto">Descripción del Proyecto (mínimo 50 caracteres):</label><br>
        <textarea id="descripcion_proyecto" name="descripcion_proyecto" rows="4" cols="50" required minlength="50"></textarea><br><br>
        
        <label for="documento_proyecto">Documento del Proyecto (PDF o DOCX):</label><br>
        <input type="file" id="documento_proyecto" name="documento_proyecto" accept=".pdf,.docx" required><br><br>
        
        <input type="submit" value="Subir Documento">
    </form>
</body>
</html>

<?php

$directorio_subida = 'practico3/';
//Comprueba si el formulario se ha enviado mediante POST y si se ha subido un archivo.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['documento_proyecto'])) {
   
    $nombre_proyecto = $_POST['nombre_proyecto'];
    $descripcion_proyecto = $_POST['descripcion_proyecto'];
    $documento_proyecto = $_FILES['documento_proyecto'];


    if (!preg_match('/^[A-Za-z0-9\s]+$/', $nombre_proyecto)) {
        die('Error: El nombre del proyecto debe contener solo letras, números y espacios.');
    }

  
    if (strlen($descripcion_proyecto) < 50) {
        die('Error: La descripción del proyecto debe tener al menos 50 caracteres.');
    }

 ///Obtiene la extensión, nombre temporal y tamaño del archivo subido.
///Define el tamaño máximo permitido del archivo (5 MB).
    $extension = pathinfo($documento_proyecto['name'], PATHINFO_EXTENSION);
    $archivo_tmp = $documento_proyecto['tmp_name'];
    $tamano = $documento_proyecto['size'];

    $max_tamano = 5 * 1024 * 1024; 
//Valida que la extensión del archivo sea PDF o DOCX.
    if ($extension != 'pdf' && $extension != 'docx') {
        die('Error: El documento debe ser un archivo PDF o DOCX.');
    }
//Valida que el tamaño del archivo no exceda el límite de 5 MB.
    if ($tamano > $max_tamano) {
        die('Error: El tamaño del archivo excede el límite de 5 MB.');
    }
//Reemplaza los espacios en el nombre del proyecto por guiones bajos.

    $nombre_limpio = preg_replace('/\s+/', '_', $nombre_proyecto); 
    //Genera un nombre de archivo único basado en la fecha y hora actual.
    $nombre_archivo = $nombre_limpio . '_' . date('YmdHis') . '.' . $extension;

// Añade esta línea para verificar el nombre del archivo
echo "Nombre del archivo: " . $nombre_archivo . "<br>";
 //Mueve el archivo subido al directorio especificado con el nuevo nombre.
//Redirige al usuario a archivo1.php si la subida es exitosa, de lo contrario, muestra un mensaje de error.
    if (move_uploaded_file($archivo_tmp, $directorio_subida . $nombre_archivo)) {
        
        header('Location: archivo1.php');
        exit;
    } else {
        echo 'Error al subir el archivo.';
    }
}
?>

