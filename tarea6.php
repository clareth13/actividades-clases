<?php

$fechaIngresada = new DateTime($_GET['f']); 
$inicio = new DateTime($fechaIngresada->format('Y') . '-06-21');
$fin = new DateTime($fechaIngresada->format('Y') . '-09-21');

if ($fechaIngresada >= $inicio && $fechaIngresada <= $fin) {
    echo "Es verano";
} else {
    echo "No es verano";
}
?>