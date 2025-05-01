<?php
$productos = [];
$data = json_decode(file_get_contents("json/productos.json"), true);

foreach ($data as $item) {
    $productos[] = new Producto(
        $item["id"],
        $item["nombre"],
        $item["descripcion"],
        $item["precio"]
    );
}
?>


