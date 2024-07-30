<?php
function correocontrasena($nombre, $apellido) {
    $correo = strtolower(substr($nombre, 0, 1)) . strtolower($apellido) . "@upds.net.bo";
    $contrasena = '';
    for ($i = 0; $i < 6; $i++) {
        $contrasena .= rand(1, 9);
    }
    return array($correo, $contrasena);
}
$nombre = "Clareth";
$apellido = "Tejerina";
$datos =correocontrasena($nombre, $apellido);
echo $datos[0] ."<br>";
echo $datos[1] ;
?>
