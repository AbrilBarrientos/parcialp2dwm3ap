<?php
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias por contactarte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>¡Gracias por tu mensaje!</h1>
        <p><strong>Nombre:</strong> <?= $nombre ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Mensaje:</strong> <?= $mensaje ?></p>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
