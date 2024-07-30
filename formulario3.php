<?php
if (isset($_POST['bandera'])) {
    if (isset($_FILES['archivo'])) {
        $archivoNombre = $_FILES['archivo']['name'];
        $archivoTipo = $_FILES['archivo']['type'];
        $archivoTamano = $_FILES['archivo']['size'];
        $archivoTmpNombre = $_FILES['archivo']['tmp_name'];
        $archivoError = $_FILES['archivo']['error'];

        echo "Filename: " . $archivoNombre . "<br>";
        echo "Type: " . $archivoTipo . "<br>";
        echo "Size: " . $archivoTamano . "<br>";
        echo "Temp name: " . $archivoTmpNombre . "<br>";
        echo "Error: " . $archivoError . "<br>";
    } else {
        echo "No se ha subido ningún archivo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo">
        <input type="hidden" name="bandera">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>