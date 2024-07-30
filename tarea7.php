<?php

// Función para contar el número de palabras en el texto
function contarPalabras($texto) {
    $palabras = str_word_count($texto, 1);//contar las palabras []
    return count($palabras);
}
// Función para contar el número de caracteres en el texto
function contarCaracteres($texto) {
    return strlen($texto);
}
function contarLetras($texto) {
    $texto = strtolower($texto); // minúsculas
    $letras = count_chars($texto, 1);
    $frecuencia = [];
    foreach ($letras as $cadaletra => $frecuenciaLetra) {
        $letra = chr($cadaletra);
        if (ctype_alpha($letra)) {
            $frecuencia[$letra] = $frecuenciaLetra;
        }
    }
    return $frecuencia;
}
$texto =$_GET['texto'];
// Contar frecuencia de letras
$frecuenciaLetras = contarLetras($texto);
echo "Frecuencia de letras:\n";
foreach ($frecuenciaLetras as $letra => $frecuencia) {
    echo $letra . ": " . $frecuencia . "\n";
}

// Contar palabras
$numPalabras = contarPalabras($texto);
echo "Número de palabras: $numPalabras<br>";

// Contar caracteres
$numCaracteres = contarCaracteres($texto);
echo "Número de caracteres: $numCaracteres<br>";

?>