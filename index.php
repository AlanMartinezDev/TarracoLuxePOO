<?php
require 'includes/app.php';
incluirTemplate('header', true);
?>
<main class="contenedor seccion">
  <h1>Más sobre nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>Comprar con nosotros garantiza seguridad total. Cuidamos cada detalle, desde la autenticidad hasta la legalidad de tu nueva propiedad. Tu inversión está protegida. Confía en nuestra experiencia.</p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>Ofrecemos precios competitivos y transparentes. Sin sorpresas ni costos ocultos. Aseguramos el mejor valor por tu inversión en propiedades seleccionadas cuidadosamente.</p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>A tiempo</h3>
      <p>Gestionamos tu compra de forma eficiente, asegurando la entrega de tu propiedad a tiempo. Compromiso y puntualidad nos definen. Con nosotros, tu futuro empieza cuando lo prometemos.</p>
    </div>
  </div>
</main>
<section class="seccion contenedor">
  <h2>Casas y pisos en venta</h2>
  <?php
  include 'includes/templates/anuncios.php';
  ?>
  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver todas</a>
  </div>
</section>
<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondrá en contacto
    contigo lo antes posible
  </p>
  <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
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
        <a href="entrada.php">
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
        <a href="entrada.php">
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
      <p>- Montse Mendiola</p>
    </div>
  </section>
</div>
<?php
incluirTemplate('footer');
?>