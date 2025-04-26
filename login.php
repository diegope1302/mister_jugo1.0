<?php include('Configuración/header.php'); ?>

<h1>Iniciar Sesión / Registrarse 🔒</h1>

<section class="formulario">
  <form action="procesar_login.php" method="POST">
    <input type="email" name="email" placeholder="Correo electrónico 📧" required>
    <input type="password" name="password" placeholder="Contraseña 🔒" required>
    <button type="submit">Iniciar Sesión</button>
  </form>

  <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
  <p><a href="recuperar_contrasena.php">¿Olvidaste tu contraseña?</a></p>
</section>

<?php include('Configuración/footer.php'); ?>