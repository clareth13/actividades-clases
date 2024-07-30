<?php
if (isset($_GET['nombre']) && isset($_GET['foto']) && isset($_GET['expediente'])) {
    $nombre = urldecode($_GET['nombre']);
    $foto = urldecode($_GET['foto']);
    $expediente = urldecode($_GET['expediente']);
    echo "<p>Datos del Usuario</p>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Foto:</strong> <img src='$foto' alt='Foto' width='100'></p>";
    echo "<p><strong>Expediente:</strong> <a href='$expediente'>Expediente</a></p>";
} else {
    echo "<p>Hubo un error al procesar los datos.</p>";
}
?>