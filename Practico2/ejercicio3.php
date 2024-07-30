<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $estudiantes = [
            ["nombre" => "Estudiante 1", "nota" => 85, "estado" => "estratégico"],
            ["nombre" => "Estudiante 2", "nota" => 78, "estado" => "autónomo"],
            ["nombre" => "Estudiante 3", "nota" => 90, "estado" => "resolutivo"],
            ["nombre" => "Estudiante 4", "nota" => 88, "estado" => "receptivo"],
            ["nombre" => "Estudiante 5", "nota" => 95, "estado" => "pre formal"],
            ["nombre" => "Estudiante 6", "nota" => 100, "estado" => "estratégico"],
            ["nombre" => "Estudiante 7", "nota" => 60, "estado" => "autónomo"],
            ["nombre" => "Estudiante 8", "nota" => 82, "estado" => "resolutivo"],
            ["nombre" => "Estudiante 9", "nota" => 90, "estado" => "receptivo"],
            ["nombre" => "Estudiante 10", "nota" => 67, "estado" => "pre formal"],
            ["nombre" => "Estudiante 11", "nota" => 74, "estado" => "estratégico"],
            ["nombre" => "Estudiante 12", "nota" => 88, "estado" => "autónomo"],
            ["nombre" => "Estudiante 13", "nota" => 91, "estado" => "resolutivo"],
            ["nombre" => "Estudiante 14", "nota" => 84, "estado" => "receptivo"],
            ["nombre" => "Estudiante 15", "nota" => 77, "estado" => "pre formal"],
            ["nombre" => "Estudiante 16", "nota" => 83, "estado" => "estratégico"],
            ["nombre" => "Estudiante 17", "nota" => 79, "estado" => "autónomo"],
            ["nombre" => "Estudiante 18", "nota" => 85, "estado" => "resolutivo"],
            ["nombre" => "Estudiante 19", "nota" => 91, "estado" => "receptivo"],
            ["nombre" => "Estudiante 20", "nota" => 66, "estado" => "pre formal"]
        ];

        $contador_pre_formal = 0;
        foreach ($estudiantes as $estudiante) {
            if ($estudiante["estado"] == "pre formal") {
                $contador_pre_formal++;
            }
        }

        if ($contador_pre_formal > 0) {
            echo "Hay $contador_pre_formal estudiantes en estado 'Pre formal'. Necesita retroalimentación <br>";
        } else {
            echo "No hay estudiantes en estado 'Pre formal'<br>";
        }

        $total_notas_estrategico = 0;
        $contador_estrategico = 0;

        foreach ($estudiantes as $estudiante) {
            if ($estudiante["estado"] == "estratégico") {
                $total_notas_estrategico += $estudiante["nota"];
                $contador_estrategico++;
            }
        }

        if ($contador_estrategico > 0) {
            $promedio_estrategico = $total_notas_estrategico / $contador_estrategico;
            echo "El promedio de notas de los estudiantes en estado 'estratégico' es: " . round($promedio_estrategico,2) . "<br>";
        } else {
            echo "No hay estudiantes en estado 'estratégico' <br>";
        }
    ?>

</body>
</html>