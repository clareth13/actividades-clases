<?php
$vacios = [];

if (empty($_POST['nombre'])) {
    $vacios[] = "Nombre está vacío";
} elseif (strlen($_POST['nombre']) <4 || strlen($_POST['nombre']) >20) {
    $vacios[] = "Nombre debe ser mayor  a 3 y menor a 20 caracteres";
}
     
if (empty($_POST['apellido'])) {
    $vacios[] = "Apellido está vacío";
} elseif (strlen($_POST['apellido']) <4 || strlen($_POST['apellido']) > 20) {
    $vacios[] = "Apellido debe ser mayor  a 3 y menor a 20 caracteres";
}

if (empty($_POST['correo'])) {
    $vacios[] = "Correo está vacío";
}

if (empty($_POST['comentarios'])) {
    $vacios[] = "Comentario está vacío";
} elseif (strlen($_POST['comentarios']) <6 || strlen($_POST['comentarios']) >50) {
    $vacios[] = "Comentario debe ser mayor  a 5 y menor a 50 caracteres";
} elseif (!preg_match("/^[a-zA-Z0-9\s.,!?]*$/", $_POST['comentarios'])) {
    $vacios[] = "El comentario tiene caracteres no válidos";
}

if (empty($_POST['idioma'])) {
    $vacios[] = "Idioma está vacío";
}

if (empty($_POST['musica'])) {
    $vacios[] = "Música está vacía";
}

if (empty($_POST['pasatiempo'])) {
    $vacios[] = "Debe seleccionar al menos un pasatiempo";
}

if (!empty($vacios)) {
    echo "<ul style='color: red;'>";
    foreach ($vacios as $vacio) {
        echo "$vacio<br>";
    }
    echo "</ul>";
} else {
    echo "<h2>Formulario correctamente llenado</h2>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST['nombre']) . "</p>";
    echo "<p><strong>Apellido:</strong> " . htmlspecialchars($_POST['apellido']) . "</p>";
    echo "<p><strong>Correo:</strong> " . htmlspecialchars($_POST['correo']) . "</p>";
    echo "<p><strong>Comentario:</strong> " . nl2br(htmlspecialchars($_POST['comentarios'])) . "</p>";
    echo "<p><strong>Idioma:</strong> " . htmlspecialchars($_POST['idioma']) . "</p>";
    echo "<p><strong>Música:</strong> " . htmlspecialchars($_POST['musica']) . "</p>";
    echo "<p><strong>Pasatiempos:</strong> " . implode(', ', $_POST['pasatiempo']) . "</p>";
}
?>