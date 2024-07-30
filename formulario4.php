<?php 
if (isset($_POST['bandera'])) {
    $nombre = $_POST['nombre'];
    $foto = $_FILES['foto'];
    $expediente = $_FILES['expediente'];
    $errorMessage = "";

    if ($foto['type'] !== 'image/png') {
        $errorMessage .= "La imagen debe ser archivo png.<br>";
    }
    if ($foto['size'] > 2 * 1024 * 1024) {
        $errorMessage .= "La imagen no debe ser mayor a 2MB.<br>";
    }

    if ($expediente['type'] !== 'application/pdf') {
        $errorMessage .= "El expediente debe ser un pdf.<br>";
    }
    if ($expediente['size'] > 10 * 1024 * 1024) {
        $errorMessage .= "El expediente no debe ser mayor a 10MB.<br>";
    }

    if ($errorMessage) {
        echo "<p class='error'>$errorMessage</p>";
    } else {
        echo "<h3>Formulario Enviado Correctamente</h3>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Foto:</strong><br><img src='data:image/png;base64," . base64_encode(file_get_contents($foto['tmp_name'])) . "' alt='Foto' style='max-width: 200px;'></p>";
        echo "<p><strong>Expediente:</strong> <a href='data:application/pdf;base64," . base64_encode(file_get_contents($expediente['tmp_name'])) . "' download='expediente.pdf'>Ver pdf</a></p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Archivo</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*" required>
        <br><br>
        <label for="expediente">Expediente:</label>
        <input type="file" name="expediente" id="expediente" accept="/" required>
        <br><br>
        <input type="hidden" name="bandera" value="1">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>