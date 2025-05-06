
<?php
$nombre = $_POST['nombre'] ?? '';
$bebida = $_POST['bebida'] ?? '';
$comentario = $_POST['comentario'] ?? '';
$email = $_POST['email'] ?? '';
?>

<section class="container mt-5">
    <h1 class="text-success">¡Gracias, <?= $nombre ?>!</h1>
    <p><strong>Correo electrónico:</strong> <?= $email ?></p>
    <p><strong>Tu bebida favorita:</strong> <?= $bebida ?></p>
    <p><strong>¿Por qué te gusta?:</strong> <?= $comentario ?></p>
    <a href="?sec=inicio" class="btn btn-outline-success mt-3">Volver al inicio</a>
</section>


