<?php
$equipo = json_decode(file_get_contents('./../json/equipo.json'), true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jugadores del Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex nav-container align-items-center">
            <a class="navbar-brand" href="#">
                <img src="./../img/imoco-logo.png" alt="logo" style="width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-house"></i> Home</a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-store"></i> Tienda</a>
                    <a class="nav-link" href="vistas/equipo.php"><i class="fa-solid fa-paw"></i> Equipo</a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-shield"></i> Club</a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> Alumno</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center mb-4">Equipo</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

        <?php foreach ($equipo as $jugadora) { ?>
            <div class="col">
            <div class="card h-100 text-center">
                <img src="img/<?= $jugadora["imagen"] ?>" class="card-img-top" alt="<?= $jugadora["nombre"] ?>">
                <div class="card-body">
                <h5 class="card-title"><?= $jugadora["nombre"] ?></h5>
                <p class="card-text"><strong>N°:</strong> <?= $jugadora["numero"] ?></p>
                <p class="card-text"><strong>Posición:</strong> <?= $jugadora["posicion"] ?></p>
                </div>
            </div>
            </div>
        <?php } ?>

        </div>
    </div>
</body>
</html>
