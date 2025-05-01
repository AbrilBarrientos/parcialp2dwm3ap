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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- <img src="./img/imoco-logo.png" alt="logo" style="width: 200px;"> -->

    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex nav-container align-items-center">
            <a class="navbar-brand" href="#">
                <img src="./img/imoco-logo.png" alt="logo" style="width: 150px;">
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
    <header class="banner-header text-white d-flex align-items-center">
        <div class="container text-center py-5">
            <h1>Imoco Volley Conegliano</h1>
            <h2>Store Campi8nesse D'ITALIA</h2>
        </div>
    </header>


    <main class="py-5">

        <div class="container my-5">
            <div class="row align-items-center g-5">
                <!-- Texto a la izquierda -->
                <div class="col-md-6">
                    <h2>Historia</h2>
                    <p>Imoco Volley Conegliano nace en 2012 de una idea de las familias Maschio, Polo y Garbellotto que querían dar una realidad deportiva de alto nivel a la zona, eligiendo apostar por un deporte con valores cristalinos como el voleibol femenino. La apuesta ha sido ganada como lo demuestra el boom de espectadores que siempre ha caracterizado las temporadas disputadas en el Palaverde de Villorba por las "Panteras" amarillas y azules, capaces de atraer a más de 100 mil espectadores a los partidos de casa cada temporada, una cifra que siempre ha sido el récord absoluto del voleibol femenino italiano desde 2012.</p>
                    <p>Además de los récords de audiencia repetidamente batidos y los "sold out" en el pabellón deportivo, el territorio también ha respondido en términos de patrocinios, dado que ya son más de 300 los socios comerciales que vinculan su marca a Imoco Volley, con una nutrida representación de empresas vinculadas al mundo del vino y del Prosecco en particular, producto estrella de Conegliano y de toda la Provincia.</p>
                </div>

                <!-- Imagen a la derecha -->
                <div class="col-md-6 text-center">
                    <img src="./img/imoco-2012.jpg" alt="Nuestra historia" class="img-fluid rounded shadow">
                </div>
            </div>
        </div> 

        <div class="d-flex justify-content-center align-items-center my-4">
            <a href="" class="btn btn-primary btn-lg px-4 py-2">
                <i class="fa-solid fa-store"></i> Ver productos
            </a>
        </div>



        <div class="container-fluid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
            <?php
            foreach ($productos as $producto) {
                echo '
                <div class="card m-4" style="width: 22rem;">
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
    
    <footer class="bg-dark align-items-center text-white text-center py-1 fixed-bottom">
        <p>&copy; Abril Barrientos - DWM3AP</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
