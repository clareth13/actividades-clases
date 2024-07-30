<?php
  // Datos de temperaturas por fecha (ejemplo)
  $temperaturas = [
    "2021-02-11" => 30,
    "2019-07-21" => 17,
    "2013-11-12" => 4,
    "2018-10-13" => 21,
    "2015-05-17" => 13,
    "2017-03-27" => 22,
    "2016-02-08" => 12,
    "2013-07-27" => 21,
    "2020-01-12" => 24,
    "2022-08-13" => 25,
    "2023-04-15" => 20,
    "2024-12-12" => 14,
    "2021-07-13" => 15,
    "2013-05-14" => 16,
    "2027-07-15" => 18,
  ];

  // Variables para almacenar la suma total, el día más caluroso y el día más frío
  $suma_temperaturas = 0;
  $dia_caluroso = "";
  $dia_frio = "";
  $primer_iteracion = true;
 
  foreach ($temperaturas as $fecha => $temp) { //clave y valor
    $suma_temperaturas += $temp;

    if ($primer_iteracion) {
      $max_temp = $temp;
      $min_temp = $temp;
      $dia_caluroso = $fecha;
      $dia_frio = $fecha;
      $primer_iteracion = false;
    }
    // Determinar el día más caluroso
    if ($temp > $max_temp) {
      $max_temp = $temp;
      $dia_caluroso = $fecha;
    }

    // Determinar el día más frío
    if ($temp < $min_temp) {
      $min_temp = $temp;
      $dia_frio = $fecha;
    }
  }

  // Calcular el promedio de temperatura
  $promedio_temp = $suma_temperaturas / count($temperaturas);

  echo "El dia mas caluroso es " . $dia_caluroso . " con temperatura " . $max_temp . " °C <br>";
  echo "El día mas frio es " . $dia_frio . " con temperatura " . $min_temp . " °C <br>";
  echo "El promedio de las temperaturas es " . round($promedio_temp, 2) . "<br>";
  ?>