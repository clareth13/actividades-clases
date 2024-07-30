<?php
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>";
$platos=array("saice","sopa","pescado");
$platos=["saice","sopa","chancho"];
var_dump($platos);
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>";
//Insertar datos
$platos[2]="Nuevo plato";
$platos[3]="chancho";
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>";
//Insetar al inicio
array_unshift($platos,"Jugos");
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>";
//Insertar al final
array_push($platos,"ensaladas");
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>";

//Array Multidimensional
//Array de dos dimensiones
$electrodomesticos =[
        "nombre"=>"televisor",
        "modelo"=>"LG",
        "precio"=>450,
        "pulgadas"=>16,
        "procedencia"=>"china",
        "accesorios"=>[
            "game"=>"si",
            "smart"=>"no",
            "control"=>"si",

        ]
];
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";
echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>" .
$electrodomesticos["accesorios"]["smart"];


///Otra forma de declarar
//Array de dos dimensiones
$electrodomesticos =array(
    "nombre"=>"televisor",
    "modelo"=>"LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=>"china",
    "accesorios"=>array(
        "game"=>"si",
        "smart"=>"no",
        "control"=>"si",

    )
    );
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";
echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>" .
$electrodomesticos["accesorios"]["smart"];

//array_push($electrodomesticos,["accesorios"],["usb"],"si");
$electrodomesticos["accesorios"]["usb"]="si";
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";

//manejar los indices 
$clientes=[];
var_dump(empty($platos));
var_dump(empty($electrodomesticos)); //esta vacio
var_dump(empty($clientes));
var_dump(isset($platos)); //si fue declarada
var_dump(isset($electrodomesticos["procedencia"]));


//Ordenar los Arrays
//Ordenar de menor a mayor
sort($platos);
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>";
//Ordenar de mayor a menor
rsort($platos);
echo "<pre>"; //Salto de linea
var_dump($platos);
echo "</pre>"; 
//Ordenar array de dos dimensiones ordena por los valores de acuerdo al orden alfabetico asc
asort($electrodomesticos);
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";

//Ordenar array de dos dimensiones ordena por los valores de acuerdo al orden alfabetico desc
arsort($electrodomesticos);
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";

//Ordenar array de dos dimensiones inidces de acuerdo al orden alfabetico asc
ksort($electrodomesticos);
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";


//Ordenar array de dos dimensiones inidces de acuerdo al orden alfabetico desc
krsort($electrodomesticos);
echo "<pre>"; //Salto de linea
var_dump($electrodomesticos);
echo "</pre>";


?>