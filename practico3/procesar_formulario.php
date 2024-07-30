<?php
$errors = [];
// Inicializar variables
$nombre = $vivienda = $comentarios = $material_paredes = $material_pisos_vivienda = $energia_electrica = $combustible_cocinar = $cuarto_cocinar_vivienda = $bano_letrina_vivienda = $gestion_basura = $num_personas_vivienda = $num_cuartos_vivienda = $num_vehiculos = $internet_vivienda = $telefono = $television = $radio = $computadora = $servicios_salud = $servicios_educativos = $servicios_seguridad = $agua_potable = $alcantarillado = $electricidad = $gas = $transporte_publico = $nombre_persona = $edad_persona = $sexo_persona = $estado_civil_persona = $nivel_educativo_persona = $ocupacion_persona = $servicios_salud_persona = $servicios_educativos_persona = $servicios_seguridad_persona = $internet_persona = $telefono_persona = $television_persona = $radio_persona = $computadora_persona = $edad_cumplida_persona = '';

// Ruta para guardar el archivo
$uploadDir = 'C:\xampp\htdocs\php\practica_3\\';

// Verifica si la carpeta existe, si no, la crea
if (!is_dir($uploadDir)) {
    if (!mkdir($uploadDir, 0777, true)) {
        die('No se pudo crear el directorio de destino.');
    }
}

// Ruta completa del archivo a guardar
$uploadFile = $uploadDir . basename($_FILES['foto']['name']);

// Validar campos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación de campos de vivienda
    if (empty($_POST["nombre"])) {
        $errors['nombre'] = "El nombre es obligatorio.";
    } else {
        $nombre = htmlspecialchars($_POST["nombre"]);
    }

    if (empty($_POST["vivienda"])) {
        $errors['vivienda'] = "El tipo de vivienda es obligatorio.";
    } else {
        $vivienda = htmlspecialchars($_POST["vivienda"]);
    }

    if (empty($_POST["comentarios"])) {
        $comentarios = '';
    } else {
        $comentarios = htmlspecialchars($_POST["comentarios"]);
    }

    if (empty($_POST["material_paredes"])) {
        $errors['material_paredes'] = "El material de las paredes es obligatorio.";
    } else {
        $material_paredes = htmlspecialchars($_POST["material_paredes"]);
    }

    if (empty($_POST["material_pisos_vivienda"])) {
        $errors['material_pisos_vivienda'] = "El material de los pisos es obligatorio.";
    } else {
        $material_pisos_vivienda = htmlspecialchars($_POST["material_pisos_vivienda"]);
    }

    if (empty($_POST["energia_electrica"])) {
        $errors['energia_electrica'] = "La fuente de energía eléctrica es obligatoria.";
    } else {
        $energia_electrica = htmlspecialchars($_POST["energia_electrica"]);
    }

    if (empty($_POST["combustible_cocinar"])) {
        $errors['combustible_cocinar'] = "El combustible para cocinar es obligatorio.";
    } else {
        $combustible_cocinar = htmlspecialchars($_POST["combustible_cocinar"]);
    }

    if (empty($_POST["cuarto_cocinar_vivienda"])) {
        $errors['cuarto_cocinar_vivienda'] = "El cuarto específico para cocinar es obligatorio.";
    } else {
        $cuarto_cocinar_vivienda = htmlspecialchars($_POST["cuarto_cocinar_vivienda"]);
    }

    if (empty($_POST["bano_letrina_vivienda"])) {
        $errors['bano_letrina_vivienda'] = "El baño o letrina es obligatorio.";
    } else {
        $bano_letrina_vivienda = htmlspecialchars($_POST["bano_letrina_vivienda"]);
    }

    if (empty($_POST["gestion_basura"])) {
        $errors['gestion_basura'] = "La gestión de la basura es obligatoria.";
    } else {
        $gestion_basura = htmlspecialchars($_POST["gestion_basura"]);
    }

    if (empty($_POST["num_personas_vivienda"]) || !is_numeric($_POST["num_personas_vivienda"]) || $_POST["num_personas_vivienda"] < 0) {
        $errors['num_personas_vivienda'] = "El número de personas debe ser un número positivo.";
    } else {
        $num_personas_vivienda = htmlspecialchars($_POST["num_personas_vivienda"]);
    }

    if (empty($_POST["num_cuartos_vivienda"]) || !is_numeric($_POST["num_cuartos_vivienda"]) || $_POST["num_cuartos_vivienda"] < 0) {
        $errors['num_cuartos_vivienda'] = "El número de cuartos debe ser un número positivo.";
    } else {
        $num_cuartos_vivienda = htmlspecialchars($_POST["num_cuartos_vivienda"]);
    }

    if (empty($_POST["num_vehiculos"]) || !is_numeric($_POST["num_vehiculos"]) || $_POST["num_vehiculos"] < 0) {
        $errors['num_vehiculos'] = "El número de vehículos debe ser un número positivo.";
    } else {
        $num_vehiculos = htmlspecialchars($_POST["num_vehiculos"]);
    }

    if (empty($_POST["internet_vivienda"])) {
        $errors['internet_vivienda'] = "El acceso a internet es obligatorio.";
    } else {
        $internet_vivienda = htmlspecialchars($_POST["internet_vivienda"]);
    }

    if (empty($_POST["telefono"])) {
        $errors['telefono'] = "El teléfono es obligatorio.";
    } else {
        $telefono = htmlspecialchars($_POST["telefono"]);
    }

    if (empty($_POST["television"])) {
        $errors['television'] = "La televisión es obligatoria.";
    } else {
        $television = htmlspecialchars($_POST["television"]);
    }

    if (empty($_POST["radio"])) {
        $errors['radio'] = "La radio es obligatoria.";
    } else {
        $radio = htmlspecialchars($_POST["radio"]);
    }

    if (empty($_POST["computadora"])) {
        $errors['computadora'] = "La computadora es obligatoria.";
    } else {
        $computadora = htmlspecialchars($_POST["computadora"]);
    }

    if (empty($_POST["servicios_salud"])) {
        $errors['servicios_salud'] = "El acceso a servicios de salud es obligatorio.";
    } else {
        $servicios_salud = htmlspecialchars($_POST["servicios_salud"]);
    }

    if (empty($_POST["servicios_educativos"])) {
        $errors['servicios_educativos'] = "El acceso a servicios educativos es obligatorio.";
    } else {
        $servicios_educativos = htmlspecialchars($_POST["servicios_educativos"]);
    }

    if (empty($_POST["servicios_seguridad"])) {
        $errors['servicios_seguridad'] = "El acceso a servicios de seguridad es obligatorio.";
    } else {
        $servicios_seguridad = htmlspecialchars($_POST["servicios_seguridad"]);
    }

    if (empty($_POST["agua_potable"])) {
        $errors['agua_potable'] = "El acceso a agua potable es obligatorio.";
    } else {
        $agua_potable = htmlspecialchars($_POST["agua_potable"]);
    }

    if (empty($_POST["alcantarillado"])) {
        $errors['alcantarillado'] = "El acceso a alcantarillado es obligatorio.";
    } else {
        $alcantarillado = htmlspecialchars($_POST["alcantarillado"]);
    }

    if (empty($_POST["electricidad"])) {
        $errors['electricidad'] = "El acceso a electricidad es obligatorio.";
    } else {
        $electricidad = htmlspecialchars($_POST["electricidad"]);
    }

    if (empty($_POST["gas"])) {
        $errors['gas'] = "El acceso a gas es obligatorio.";
    } else {
        $gas = htmlspecialchars($_POST["gas"]);
    }

    if (empty($_POST["transporte_publico"])) {
        $errors['transporte_publico'] = "El acceso a transporte público es obligatorio.";
    } else {
        $transporte_publico = htmlspecialchars($_POST["transporte_publico"]);
    }

    // Validar datos de la persona
    if (empty($_POST["nombre_persona"])) {
        $errors['nombre_persona'] = "El nombre de la persona es obligatorio.";
    } else {
        $nombre_persona = htmlspecialchars($_POST["nombre_persona"]);
    }

    if (empty($_POST["edad_persona"]) || !is_numeric($_POST["edad_persona"]) || $_POST["edad_persona"] < 0) {
        $errors['edad_persona'] = "La edad debe ser un número positivo.";
    } else {
        $edad_persona = htmlspecialchars($_POST["edad_persona"]);
    }

    if (empty($_POST["sexo_persona"])) {
        $errors['sexo_persona'] = "El sexo de la persona es obligatorio.";
    } else {
        $sexo_persona = htmlspecialchars($_POST["sexo_persona"]);
    }

    if (empty($_POST["estado_civil_persona"])) {
        $errors['estado_civil_persona'] = "El estado civil es obligatorio.";
    } else {
        $estado_civil_persona = htmlspecialchars($_POST["estado_civil_persona"]);
    }

    if (empty($_POST["nivel_educativo_persona"])) {
        $errors['nivel_educativo_persona'] = "El nivel educativo es obligatorio.";
    } else {
        $nivel_educativo_persona = htmlspecialchars($_POST["nivel_educativo_persona"]);
    }

    if (empty($_POST["ocupacion_persona"])) {
        $errors['ocupacion_persona'] = "La ocupación es obligatoria.";
    } else {
        $ocupacion_persona = htmlspecialchars($_POST["ocupacion_persona"]);
    }

    if (empty($_POST["servicios_salud_persona"])) {
        $errors['servicios_salud_persona'] = "El acceso a servicios de salud es obligatorio.";
    } else {
        $servicios_salud_persona = htmlspecialchars($_POST["servicios_salud_persona"]);
    }

    if (empty($_POST["servicios_educativos_persona"])) {
        $errors['servicios_educativos_persona'] = "El acceso a servicios educativos es obligatorio.";
    } else {
        $servicios_educativos_persona = htmlspecialchars($_POST["servicios_educativos_persona"]);
    }

    if (empty($_POST["servicios_seguridad_persona"])) {
        $errors['servicios_seguridad_persona'] = "El acceso a servicios de seguridad es obligatorio.";
    } else {
        $servicios_seguridad_persona = htmlspecialchars($_POST["servicios_seguridad_persona"]);
    }

    if (empty($_POST["internet_persona"])) {
        $errors['internet_persona'] = "El acceso a internet es obligatorio.";
    } else {
        $internet_persona = htmlspecialchars($_POST["internet_persona"]);
    }

    if (empty($_POST["telefono_persona"])) {
        $errors['telefono_persona'] = "El teléfono es obligatorio.";
    } else {
        $telefono_persona = htmlspecialchars($_POST["telefono_persona"]);
    }

    if (empty($_POST["television_persona"])) {
        $errors['television_persona'] = "La televisión es obligatoria.";
    } else {
        $television_persona = htmlspecialchars($_POST["television_persona"]);
    }

    if (empty($_POST["radio_persona"])) {
        $errors['radio_persona'] = "La radio es obligatoria.";
    } else {
        $radio_persona = htmlspecialchars($_POST["radio_persona"]);
    }

    if (empty($_POST["computadora_persona"])) {
        $errors['computadora_persona'] = "La computadora es obligatoria.";
    } else {
        $computadora_persona = htmlspecialchars($_POST["computadora_persona"]);
    }

    if (empty($_POST["edad_cumplida_persona"]) || !is_numeric($_POST["edad_cumplida_persona"]) || $_POST["edad_cumplida_persona"] < 0) {
        $errors['edad_cumplida_persona'] = "La edad cumplida debe ser un número positivo.";
    } else {
        $edad_cumplida_persona = htmlspecialchars($_POST["edad_cumplida_persona"]);
    }

    // Validar y mover el archivo
    if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['foto']['tmp_name'];
        $fileName = $_FILES['foto']['name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];

        $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024; // 5 MB

        if (!in_array($fileType, $allowedFileTypes)) {
            $errors['foto'] = "Tipo de archivo no permitido. Solo se permiten archivos JPEG, PNG y GIF.";
        }

        if ($fileSize > $maxFileSize) {
            $errors['foto'] = "El tamaño del archivo excede el límite de 5 MB.";
        }

        if (empty($errors)) {
            if (!move_uploaded_file($fileTmpPath, $uploadFile)) {
                $errors['foto'] = "Hubo un error al mover el archivo subido.";
            }
        }
    } elseif ($_FILES['foto']['error'] != UPLOAD_ERR_NO_FILE) {
        $errors['foto'] = "Error al subir el archivo: " . $_FILES['foto']['error'];
    }

    // Si no hay errores, guardar datos en un archivo .txt
    if (empty($errors)) {
        // Ruta completa del archivo .txt
        $txtFile = $uploadDir . "datos_formulario.txt";

        $data = "Nombre: $nombre\n";
        $data .= "Tipo de Vivienda: $vivienda\n";
        $data .= "Comentarios: $comentarios\n";
        $data .= "Material de Paredes: $material_paredes\n";
        $data .= "Material de Pisos: $material_pisos_vivienda\n";
        $data .= "Energía Eléctrica: $energia_electrica\n";
        $data .= "Combustible para Cocinar: $combustible_cocinar\n";
        $data .= "Cuarto para Cocinar: $cuarto_cocinar_vivienda\n";
        $data .= "Baño/Letrina: $bano_letrina_vivienda\n";
        $data .= "Gestión de Basura: $gestion_basura\n";
        $data .= "Número de Personas: $num_personas_vivienda\n";
        $data .= "Número de Cuartos: $num_cuartos_vivienda\n";
        $data .= "Número de Vehículos: $num_vehiculos\n";
        $data .= "Internet: $internet_vivienda\n";
        $data .= "Teléfono: $telefono\n";
        $data .= "Televisión: $television\n";
        $data .= "Radio: $radio\n";
        $data .= "Computadora: $computadora\n";
        $data .= "Servicios de Salud: $servicios_salud\n";
        $data .= "Servicios Educativos: $servicios_educativos\n";
        $data .= "Servicios de Seguridad: $servicios_seguridad\n";
        $data .= "Agua Potable: $agua_potable\n";
        $data .= "Alcantarillado: $alcantarillado\n";
        $data .= "Electricidad: $electricidad\n";
        $data .= "Gas: $gas\n";
        $data .= "Transporte Público: $transporte_publico\n";
        $data .= "Nombre Persona: $nombre_persona\n";
        $data .= "Edad Persona: $edad_persona\n";
        $data .= "Sexo Persona: $sexo_persona\n";
        $data .= "Estado Civil Persona: $estado_civil_persona\n";
        $data .= "Nivel Educativo Persona: $nivel_educativo_persona\n";
        $data .= "Ocupación Persona: $ocupacion_persona\n";
        $data .= "Servicios Salud Persona: $servicios_salud_persona\n";
        $data .= "Servicios Educativos Persona: $servicios_educativos_persona\n";
        $data .= "Servicios Seguridad Persona: $servicios_seguridad_persona\n";
        $data .= "Internet Persona: $internet_persona\n";
        $data .= "Teléfono Persona: $telefono_persona\n";
        $data .= "Televisión Persona: $television_persona\n";
        $data .= "Radio Persona: $radio_persona\n";
        $data .= "Computadora Persona: $computadora_persona\n";
        $data .= "Edad Cumplida Persona: $edad_cumplida_persona\n";

        $file = fopen($txtFile, "w");
        fwrite($file, $data);
        fclose($file);

        echo "Formulario enviado con éxito. Datos guardados en $txtFile";
    } else {
        // Mostrar errores
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
