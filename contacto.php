<?php
$inicio = false;
include './includes/templates/header.php';
?>
<main class="contenedor seccion">
  <h1>Contacto</h1>
  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
    <img src="build/img/destacada3.jpg" alt="Imagen de contacto" loading="lazy" />
  </picture>
  <h2>Llene el formulario de contacto</h2>
  <form class="formulario">
    <fieldset>
      <legend>Información personal</legend>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" placeholder="Tu nombre" />
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" placeholder="Tu correo electrónico" />
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" placeholder="Tu teléfono" />
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje"></textarea>
    </fieldset>
    <fieldset>
      <legend>Información sobre la propiedad</legend>
      <label for="opciones">Compra o vende:</label>
      <select id="opciones">
        <option value="" disabled selected>-- Seleccione --</option>
        <option value="compra">Compra</option>
        <option value="vende">Vende</option>
      </select>
      <label for="presupuesto">Precio o presupuesto:</label>
      <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto" />
    </fieldset>
    <fieldset>
      <legend>Contacto</legend>
      <p>¿Cómo desea ser contactado?</p>
      <div class="forma-contacto">
        <label for="contactar-telefono">Teléfono</label>
        <input name="contacto" type="radio" value="telefono" id="contactar-telefono" />
        <label for="contactar-email">Correo electrónico</label>
        <input name="contacto" type="radio" value="email" id="contactar-email" />
      </div>
      <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" />
      <label for="hora">Hora:</label>
      <input type="time" id="hora" min="09:00" max="17:00" />
    </fieldset>
    <input type="submit" value="Enviar" class="boton-verde" />
  </form>
</main>
<footer class="footer seccion">
  <div class="contenedor contenedor-footer">
    <nav class="navegacion">
      <a href="nosotros.html">Nosotros</a>
      <a href="anuncios.html">Anuncios</a>
      <a href="blog.html">Blog</a>
      <a href="contacto.html">Contacto</a>
    </nav>
  </div>
  <p class="copyright">
    Todos los Derechos Reservados 2024 &copy; TarracoLuxe
  </p>
</footer>
<script src="build/js/bundle.min.js"></script>
</body>

</html>