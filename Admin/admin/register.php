<?php include('Configuración/header.php'); ?>

<section class="registro">
    <h1>¡Crea tu cuenta en Mister Jugo! 🍹</h1>

    <!-- Formulario de Registro -->
    <form action="procesar_registro.php" method="POST">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <label for="confirmar_contraseña">Confirmar contraseña:</label>
        <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" required>

        <button type="submit">Registrarse ✍️</button>
    </form>
</section>

<?php include('Configuración/footer.php'); ?>
