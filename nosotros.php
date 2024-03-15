<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Conoce sobre nosotros</h1>
  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img src="build/img/nosotros.jpg" alt="Sobre nosotros" loading="lazy" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
        dolorum quod fugiat labore autem alias sequi eaque? Doloremque,
        quasi, dolorem corrupti nulla quo amet aliquam laborum impedit
        doloribus quae hic. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Obcaecati dolorum quod fugiat labore autem alias
        sequi eaque? Doloremque, quasi, dolorem corrupti nulla quo amet
        aliquam laborum impedit doloribus quae hic.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
        nesciunt dicta consequuntur officia esse. Fugit saepe, omnis
        repudiandae ea aut porro quae error dignissimos tempore cupiditate
        quia ab magnam ullam.
      </p>
    </div>
  </div>
</main>
<section class="contenedor seccion">
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
</section>
<?php
incluirTemplate('footer');
?>