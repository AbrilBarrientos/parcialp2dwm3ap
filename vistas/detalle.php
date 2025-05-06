<?php
// Cargar productos
$productos_json = file_get_contents("productos.json");
$productos_array = json_decode($productos_json, true);

// Tomar el nombre del producto desde GET
$nombre_producto = isset($_GET["producto"]) ? $_GET["producto"] : "";

// Buscar ese producto en el array
$producto_encontrado = null;
foreach ($productos_array as $prod) {
    if ($prod["nombre"] === $nombre_producto) {
        $producto_encontrado = $prod;
        break;
    }
}
?>

<div class="container py-5">
    <?php
        if ($producto_encontrado) {
            echo '
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="' . $producto_encontrado['imagen'] . '" alt="' . $producto_encontrado['nombre'] . '" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h2>' . $producto_encontrado['nombre'] . '</h2>
                    <p id="producto-precio"> $' . $producto_encontrado['precio'] . '</p>
                    <p><strong>Descripción:</strong> ' . $producto_encontrado['descripcion'] . '</p>
                    <p><strong>Categoría:</strong> ' . $producto_encontrado['categoria'] . '</p>
                    <p class="text-' . ($producto_encontrado['es_vegano'] ? 'success' : 'danger') . '">
                        <strong>' . ($producto_encontrado['es_vegano'] ? 'Apto vegano' : 'No apto vegano') . '</strong>
                    </p>
                    <a href="?sec=productos" class="btn btn-secondary mt-3">Volver a productos</a>
                </div>
            </div>';
        } else {
            echo '
            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <div class="alert alert-danger p-5" role="alert">
                        <h1 class="display-4 fw-bold">Producto no encontrado</h1>
                        <p class="lead">El producto que buscás no existe.</p>
                        <a href="productos.php" class="btn mt-3">Volver a productos</a>
                    </div>
                </div>
            </div>';
        }
    ?>
</div>


