<?php
session_start();
?>

<header>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mister Jugo 🍹</title>
    <!-- Vinculamos la hoja de estilo -->
    <link rel="stylesheet" href="Recursos/css/styles.css">
    <a href="index.php">Mister Jugo 🍹</a>
    <nav>
        <a href="index.php">Home 🏠</a>
        <a href="carta.php">Menú 📋</a>
        <a href="carrito.php">Carrito 🛒</a>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <a href="perfil.php">Mi Perfil 📝</a>
            <?php if (esAdmin($_SESSION['usuario_id'])): ?>
                <a href="admin/dashboard.php">Panel Admin 👑</a>
            <?php endif; ?>
            <a href="logout.php">Cerrar sesión 🚪</a>
        <?php else: ?>
            <a href="login.php">Iniciar sesión 🔒</a>
            <a href="register.php">Registrarse ✍️</a>
        <?php endif; ?>
    </nav>
</header>
