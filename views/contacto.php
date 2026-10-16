<h2>Página de Contacto</h2>

<!-- El controlador inyecta esta variable aquí si existe un mensaje -->
<?php echo $mensaje_db; ?>

<form action="" method="POST" class="formulario">
    <label for="nombre">Tu Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Tu Correo:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="comentario">Comentario:</label>
    <textarea id="comentario" name="comentario" rows="5" required></textarea>

    <button type="submit">Enviar Mensaje</button>
</form>