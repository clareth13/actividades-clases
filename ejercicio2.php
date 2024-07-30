<?php
$cliente="Juan Perez";
//Saber el tamano de la cadena
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
//Limpiar los espacios en blanco
$texto= "Juan perz ";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2."<br>";
// Convertir minusculas
echo (strtolower($cliente));
echo "<br>";
// Convertir mayusculas
echo (strtoupper($texto));
echo "<br>";
var_dump(strtolower($cliente)===strtolower($texto));
//Remplazar
echo "<br>";
echo str_replace("Juan","Jose",$cliente);
//Buscar una posicion
echo "<br>";
echo strpos($cliente,"Perez");
//Buscar
echo "<br>";
echo substr_count($cliente,"e");
echo "<br>";
//Dividir cadena
$cadena=explode("e",$texto);
var_dump($cadena);
//UNir cadena
echo "<br>";
$cadena=implode("e",$cadena);
var_dump($cadena);

?>