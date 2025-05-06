<?php
include_once("clases/Producto.php");

// obtener contenido del archivo proudctos.json
$productos_json = file_get_contents("productos.json");
$productos_array = json_decode($productos_json, true);

// array vacio para almacenar elementos
$productos = [];

//  para cada
foreach ($productos_array as $prod) {
    $producto = new Producto(); // nuevo Producto clase desde el archivo producto.php
    $producto->nombre = $prod["nombre"]; // asignar propiedades
    $producto->precio = $prod["precio"];
    $producto->imagen = $prod["imagen"];
    $producto->descripcion = $prod["descripcion"];
    $producto->categoria = $prod["categoria"];
    $producto->stock = $prod["stock"];
    $producto->es_vegano = $prod["es_vegano"];
    
    $productos[] = $producto; // agrega el objeto a la lista vacia $productos
}
?>

<div class="container py-5">
    <h2 class="mb-3">Productos</h2>

    <div class="row">
        <?php
        foreach ($productos as $producto) {
            $producto->mostrarProducto();
        }
        ?>
    </div>
</div>
