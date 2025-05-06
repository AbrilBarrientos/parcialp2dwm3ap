<div class="container my-5">
    <h2>Compartir tu experienca nos hace mejores.</h2>

    <form class="my-5" action="?sec=formularioProcesado" method="POST">
        <label for="nombre">Tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Tu correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="bebida">Bebida favorita:</label>
        <input type="text" id="bebida" name="bebida" required>

        <label for="comentario">¿Por qué es tu bebida favorita?</label>
        <textarea id="comentario" name="comentario" rows="4"></textarea>

        <button type="submit" class="btn my-3">Enviar</button>
    </form>
</div>

