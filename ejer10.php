<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $carrera = ($_POST['carrera']);
    
    // Validación de que los campos no estén vacíos
    if (empty($nombre) || empty($apellido) || empty($carrera)) {
        die('Error: Completar todos los campos.');
    }

    // Datos a guardar
    $datos = " $nombre\n $apellido\n $carrera\n\n";
    
    // Guardar los datos en el archivo
    $archivo = 'datos.txt';
    if (file_exists($archivo)) {
        $fp = fopen($archivo, 'r+');
        fseek($fp, 0, SEEK_END);
        fwrite($fp, $datos);
        fclose($fp);
        echo 'Datos guardados correctamente.';

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <form action=" " method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br><br>
        
        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera" required>
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
