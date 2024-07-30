<?php
$directorio_subida = 'practica_3/';

// Crear el directorio si no existe
if (!is_dir($directorio_subida)) {
    mkdir($directorio_subida, 0755, true);
}

// Verifica si el formulario se ha enviado correctamente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['documento_proyecto'])) {
    $nombre_proyecto = $_POST['nombre_proyecto'];
    $descripcion_proyecto = $_POST['descripcion_proyecto'];
    $documento_proyecto = $_FILES['documento_proyecto'];

    // Validar el nombre del proyecto
    if (!preg_match('/^[A-Za-z0-9\s]+$/', $nombre_proyecto)) {
        die('Error: El nombre del proyecto debe contener solo letras, números y espacios.');
    }

    // Validar la descripción del proyecto
    if (strlen($descripcion_proyecto) < 50) {
        die('Error: La descripción del proyecto debe tener al menos 50 caracteres.');
    }

    // Validar el archivo
    $extension = pathinfo($documento_proyecto['name'], PATHINFO_EXTENSION);
    $archivo_tmp = $documento_proyecto['tmp_name'];
    $tamano = $documento_proyecto['size'];

    // Validar extensión y tamaño del archivo
    if ($extension != 'pdf' && $extension != 'docx') {
        die('Error: El documento debe ser un archivo PDF o DOCX.');
    }

    if ($tamano > 5 * 1024 * 1024) { // 5 MB
        die('Error: El tamaño del archivo excede el límite de 5 MB.');
    }

    // Generar un nombre único para el archivo
    $nombre_limpio = preg_replace('/\s+/', '_', $nombre_proyecto);
    $nombre_archivo = $nombre_limpio . '_' . date('YmdHis') . '.' . $extension;

    // Mover el archivo al directorio especificado
    if (move_uploaded_file($archivo_tmp, $directorio_subida . $nombre_archivo)) {
        echo 'Archivo subido exitosamente.<br>';
        echo 'Nombre del Archivo: ' . htmlspecialchars($nombre_archivo) . '<br>';
    } else {
        echo 'Error al subir el archivo.';
    }
} else {
    die('Error: No se han recibido los parámetros correctamente.');
}
?>
