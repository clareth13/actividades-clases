<?php 
$nombre="Clareth";
$talla=1.63;
$peso=60;
$musica=array("ILVOLO","Taemin");
$bandera=true;
print ("nombre: ".$nombre."<br>");
printf (" talla: ".$talla."<br>");
print_r (" peso: ".$peso."<br>");
echo (" bandera: ".$bandera."<br>");
var_dump ($musica);


/*Operadores*/
$a=$_GET['a'];
$b=$_GET['b'];
echo ("<br>"."El resultado de la suma es: ".$a+$b."<br>");
echo ("El resultado de la resta es: ".$a-$b."<br>");
echo ("El resultado de la multiplicacion es: ".$a*$b."<br>");
echo ("El resultado de la division es: ".$a/$b."<br>");
echo ("El resultado de la modulo es: ".$a%$b."<br>");

/*Comparativos*/
var_dump ($a>$b);
echo "<br>";
var_dump ($a<$b);
echo "<br>";
var_dump ($a<=$b);
echo "<br>";
var_dump ($a>=$b);
echo "<br>";
var_dump ($a==$b);
echo "<br>";
var_dump ($a===$b);
echo "<br>";
var_dump ($a<=>$b);
echo "<br>";





?> 

