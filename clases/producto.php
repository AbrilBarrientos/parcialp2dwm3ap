<?php
class Producto {
    public $nombre;
    public $precio;
    public $imagen;
    public $categoria;
    public $descripcion;
    public $stock;      // true o false
    public $es_vegano;  // true o false

    public function mostrarProducto() {
        echo '
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="' . $this->imagen . '" class="card-img-top" alt="' . $this->nombre . '">
                <div class="card-body text-center">
                    <h3 class="card-title">' . $this->nombre . '</h3>
                    <p class="card-text">$' . $this->precio . '</p>
                    <p class="text-muted">' . $this->categoria . '</p>
                    <p class="desc">' . $this->descripcion . '</p>
                    <p><strong>' . ($this->stock ? 'En stock' : 'Sin stock') . '</strong></p>
                    <h4 class="text-' . ($this->es_vegano ? 'success' : 'danger') . '">
                        ' . ($this->es_vegano ? 'Apto vegano' : 'No apto vegano') . '
                    </h4>
                </div>
                <a href="?sec=detalle&producto=' . $this->nombre . '" class="btn">Ver detalle</a>
            </div>
        </div>';
    }
}
?>
