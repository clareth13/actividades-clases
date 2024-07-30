<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documento de Proyecto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Subir Documento de Proyecto</h2>
    <form action="pract3Ejer1.php" method="post" enctype="multipart/form-data">
        <label for="nombre_proyecto">Nombre del Proyecto:</label>
        <input type="text" id="nombre_proyecto" name="nombre_proyecto" required>

        <label for="descripcion_proyecto">Descripción del Proyecto (mínimo 50 caracteres):</label>
        <textarea id="descripcion_proyecto" name="descripcion_proyecto" rows="4" cols="50" required></textarea>

        <label for="documento_proyecto">Documento del Proyecto (PDF o DOCX):</label>
        <input type="file" id="documento_proyecto" name="documento_proyecto" accept=".pdf,.docx" required>

        <input type="submit" value="Subir Documento">
    </form>
</body>
</html>
