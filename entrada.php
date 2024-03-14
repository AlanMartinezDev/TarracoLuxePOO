<?php
$inicio = false;
include './includes/templates/header.php';
?>
<main class="contenedor seccion contenido-centrado">
  <h1>Guía para la decoración de tu hogar</h1>
  <picture>
    <source srcset="build/img/destacada2.webp" type="image/webp" />
    <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
    <img src="build/img/destacada2.jpg" alt="Imagen del anuncio" loading="lazy" />
  </picture>
  <p class="informacion-meta">
    Escrito el: <span>13/03/2024</span> por: <span>Alan Martínez</span>
  </p>
  <div class="resumen-propiedad">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
      dolorum quod fugiat labore autem alias sequi eaque? Doloremque, quasi,
      dolorem corrupti nulla quo amet aliquam laborum impedit doloribus quae
      hic. Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Obcaecati dolorum quod fugiat labore autem alias sequi eaque?
      Doloremque, quasi, dolorem corrupti nulla quo amet aliquam laborum
      impedit doloribus quae hic.
    </p>
  </div>
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