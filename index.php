<?php
$productos = json_decode(file_get_contents('json/productos.json'), true);
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DWM3AP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body >

<!-- <img src="./img/imoco-logo.png" alt="logo" style="width: 200px;"> -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container d-flex nav-container align-items-center">
            <a class="navbar-brand" href="#">
                <img src="./img/imoco-logo.png" alt="logo" style="width: 200px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="banner-header text-white d-flex align-items-center">
        <div class="container text-center py-5">
            <h1>Imoco Volley Conegliano</h1>
            <p>Campi8nesse D'ITALIA</p>
        </div>
    </header>


    <main class="productos">
        <div class="container-fluid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
            <?php
            foreach ($productos as $producto) {
                echo '
                <div class="card  m-4" style="width: 22rem;">
                    <img src="imagenes/' . $producto['imagen'] . '" class="card-img-top img-fluid" alt="' . $producto['nombre'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $producto['nombre'] . '</h5>
                        <p class="card-text">' . $producto['descripcion'] . '</p>
                        <p class="card-text"><strong>$' . $producto['precio'] . '</strong></p>
                        <a href="detalle.php?id=' . $producto['id'] . '" class="btn btn-primary">Ver más</a>
                    </div>
                </div>';
            }
            
            
            ?>
        </div>
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
