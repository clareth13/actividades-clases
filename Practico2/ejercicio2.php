
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>
<body>

  <?php
  
    $productos = [
        ['producto' => 'Crema Hidratante', 'fecha_vencimiento' => '2024-07-05'], // Vencido
        ['producto' => 'Protector Solar', 'fecha_vencimiento' => '2024-07-13'],
        ['producto' => 'Gel de Ducha', 'fecha_vencimiento' => '2024-07-02'], // Vencido
        ['producto' => 'Champú', 'fecha_vencimiento' => '2024-07-25'],
        ['producto' => 'Acondicionador', 'fecha_vencimiento' => '2024-07-17'],
        ['producto' => 'Desodorante', 'fecha_vencimiento' => '2024-07-14'],
        ['producto' => 'Crema facial', 'fecha_vencimiento' => '2024-07-03'], // Vencido
        ['producto' => 'Jabón Líquido', 'fecha_vencimiento' => '2024-07-12'],
        ['producto' => 'Loción Corporal', 'fecha_vencimiento' => '2024-07-18'],
        ['producto' => 'Exfoliante', 'fecha_vencimiento' => '2024-07-19'],
        ['producto' => 'Aceite Corporal', 'fecha_vencimiento' => '2024-07-22'],
        ['producto' => 'Crema de Manos', 'fecha_vencimiento' => '2024-07-21'],
        ['producto' => 'Mascarilla Facial', 'fecha_vencimiento' => '2024-07-23'],
        ['producto' => 'Gel para el Cabello', 'fecha_vencimiento' => '2024-07-24'],
        ['producto' => 'Spray para el Cabello', 'fecha_vencimiento' => '2024-07-26'],
        ['producto' => 'Crema de Afeitar', 'fecha_vencimiento' => '2024-07-27'],
        ['producto' => 'Laca para el Cabello', 'fecha_vencimiento' => '2024-07-28'],
        ['producto' => 'Tónico Facial', 'fecha_vencimiento' => '2024-07-29'],
        ['producto' => 'Serum Facial', 'fecha_vencimiento' => '2024-07-30'],
        ['producto' => 'Perfume', 'fecha_vencimiento' => '2024-07-31']
    ];
    echo "<pre>";
    print_r ($productos);
    echo "</pre>";
    $fecha_actual = date('Y-m-d');
    $productos_por_vencer = 0;

    foreach ($productos as $producto) {
        $fecha_vencimiento = $producto['fecha_vencimiento'];
        if ($fecha_vencimiento < $fecha_actual) {
            $productos_por_vencer++;
        }
    }
    echo "Cantidad de productos por vencer: $productos_por_vencer\n";


















/*
    foreach ($productven as $producto) {
      echo "<li>Producto: " . $producto['producto'] . " - Fecha de Vencimiento: " . $producto['fecha_vencimiento'] . "</li>";
  }
      */
  ?>

</body>
</html>