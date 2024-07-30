<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Vivienda</title>

</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <?php
    // Función para validar solo letras y espacios con límite de 50 caracteres
    function validarTexto($texto) {
        return preg_match('/^[a-zA-Z\s]{1,50}$/', $texto);
    }

    // Función para limpiar datos de entrada
    function limpiarEntrada($data) {
        return htmlspecialchars(trim($data));
    }

    // Función para validar el archivo de imagen
    function validarImagen($file) {
        $maxSize = 2 * 1024 * 1024; // 2 MB
        $validTypes = ['image/png', 'image/png'];

        if ($file['error'] != UPLOAD_ERR_OK) {
            return "Error al subir el archivo.";
        }

        if ($file['size'] > $maxSize) {
            return "El archivo no debe exceder los 2 MB.";
        }

        if (!in_array($file['type'], $validTypes)) {
            return "El archivo debe ser una imagen JPG o PNG.";
        }

        return null;
    }

    // Función para validar el comentario adicional
    function validarComentario($comentario) {
        return strlen($comentario) <= 500;
    }

    // Arrays con opciones para los campos
    $inputsCapituloA = [
        ['id' => 'segmento', 'label' => '1. Segmento:', 'type' => 'text'],
        ['id' => 'manzana', 'label' => '2. Manzana:', 'type' => 'text'],
        ['id' => 'nro-predio', 'label' => '3. Número de predio:', 'type' => 'text'],
        ['id' => 'total-vivienda', 'label' => '4. Total de viviendas en el predio:', 'type' => 'text'],
        ['id' => 'nro-vivienda', 'label' => '5. Número de vivienda:', 'type' => 'text'],
        ['id' => 'ciudad-comunidad', 'label' => '6. Ciudad o comunidad:', 'type' => 'text'],
        ['id' => 'direccion', 'label' => '7. Dirección:', 'type' => 'text'],
        ['id' => 'nro-puerta', 'label' => '8. Número de puerta:', 'type' => 'text'],
        ['id' => 'planta-piso', 'label' => '9. Planta o piso:', 'type' => 'text'],
        ['id' => 'nro-departamento', 'label' => '10. Número de departamento:', 'type' => 'text'],
        ['id' => 'nombre-edificio', 'label' => '11. Nombre del edificio:', 'type' => 'text'],
        ['id' => 'bloque', 'label' => '12. Bloque:', 'type' => 'text']
    ];

    $selectCapituloB = [
        'id' => 'tipo-vivienda',
        'label' => 'Tipo de vivienda:',
        'options' => [
            'casa' => 'Casa',
            'apartamento' => 'Apartamento',
            'otros' => 'Otros'
        ]
    ];

    $optionsCapituloC = [
        'material-paredes' => [
            'ladrillo' => 'Ladrillo, bloque de cemento, hormigón',
            'adobe' => 'Adobe, tapial',
            'tabique' => 'Tabique, quinche',
            'piedra' => 'Piedra',
            'madera' => 'Madera',
            'cana' => 'Caña, palma, tronco',
            'otro' => 'Otro'
        ],
        'revoque' => [
            'si' => 'Sí',
            'no' => 'No'
        ],
        'material-techos' => [
            'calamina' => 'Calamina o plancha',
            'teja' => 'Teja',
            'losa' => 'Losa de hormigón armado',
            'paja' => 'Paja, palma, barro, jata',
            'otro' => 'Otro'
        ],
        'material-pisos' => [
            'tierra' => 'Tierra',
            'madera' => 'Tablero de madera',
            'machimbre' => 'Machimbre, parquet',
            'ceramica' => 'Cerámica, porcelanato',
            'cemento' => 'Cemento',
            'mosaico' => 'Mosaico',
            'ladrillo' => 'Ladrillo',
            'flotante' => 'Piso flotante',
            'otro' => 'Otro'
        ],
        'agua-procedencia' => [
            'caneria' => 'Cañería',
            'pileta' => 'Pileta pública',
            'cosecha' => 'Cosecha de agua',
            'pozo-excavado' => 'Pozo excavado',
            'pozo-no-protegido' => 'Pozo no protegido',
            'manantial' => 'Manantial',
            'rio' => 'Río',
            'carro-repartidor' => 'Carro repartidor',
            'otro' => 'Otro'
        ],
        'agua-distribucion' => [
            'caneria-interior' => 'Por cañería dentro de la vivienda',
            'caneria-exterior' => 'Por cañería fuera de la vivienda',
            'no-distribuye' => 'No se distribuye'
        ],
        'energia-electrica' => [
            'servicio-publico' => 'Servicio público',
            'motor-propio' => 'Motor propio',
            'panel-solar' => 'Panel solar',
            'otro' => 'Otro',
            'no-tiene' => 'No tiene'
        ],
        'combustible-cocina' => [
            'gas-natural' => 'Gas natural',
            'gas-caneria' => 'Gas por cañería',
            'lenia' => 'Leña',
            'guano' => 'Guano',
            'electricidad' => 'Electricidad',
            'solar' => 'Energía solar',
            'otro' => 'Otro',
            'no-cocina' => 'No cocina'
        ],
        'disposicion-basura' => [
            'contenedor' => 'La depositan en el contenedor o basurero público',
            'carro-basurero' => 'La entregan al carro basurero',
            'terreno' => 'La botan en un terreno',
            'rio' => 'La botan al río',
            'quema' => 'La queman',
            'entierra' => 'La entierran',
            'otro' => 'Otro'
        ],
        'cuarto-cocina' => [
            'si' => 'Sí',
            'no' => 'No'
        ],
        'cuartos-ocupados' => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8-o-mas' => '8 o más'
        ],
        'cuartos-dormir' => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8-o-mas' => '8 o más'
        ],
        'tienen-bano' => [
            'si-usado' => 'Sí, usado solo para hogar',
            'si-compartido' => 'Sí, compartido con otros hogares',
            'no' => 'No tiene'
        ],
        'desague-bano' => [
            'red' => 'A la red',
            'camara-septica' => 'A una cámara séptica',
            'pozo-ciego' => 'A un pozo ciego',
            'pozo-absorcion' => 'A un pozo de absorción',
            'superficie' => 'A la superficie',
            'ecologico' => 'Es baño ecológico'
        ],
        'tipo-vivienda-ocupacion' => [
            'propia-totalmente' => 'Propia y totalmente pagado',
            'propia-pagando' => 'Propia y la está pagando',
            'prestada' => 'Prestada por pariente',
            'alquilada' => 'Alquilada',
            'anticretico' => 'En contrato anticrético',
            'mixto' => 'En contrato mixto',
            'cedida' => 'Cedida',
            'otra' => 'Otra'
        ],
        'equipos' => [
            'televisor' => 'Televisor',
            'video-camara' => 'Videocámara',
            'estereo' => 'Estéreo',
            'equipo-sonido' => 'Equipo de sonido',
            'reproductor-cd' => 'Reproductor de CD',
            'aire-acondicionado' => 'Aire acondicionado',
            'microondas' => 'Microondas',
            'lavadora' => 'Lavadora',
            'frigorifico' => 'Frigorífico',
            'congelador' => 'Congelador',
            'computadora' => 'Computadora',
            'telefonia-fija' => 'Teléfono fijo',
            'telefonia-movil' => 'Teléfono móvil',
            'internet' => 'Internet'
        ]
    ];

    // Validación del formulario y manejo del archivo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $datos = "";
        $errores = [];

        foreach ($inputsCapituloA as $input) {
            $campo = limpiarEntrada($_POST[$input['id']] ?? '');
            if ($input['type'] === 'text') {
                if (!validarTexto($campo)) {
                    $errores[] = 'El campo ' . $input['label'] . ' debe contener solo letras y espacios, y no debe exceder los 50 caracteres.';
                }
            }
            $datos .= $input['label'] . " " . $campo . "\n";
        }

        // Validar el campo de selección del Capítulo B
        if (empty($_POST[$selectCapituloB['id']])) {
            $errores[] = 'El campo ' . $selectCapituloB['label'] . ' es obligatorio.';
        } else {
            $datos .= $selectCapituloB['label'] . " " . limpiarEntrada($_POST[$selectCapituloB['id']]) . "\n";
        }

        // Validar el archivo de imagen
        if (isset($_FILES['foto-vivienda'])) {
            $errorImagen = validarImagen($_FILES['foto-vivienda']);
            if ($errorImagen) {
                $errores[] = $errorImagen;
            } else {
                // Guardar la imagen
                $carpetaImagenes = 'imagenes';
                if (!is_dir($carpetaImagenes)) {
                    mkdir($carpetaImagenes, 0755, true);
                }
                $rutaImagen = $carpetaImagenes . '/' . basename($_FILES['foto-vivienda']['name']);
                move_uploaded_file($_FILES['foto-vivienda']['tmp_name'], $rutaImagen);
                $datos .= "Foto de la vivienda: " . $rutaImagen . "\n";
            }
        } else {
            $errores[] = 'La foto de la vivienda es obligatoria.';
        }

        // Validar el comentario adicional
        $comentario = limpiarEntrada($_POST['comentario-adicional'] ?? '');
        if (!validarComentario($comentario)) {
            $errores[] = 'El comentario adicional no debe exceder los 500 caracteres.';
        } else {
            $datos .= "Comentario adicional: " . $comentario . "\n";
        }

        // Validar los campos del Capítulo C
        foreach ($optionsCapituloC as $fieldId => $options) {
            $valor = limpiarEntrada($_POST[$fieldId] ?? '');
            if (!array_key_exists($valor, $options) && !empty($valor)) {
                $errores[] = 'El campo ' . ucfirst(str_replace('-', ' ', $fieldId)) . ' tiene un valor no válido.';
            }
            $label = array_key_exists($valor, $options) ? $options[$valor] : 'No especificado';
            $datos .= ucfirst(str_replace('-', ' ', $fieldId)) . ": " . $label . "\n";
        }

        if (empty($errores)) {
            // Especificar el archivo y la carpeta
            $carpeta = 'practica_3';
            if (!is_dir($carpeta)) {
                mkdir($carpeta, 0755, true);
            }
            $archivo = $carpeta . '/datos_' . date('Y-m-d_H-i-s') . '.txt';

            // Guardar los datos en el archivo
            file_put_contents($archivo, $datos);

            echo '<p>Datos guardados exitosamente en ' . $archivo . '</p>';
        } else {
            foreach ($errores as $error) {
                echo '<p>' . $error . '</p>';
            }
        }
    }
    ?>
    <div class="form-section">
        <h2>Capítulo A</h2>
        <?php
        foreach ($inputsCapituloA as $input) {
            echo '<div class="form-group">';
            echo '<label for="' . $input['id'] . '">' . $input['label'] . '</label>';
            echo '<input type="' . $input['type'] . '" id="' . $input['id'] . '" name="' . $input['id'] . '">';
            echo '</div>';
        }
        ?>
    </div>

    <div class="form-section">
        <h2>Capítulo B</h2>
        <div class="form-group">
            <label for="<?php echo $selectCapituloB['id']; ?>"><?php echo $selectCapituloB['label']; ?></label>
            <select id="<?php echo $selectCapituloB['id']; ?>" name="<?php echo $selectCapituloB['id']; ?>">
                <?php
                foreach ($selectCapituloB['options'] as $value => $label) {
                    echo '<option value="' . $value . '">' . $label . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="foto-vivienda">Foto de la vivienda:</label>
            <input type="file" id="foto-vivienda" name="foto-vivienda" accept="image/jpeg, image/png">
        </div>
        <div class="form-group">
            <label for="comentario-adicional">Comentario adicional:</label>
            <textarea id="comentario-adicional" name="comentario-adicional" maxlength="500"></textarea>
        </div>
    </div>

    <div class="form-section">
        <h2>Capítulo C</h2>
        <?php
        foreach ($optionsCapituloC as $fieldId => $options) {
            echo '<div class="form-group">';
            echo '<label>' . ucfirst(str_replace('-', ' ', $fieldId)) . ':</label>';
            echo '<div class="options-group">';
            foreach ($options as $value => $label) {
                echo '<label><input type="radio" name="' . $fieldId . '" value="' . $value . '"> ' . $label . '</label>';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <button type="submit">Enviar</button>
</form>

</body>
</html>