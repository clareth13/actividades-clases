
<?php
$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];

// Saber el tamaño de la cadena
echo strlen($usuario);
echo "<br>";

// Dividir en tres partes
$tamano = strlen($usuario);
$partetamano = floor($tamano / 3);

$parte1 = substr($usuario, 0, $partetamano);
$parte2 = substr($usuario, $partetamano, $partetamano);
$parte3 = substr($usuario, 2 * $partetamano);

// Asignar las partes Creado un arreglo
$partesUsuario = array($parte1, $parte2, $parte3);

// Mostrar 
var_dump($partesUsuario);
echo "<br>";
foreach ($partesUsuario as $parte) {
    echo $parte . "<br>";
}

// Buscar la letra 'm' 
$resultados = array_map(function($parte) {
    return strpos($parte, 'm') !== false ? 'true' : 'false';
}, $partesUsuario);

// Redutados
var_dump($resultados);
echo "<br>";
foreach ($resultados as $resultado) {
    echo $resultado . "<br>";
}
?>
