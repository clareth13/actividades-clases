<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (strlen($usuario) >= 10) {
    echo "Bienvenido " . $usuario;
} else {
    echo "El usuario debe contener al menos 10 caracteres ";
}


if (strlen($password) >8) {
    echo "La contraseña debe tener al menos 8 caracteres ";
} else {
    $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $cont = 0;
    foreach ($numeros as $valor) {
        if (strpos($password, (string)$valor) !== false) {
            $cont++;
        }
    }
    if ($cont > 0) {
        echo "Contraseña correcta ";
    } else {
        echo "La contraseña debe contener al menos un número ";
    }
}
?>