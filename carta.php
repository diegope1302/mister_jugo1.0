<?php include('Configuración/header.php'); ?>

<h1>Menú 📋</h1>

<section class="filtros">
  <button onclick="filtrar('sandwiches')">Sándwiches 🥪</button>
  <button onclick="filtrar('jugos')">Jugos 🧃</button>
  <button onclick="filtrar('postres')">Postres 🍰</button>
</section>

<section id="productos">
  <!-- Aquí se cargarán los productos dinámicamente -->
</section>

<script src="js/carrito.js"></script>

<?php include('Configuración/footer.php'); ?>
