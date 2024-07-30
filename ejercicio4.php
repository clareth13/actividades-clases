<?php
//Estructuras Repetitivas
//Sentencia if
/*
$compra=$_GET['c'];
$puntos=0;
if($compra>50 && $compra<=100){
    $puntos=$puntos+5;
}
elseif($compra>100 && $compra<=200){
    $puntos=$puntos+15;
}
elseif($compra>200 && $compra<=500){
    $puntos=$puntos+30;
}
elseif($compra>500){
    $puntos=$puntos+60;
}
echo "Cantidad de puntos ".$puntos;

// Estructuras Repetitivas
// Sentencia ternaria
$compra = $_GET['c'];
$puntos = ($compra > 50 && $compra <= 100) ? 5 : (
          ($compra > 100 && $compra <= 200) ? 15 : (
          ($compra > 200 && $compra <= 500) ? 30 : (
          ($compra > 500) ? 60 : 0)));

echo "Cantidad de puntos " . $puntos;

switch (true) {
    case ($compra > 50 && $compra <= 100):
        $puntos = 5;
        break;
    case ($compra > 100 && $compra <= 200):
        $puntos = 15;
        break;
    case ($compra > 200 && $compra <= 500):
        $puntos = 30;
        break;
    case ($compra > 500):
        $puntos = 60;
        break;
    default:
        $puntos = 0;
        break;
}
echo "Cantidad de puntos " . $puntos;
*/
//Estructuras WHILE
/*
$inferior = $_GET['i'];
$superior = $_GET['s'];
$c = 0; 
/*
while ($inferior <= $superior) {
    if ($inferior % 7 == 0) {
        $c++; 
    }
    $inferior++; 
}
echo "Cantidad de múltiplos de 7 entre " . $c;
/*
for ($i = $inferior; $i <= $superior; $i++) {
    if ($i % 7 == 0) {
        $c++; 
    }
}
echo "Cantidad ". $c;
*/

//
$electrodomesticos=[
    ["nombre"=>"Televisor",
    "precio"=>400,
    "estado"=>true],
    ["nombre"=>"Heladera",
    "precio"=>300,
    "estado"=>false],
    ["nombre"=>"Bicicleta",
    "precio"=>100,
    "estado"=>true],
];

foreach ($electrodomesticos as $productos) {
    echo $productos['nombre']."<br>";
    echo $productos['precio']."<br>";
    echo ($productos['estado'])?"Disponible":"No Disponible"."<br>";
}

echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
?>



