<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJERCICIO 1</title>
</head>
<body>
  
  <?php
  $emotions = ["me gusta", "comentarios", "compartir"];
  $data = [];

  $gusta = 0;
  $comentarios = 0;
  $compartir = 0;

  for ($i = 0; $i < 50; $i++) { 
    $aleatorio = array_rand($emotions, 1);
    array_push($data, $emotions[$aleatorio]);

    switch ($data[$i]) {
      case "me gusta":
        $gusta++;
        break;
      case "comentarios":
        $comentarios++;
        break;
      case "compartir":
        $compartir++;
        break;
    }
  }
  echo "<pre>";
  print_r ($data);
  echo "</pre>";
  $total = count($data);
  $promedio_gusta = $gusta / $total;
  $promedio_comentarios = $comentarios / $total;
  $promedio_compartir = $compartir / $total;

  $max = max($gusta, $comentarios, $compartir);
  $max_estado = "";
  if ($max === $gusta) {
    $max_estado = "me gusta";
    $max_count = $gusta;
  } elseif ($max === $comentarios) {
    $max_estado = "comentarios";
    $max_count = $comentarios;
  } else {
    $max_estado = "compartir";
    $max_count = $compartir;
  }


  $min = min($gusta, $comentarios, $compartir);
  if ($min === $gusta) {
    $min_estado = "me gusta";
    $min_count = $gusta;
  } elseif ($min === $comentarios) {
    $min_estado = "comentarios";
    $min_count = $comentarios;
  } else {
    $min_estado = "compartir";
    $min_count = $compartir;
  }

  echo "<p>El estado más utilizado es <strong>$max_estado</strong> con $max_count usos.</p>";
  echo "<p>El estado menos utilizado es <strong>$min_estado</strong> con $min_count usos.</p>";
  echo "<p>Promedio de 'me gusta': " . round($promedio_gusta, 2) . "</p>";
  echo "<p>Promedio de 'comentarios': " . round($promedio_comentarios, 2) . "</p>";
  echo "<p>Promedio de 'compartir': " . round($promedio_compartir, 2) . "</p>";
  ?>
  
</body>
</html>
