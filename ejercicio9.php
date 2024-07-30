<?php 
$archivo="prueba.txt";
echo(touch($archivo))?"Archivo existe" :"Arhivo no existe";
echo "<br>";
$datos=fopen($archivo,"r+");
//var_dump($datos);

if (touch($archivo)) {
    $datos=fopen($archivo,"a");
    fwrite($datos,"Hoy es lunes \n");
    fwrite($datos,"Hoy es lunes de clases \n ");

    fclose($datos);
}
$datos=fopen($archivo,"r");
while (!feof($datos)) {
    $line=fgets($datos,1024);
    echo ($line)."<br>";
}
fclose($datos);


?>