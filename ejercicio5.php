<?php
//Funciones
/*
$nombre=$_GET['nombre'];
$monto=$_GET['cantidad'];
$edad=$_GET['edad'];
$iva=$_GET['iva'];
$monto_iva=0;
function ConIva(int $monto): float
{
    $monto_iva=$monto*(1+0.13);
    return $monto_iva;
}
function SinIva(int $monto): float
{
    $monto_iva=$monto/(1+0.13);
    return $monto_iva;
}
try {
    echo "Resultado ".(($iva=="true")?(ConIva($monto)):(SinIva($monto)));

} catch (TypeError $e) {
    echo "Error".$e -> getMessage();
}
echo "Edad".($edad>=18)?"Puedes realizar la compra":"No puedes realizar la compra "
*/
//Ejercicio 2
//Array de notas y calcular el promedio de 10 estudiantes
function promedio(int|float ...$notas)
{
    $suma=0;
    $prom=0;
    foreach ($notas as $nota) {
        $suma+=$nota;
    }

 return $prom=$suma/count($notas);
 //yield $suma;
 //  yield $nota;
}
echo "el promedio de notas es:".promedio(45,56,34,22,69);
?>