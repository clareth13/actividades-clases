<?php
$carpeta="prueba/";
$archivo="ejercicio1.php";
echo (file_exists($carpeta.$archivo))?"Archivo existente" : "Archivo no existe" ."<br>";
echo(is_file($archivo))?"Archivo existente": "Archivo no existe"."<br>";
echo (is_dir($carpeta))? "Carpeta existente": "Carpeta no exite";
// Archivos imagenes
$archivo2="jk.png";
if (file_exists($carpeta.$archivo2)) {
    $size=filesize($carpeta.$archivo2);
    $kb=$size/1024;
    $mb=$kb/1024;
    $creado=filectime($carpeta.$archivo2);
    $creado_fecha=date("d/m/Y H:i:s",$creado);
    $modificado=filemtime($carpeta.$archivo2);
    $modificado_fecha=date("d/m/Y H:i:s",$modificado);
    echo "Tamano".$mb."<br>";
    echo "Creado".$creado_fecha"<br>";
    echo "Modificado".$modificado_fecha;
}
else {
    echo "Archivo no existe";
}
?>