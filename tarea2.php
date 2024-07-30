<?php

// Asignar valores 
$array1 = [
    'n1' => $_GET['n1'],
    'n2' => $_GET['n2'],
    'n3' => $_GET['n3']
];

print_r($array1);
echo "<br>";

$array2 = [
    'a' => $_GET['a'],
    'b' => $_GET['b'],
    'c' => $_GET['c']
];

print_r($array2);
echo "<br>";

// Asignar valores 
$a = $array2['a'];
$b = $array2['b'];
$c = $array2['c'];

// Comparativos
var_dump($a > $b);
echo "<br>";
var_dump($a > $c);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a < $c);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a <= $c);
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a >= $c);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a == $c);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a === $c);
echo "<br>";
var_dump($a <=> $b);
echo "<br>";
var_dump($a <=> $c);
echo "<br>";

?>