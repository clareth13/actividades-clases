<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Censal</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <form class="form-container w3-card-4 fondo1" align="center" action="procesar_formulario.php" method="post" enctype="multipart/form-data">
        <h1 class="w3-animate-zoom">Formulario Censal</h1>
        <h2 class="w3-animate-zoom">Datos de la Vivienda</h2>
        <?php
        $tipos_vivienda = ['Casa', 'Apartamento', 'Otros'];
        $sexos = ['Masculino', 'Femenino', 'Otro'];
        $estados_civiles = ['Soltero', 'Casado', 'Divorciado', 'Viudo'];
        $niveles_educativos = ['Ninguno', 'Primaria', 'Secundaria', 'Superior'];
        ?>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['nombre'] ?? ''; ?></span>
        <br>

        <label for="vivienda">Tipo de Vivienda:</label>
        <select id="vivienda" name="vivienda">
            <option value="">Seleccione una opción</option>
            <?php foreach ($tipos_vivienda as $tipo): ?>
                <option value="<?php echo $tipo; ?>" <?php echo (isset($vivienda) && $vivienda === $tipo) ? 'selected' : ''; ?>><?php echo $tipo; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="error"><?php echo $errors['vivienda'] ?? ''; ?></span>
        <br>

        <label for="foto">Foto de la Vivienda:</label>
        <input type="file" id="foto" name="foto" accept="image/jpeg, image/png">
        <span class="error"><?php echo $errors['foto'] ?? ''; ?></span>
        <br>

        <label for="comentarios">Comentarios Adicionales:</label>
        <textarea id="comentarios" name="comentarios" maxlength="500"><?php echo htmlspecialchars($comentarios ?? '', ENT_QUOTES); ?></textarea>
        <span class="error"><?php echo $errors['comentarios'] ?? ''; ?></span>
        <br>

        <label for="material_paredes">¿Cuál es el material de construcción más utilizado en las paredes de esta vivienda?</label>
        <input type="text" id="material_paredes" name="material_paredes" value="<?php echo htmlspecialchars($material_paredes ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['material_paredes'] ?? ''; ?></span>
        <br>

        <label for="material_pisos_vivienda">¿Cuál es el material de construcción más utilizado en los pisos de esta vivienda?</label>
        <input type="text" id="material_pisos_vivienda" name="material_pisos_vivienda" value="<?php echo htmlspecialchars($material_pisos_vivienda ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['material_pisos_vivienda'] ?? ''; ?></span>
        <br>

        <label for="energia_electrica">¿De dónde proviene la energía eléctrica que usan en la vivienda?</label>
        <input type="text" id="energia_electrica" name="energia_electrica" value="<?php echo htmlspecialchars($energia_electrica ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['energia_electrica'] ?? ''; ?></span>
        <br>

        <label for="combustible_cocinar">¿Cuál es el principal combustible o energía que utilizan para cocinar?</label>
        <input type="text" id="combustible_cocinar" name="combustible_cocinar" value="<?php echo htmlspecialchars($combustible_cocinar ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['combustible_cocinar'] ?? ''; ?></span>
        <br>

        <label for="cuarto_cocinar_vivienda">¿Tienen un cuarto específico para cocinar?</label>
        <input type="text" id="cuarto_cocinar_vivienda" name="cuarto_cocinar_vivienda" value="<?php echo htmlspecialchars($cuarto_cocinar_vivienda ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['cuarto_cocinar_vivienda'] ?? ''; ?></span>
        <br>

        <label for="bano_letrina_vivienda">¿Tienen baño o letrina?</label>
        <input type="text" id="bano_letrina_vivienda" name="bano_letrina_vivienda" value="<?php echo htmlspecialchars($bano_letrina_vivienda ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['bano_letrina_vivienda'] ?? ''; ?></span>
        <br>

        <label for="gestion_basura">¿Cómo gestionan la basura que generan?</label>
        <input type="text" id="gestion_basura" name="gestion_basura" value="<?php echo htmlspecialchars($gestion_basura ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['gestion_basura'] ?? ''; ?></span>
        <br>

        <h2>Datos del Hogar</h2>

        <label for="num_personas_vivienda">¿Cuántas personas viven en esta vivienda?</label>
        <input type="number" id="num_personas_vivienda" name="num_personas_vivienda" value="<?php echo htmlspecialchars($num_personas_vivienda ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['num_personas_vivienda'] ?? ''; ?></span>
        <br>

        <label for="num_cuartos_vivienda">¿Cuántos cuartos o habitaciones ocupan, sin contar cocina y baño?</label>
        <input type="number" id="num_cuartos_vivienda" name="num_cuartos_vivienda" value="<?php echo htmlspecialchars($num_cuartos_vivienda ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['num_cuartos_vivienda'] ?? ''; ?></span>
        <br>

        <label for="num_vehiculos">¿Cuántos vehículos motorizados tienen en su hogar?</label>
        <input type="number" id="num_vehiculos" name="num_vehiculos" value="<?php echo htmlspecialchars($num_vehiculos ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['num_vehiculos'] ?? ''; ?></span>
        <br>

        <label for="internet_vivienda">¿Tienen acceso a internet en esta vivienda?</label>
        <input type="text" id="internet_vivienda" name="internet_vivienda" value="<?php echo htmlspecialchars($internet_vivienda ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['internet_vivienda'] ?? ''; ?></span>
        <br>

        <label for="telefono">¿Tienen teléfono fijo o celular?</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['telefono'] ?? ''; ?></span>
        <br>

        <label for="television">¿Tienen televisión por cable o satelital?</label>
        <input type="text" id="television" name="television" value="<?php echo htmlspecialchars($television ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['television'] ?? ''; ?></span>
        <br>

        <label for="radio">¿Tienen radio o equipo de sonido?</label>
        <input type="text" id="radio" name="radio" value="<?php echo htmlspecialchars($radio ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['radio'] ?? ''; ?></span>
        <br>

        <label for="computadora">¿Tienen computadora o laptop?</label>
        <input type="text" id="computadora" name="computadora" value="<?php echo htmlspecialchars($computadora ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['computadora'] ?? ''; ?></span>
        <br>

        <label for="servicios_salud">¿Tienen acceso a servicios de salud?</label>
        <input type="text" id="servicios_salud" name="servicios_salud" value="<?php echo htmlspecialchars($servicios_salud ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['servicios_salud'] ?? ''; ?></span>
        <br>

        <label for="nivel_educativo">Nivel Educativo:</label>
        <select id="nivel_educativo" name="nivel_educativo">
            <option value="">Seleccione una opción</option>
            <?php foreach ($niveles_educativos as $nivel): ?>
                <option value="<?php echo $nivel; ?>" <?php echo (isset($nivel_educativo) && $nivel_educativo === $nivel) ? 'selected' : ''; ?>><?php echo $nivel; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="error"><?php echo $errors['nivel_educativo'] ?? ''; ?></span>
        <br>

        <h2>Datos Personales</h2>

        <label for="nombre_persona">Nombre:</label>
        <input type="text" id="nombre_persona" name="nombre_persona" value="<?php echo htmlspecialchars($nombre_persona ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['nombre_persona'] ?? ''; ?></span>
        <br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?php echo htmlspecialchars($edad ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['edad'] ?? ''; ?></span>
        <br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="">Seleccione una opción</option>
            <?php foreach ($sexos as $sexo): ?>
                <option value="<?php echo $sexo; ?>" <?php echo (isset($sexo) && $sexo === $sexo) ? 'selected' : ''; ?>><?php echo $sexo; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="error"><?php echo $errors['sexo'] ?? ''; ?></span>
        <br>

        <label for="estado_civil">Estado Civil:</label>
        <select id="estado_civil" name="estado_civil">
            <option value="">Seleccione una opción</option>
            <?php foreach ($estados_civiles as $estado): ?>
                <option value="<?php echo $estado; ?>" <?php echo (isset($estado_civil) && $estado_civil === $estado) ? 'selected' : ''; ?>><?php echo $estado; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="error"><?php echo $errors['estado_civil'] ?? ''; ?></span>
        <br>

        <label for="ocupacion">Ocupación:</label>
        <input type="text" id="ocupacion" name="ocupacion" value="<?php echo htmlspecialchars($ocupacion ?? '', ENT_QUOTES); ?>">
        <span class="error"><?php echo $errors['ocupacion'] ?? ''; ?></span>
        <br>

        <label for="nivel_educativo_persona">Nivel Educativo:</label>
        <select id="nivel_educativo_persona" name="nivel_educativo_persona">
            <option value="">Seleccione una opción</option>
            <?php foreach ($niveles_educativos as $nivel): ?>
                <option value="<?php echo $nivel; ?>" <?php echo (isset($nivel_educativo_persona) && $nivel_educativo_persona === $nivel) ? 'selected' : ''; ?>><?php echo $nivel; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="error"><?php echo $errors['nivel_educativo_persona'] ?? ''; ?></span>
        <br>

        <input class="w3-btn w3-blue-grey" type="submit" value="Enviar">
    </form>
</body>
</html>
