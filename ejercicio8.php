<?php

$vacios = [];
$errores = [];

if (isset($_POST['bandera'])) {
    if (empty($_POST['nombre'])) {
        $errores['nombre'] = "Nombre está vacío";
    } elseif (strlen($_POST['nombre']) < 4 || strlen($_POST['nombre']) > 20) {
        $errores['nombre'] = "Nombre debe ser mayor a 3 y menor a 20 caracteres";
    }

    if (empty($_POST['apellido'])) {
        $errores['apellido'] = "Apellido está vacío";
    } elseif (strlen($_POST['apellido']) < 4 || strlen($_POST['apellido']) > 20) {
        $errores['apellido'] = "Apellido debe ser mayor a 3 y menor a 20 caracteres";
    }

    if (empty($_POST['correo'])) {
        $errores['correo'] = "Correo está vacío";
    }

    if (empty($_POST['comentarios'])) {
        $errores['comentarios'] = "Comentario está vacío";
    } elseif (strlen($_POST['comentarios']) < 6 || strlen($_POST['comentarios']) > 50) {
        $errores['comentarios'] = "Comentario debe ser mayor a 5 y menor a 50 caracteres";
    } elseif (!preg_match("/^[a-zA-Z0-9\s.,!?]*$/", $_POST['comentarios'])) {
        $errores['comentarios'] = "El comentario tiene caracteres no válidos";
    }

    if (empty($_POST['idioma'])) {
        $errores['idioma'] = "Idioma está vacío";
    }

    if (empty($_POST['musica'])) {
        $errores['musica'] = "Música está vacía";
    }

    if (empty($_POST['pasatiempo'])) {
        $errores['pasatiempo'] = "Debe seleccionar al menos un pasatiempo";
    }

    if (empty($errores)) {
        echo "<h2>Formulario correctamente llenado</h2>";
        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST['nombre']) . "</p>";
        echo "<p><strong>Apellido:</strong> " . htmlspecialchars($_POST['apellido']) . "</p>";
        echo "<p><strong>Correo:</strong> " . htmlspecialchars($_POST['correo']) . "</p>";
        echo "<p><strong>Comentario:</strong> " . nl2br(htmlspecialchars($_POST['comentarios'])) . "</p>";
        echo "<p><strong>Idioma:</strong> " . htmlspecialchars($_POST['idioma']) . "</p>";
        echo "<p><strong>Música:</strong> " . htmlspecialchars($_POST['musica']) . "</p>";
        echo "<p><strong>Pasatiempos:</strong> " . implode(', ', $_POST['pasatiempo']) . "</p>";
    }
}

$idiomas = [
    "es" => "Español",
    "in" => "Inglés",
    "ay" => "Aymara",
    "fr" => "Frances",
];

$musicas = [
    "rock" => "Rock",
    "clasico" => "Clásico",
    "tradicional" => "Tradicional"
];

$pasatiempos = [
    "jugar" => "Jugar",
    "cantar" => "Cantar",
    "estudiar" => "Estudiar"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
        .error-input {
            border: 1px solid red;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" class="<?php if (isset($errores['nombre'])) echo 'error-input'; ?>" value="<?php if (isset($_POST['nombre'])) echo htmlspecialchars($_POST['nombre']); ?>">
    <?php if (isset($errores['nombre'])) echo "<p class='error'>{$errores['nombre']}</p>"; ?>
    <br>

    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" class="<?php if (isset($errores['apellido'])) echo 'error-input'; ?>" value="<?php if (isset($_POST['apellido'])) echo htmlspecialchars($_POST['apellido']); ?>">
    <?php if (isset($errores['apellido'])) echo "<p class='error'>{$errores['apellido']}</p>"; ?>
    <br>

    <label for="correo">Correo: </label>
    <input type="email" name="correo" class="<?php if (isset($errores['correo'])) echo 'error-input'; ?>" value="<?php if (isset($_POST['correo'])) echo htmlspecialchars($_POST['correo']); ?>">
    <?php if (isset($errores['correo'])) echo "<p class='error'>{$errores['correo']}</p>"; ?>
    <br>

    <label for="comentario">Comentario: </label>
    <textarea name="comentarios" class="<?php if (isset($errores['comentarios'])) echo 'error-input'; ?>"><?php if (isset($_POST['comentarios'])) echo htmlspecialchars($_POST['comentarios']); ?></textarea>
    <?php if (isset($errores['comentarios'])) echo "<p class='error'>{$errores['comentarios']}</p>"; ?>
    <br>

    <label for="idioma">Idioma: </label>
    <select name="idioma" class="<?php if (isset($errores['idioma'])) echo 'error-input'; ?>">
        <option value="">Seleccione el idioma</option>
        <?php foreach ($idiomas as $codigo => $nombre): ?>
            <option value="<?php echo $codigo; ?>" <?php if (isset($_POST['idioma']) && $_POST['idioma'] == $codigo) echo 'selected'; ?>><?php echo $nombre; ?></option>
        <?php endforeach; ?>
    </select>
    <?php if (isset($errores['idioma'])) echo "<p class='error'>{$errores['idioma']}</p>"; ?>
    <br>

    <label for="musica">Música: </label>
    <?php foreach ($musicas as $codigo => $nombre): ?>
        <label for="<?php echo $codigo; ?>"><?php echo $nombre; ?></label>
        <input type="radio" name="musica" value="<?php echo $codigo; ?>" <?php if (isset($_POST['musica']) && $_POST['musica'] == $codigo) echo 'checked'; ?>>
    <?php endforeach; ?>
    <?php if (isset($errores['musica'])) echo "<p class='error'>{$errores['musica']}</p>"; ?>
    <br>

    <label for="pasatiempo">Pasatiempo: </label>
    <?php foreach ($pasatiempos as $codigo => $nombre): ?>
        <input type="checkbox" name="pasatiempo[]" value="<?php echo $codigo; ?>" <?php if (isset($_POST['pasatiempo']) && in_array($codigo, $_POST['pasatiempo'])) echo 'checked'; ?>> <?php echo $nombre; ?>
    <?php endforeach; ?>
    <?php if (isset($errores['pasatiempo'])) echo "<p class='error'>{$errores['pasatiempo']}</p>"; ?>
    <br>
    <input type="hidden" name="bandera">
    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>
