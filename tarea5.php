<?php
    $competidores = [
        ["nombre" => "Carla", "tiempo" => "10:30"],
        ["nombre" => "Pedro", "tiempo" => "10:45"],
        ["nombre" => "Luis", "tiempo" => "11:00"],
        ["nombre" => "Maria", "tiempo" => "10:35"],
        ["nombre" => "Ana", "tiempo" => "10:55"],
        ["nombre" => "Carlos", "tiempo" => "11:10"],
        ["nombre" => "Lucia", "tiempo" => "10:25"],
        ["nombre" => "Miguel", "tiempo" => "11:05"],
        ["nombre" => "Sofia", "tiempo" => "10:50"],
        ["nombre" => "Daniel", "tiempo" => "10:40"],
    ];

    $tiempo = [
        strtotime($competidores[0]["tiempo"]),
        strtotime($competidores[1]["tiempo"]),
        strtotime($competidores[2]["tiempo"]),
        strtotime($competidores[3]["tiempo"]),
        strtotime($competidores[4]["tiempo"]),
        strtotime($competidores[5]["tiempo"]),
        strtotime($competidores[6]["tiempo"]),
        strtotime($competidores[7]["tiempo"]),
        strtotime($competidores[8]["tiempo"]),
        strtotime($competidores[9]["tiempo"])
    ];
    //Tiempo asc
    echo "<pre>"; //Salto de linea
    var_dump($competidores);
    echo "</pre>";
    asort($tiempo);

    $indices = array_keys($tiempo);

    $ganador = $competidores[$indices[0]];
    echo "Ganador: " . $ganador['nombre'] . " : " . $ganador['tiempo'] . "<br>";

    $segundo = $competidores[$indices[1]];
    $diferencia = $tiempo[$indices[1]] - $tiempo[$indices[0]];
    echo "Diferencia del segundo respecto al primero: " . $diferencia . "segundos <br>";

    $ultimo = $competidores[$indices[9]];
    echo "Último: " . $ultimo['nombre'] . " tiempo: " . $ultimo['tiempo'] . "<br>";

    echo "Primeros tres lugares:<br>";
    echo "1." . $competidores[$indices[0]]['nombre'] . " tiempo: " . $competidores[$indices[0]]['tiempo'] . "<br>";
    echo "2." . $competidores[$indices[1]]['nombre'] . " tiempo: " . $competidores[$indices[1]]['tiempo'] . "<br>";
    echo "3." . $competidores[$indices[2]]['nombre'] . " tiempo: " . $competidores[$indices[2]]['tiempo'] . "<br>";
    ?>