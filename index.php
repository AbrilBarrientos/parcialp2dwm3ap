<?php
// 
$vista = isset($_GET["sec"]) ? $_GET["sec"] : "inicio";

// array de secciones válidas 
$secciones_validas = ["inicio", "productos", "datos", "detalle", "formulario", "formularioProcesado"];
$vista = !in_array($vista, $secciones_validas) ? "404" : $vista;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PII-BARRIENTOS-PARCIAL 1</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
    <!-- estilos css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/logo-starbucks.png">
    <!-- Font-family -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg py-2">
        <div class="container">
            <a class="navbar-brand" href="?sec=inicio">
                <img class="" src="img/logo-starbucks.png" alt="logo de starbucks">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-5"><a class="nav-link" href="?sec=inicio"><i class="fa-solid fa-house"></i> Inicio</a></li>
                    <li class="nav-item mx-5"><a class="nav-link" href="?sec=productos"><i class="fa-solid fa-mug-saucer"></i> Productos</a></li>
                    <li class="nav-item mx-5"><a class="nav-link" href="?sec=datos"><i class="fa-solid fa-user"></i> Alumno</a></li>
                    <li class="nav-item mx-5"><a class="nav-link" href="?sec=formulario"><i class="bi bi-info-circle"></i> Formulario</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=" pb-4">

        <?php
        require_once("vistas/$vista.php");
        ?>
    </main>
    <footer class="text-white text-center">
        <p>&copy; PII BARRIENTOS PARCIAL 1</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
