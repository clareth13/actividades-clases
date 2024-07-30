<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php

    $vehiculos = [
        ["vehiculo" => "Vehículo 1", "tiempo_espera" => 10],
        ["vehiculo" => "Vehículo 2", "tiempo_espera" => 5],
        ["vehiculo" => "Vehículo 3", "tiempo_espera" => 7],
        ["vehiculo" => "Vehículo 4", "tiempo_espera" => 12],
        ["vehiculo" => "Vehículo 5", "tiempo_espera" => 3],
        ["vehiculo" => "Vehículo 6", "tiempo_espera" => 8],
        ["vehiculo" => "Vehículo 7", "tiempo_espera" => 6],
        ["vehiculo" => "Vehículo 8", "tiempo_espera" => 11],
        ["vehiculo" => "Vehículo 9", "tiempo_espera" => 4],
        ["vehiculo" => "Vehículo 10", "tiempo_espera" => 9],
        ["vehiculo" => "Vehículo 11", "tiempo_espera" => 2],
        ["vehiculo" => "Vehículo 12", "tiempo_espera" => 14],
        ["vehiculo" => "Vehículo 13", "tiempo_espera" => 1],
        ["vehiculo" => "Vehículo 14", "tiempo_espera" => 15],
        ["vehiculo" => "Vehículo 15", "tiempo_espera" => 13]
    ];

    $vehiculo_max_espera = $vehiculos[0];
    foreach ($vehiculos as $vehiculo) {
        if ($vehiculo["tiempo_espera"] > $vehiculo_max_espera["tiempo_espera"]) {
            $vehiculo_max_espera = $vehiculo;
        }
    }
    echo "El vehículo que esperó más tiempo es: " . $vehiculo_max_espera["vehiculo"] . " con " . $vehiculo_max_espera["tiempo_espera"] . " minutos de espera <br>";

    $total_espera = 0;
    foreach ($vehiculos as $vehiculo) {
        $total_espera += $vehiculo["tiempo_espera"];
    }
    $promedio_espera = $total_espera / count($vehiculos);
    echo "El promedio de tiempos de espera es: " . round($promedio_espera,2) . " minutos.";
  ?>

  
</body>
</html>