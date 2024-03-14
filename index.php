<?php
$inicio = true;
include './includes/templates/header.php';
?>
<main class="contenedor seccion">
  <h1>Más sobre nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum enim
        assumenda alias exercitationem. Nesciunt animi dicta laudantium,
        odit veritatis excepturi ratione, harum doloribus sit vero
        architecto sequi eum deleniti autem.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum enim
        assumenda alias exercitationem. Nesciunt animi dicta laudantium,
        odit veritatis excepturi ratione, harum doloribus sit vero
        architecto sequi eum deleniti autem.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>A tiempo</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum enim
        assumenda alias exercitationem. Nesciunt animi dicta laudantium,
        odit veritatis excepturi ratione, harum doloribus sit vero
        architecto sequi eum deleniti autem.
      </p>
    </div>
  </div>
</main>
<section class="seccion contenedor">
  <h2>Casas y pisos en venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img src="build/img/anuncio1.jpg" alt="Anuncio 1" loading="lazy" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo en el lago</h3>
        <p>
          Casa en el lago con excelente vista, acabados de lujo a un
          excelente precio
        </p>
        <p class="precio">1.500.000 €</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" class="icono" />
            <p>4</p>
          </li>
          <li>
            <img src="build/img/icono_aparcamiento.svg" alt="Icono aparcamiento" loading="lazy" class="icono" />
            <p>2</p>
          </li>
          <li>
            <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy" class="icono" />
            <p>3</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton-amarillo-block">Ver propiedad</a>
      </div>
    </div>
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
        <img src="build/img/anuncio2.jpg" alt="Anuncio 2" loading="lazy" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa terminados de lujo</h3>
        <p>
          Casa con diseño moderno, así como tecnología inteligente y
          amueblada
        </p>
        <p class="precio">2.000.000 €</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" class="icono" />
            <p>4</p>
          </li>
          <li>
            <img src="build/img/icono_aparcamiento.svg" alt="Icono aparcamiento" loading="lazy" class="icono" />
            <p>2</p>
          </li>
          <li>
            <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy" class="icono" />
            <p>3</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton-amarillo-block">Ver propiedad</a>
      </div>
    </div>
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
        <img src="build/img/anuncio3.jpg" alt="Anuncio 3" loading="lazy" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de con piscina</h3>
        <p>
          Casa con piscina y acabados de lujo en la ciudad, excelente
          oportunidad
        </p>
        <p class="precio">3.000.000 €</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" class="icono" />
            <p>4</p>
          </li>
          <li>
            <img src="build/img/icono_aparcamiento.svg" alt="Icono aparcamiento" loading="lazy" class="icono" />
            <p>2</p>
          </li>
          <li>
            <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy" class="icono" />
            <p>3</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton-amarillo-block">Ver propiedad</a>
      </div>
    </div>
  </div>
  <div class="alinear-derecha">
    <a href="anuncios.html" class="boton-verde">Ver todas</a>
  </div>
</section>
<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondrá en contacto
    contigo lo antes posible
  </p>
  <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
</section>
<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img src="build/img/blog1.jpg" alt="Texto entrada blog" loading="lazy" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>13/03/2024</span> por:
            <span>Alan Martínez</span>
          </p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero
          </p>
        </a>
      </div>
    </article>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img src="build/img/blog2.jpg" alt="Texto entrada blog" loading="lazy" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guía para la decoración de tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>13/03/2024</span> por:
            <span>Alan Martínez</span>
          </p>
          <p>
            Minimiza el espacio en tu hogar con esta guía, aprende a
            combinar muebles y colores para darle vida a tu espacio
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h2>Testimoniales</h2>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atención y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Alexandra Gomes</p>
    </div>
  </section>
</div>
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