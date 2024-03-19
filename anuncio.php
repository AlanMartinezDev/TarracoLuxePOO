<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header('Location: index.php');
}

// Importar la conexión
require 'includes/config/database.php';
$db = conectarDB();

// Consultar
$query = "SELECT * FROM propiedades WHERE id = {$id}";

// Obtener el resultado
$resultado = mysqli_query($db, $query);
if (!$resultado->num_rows) {
  header('Location: anuncios.php');
}
$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
  <h1><?php echo $propiedad['titulo']; ?></h1>
  <img src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen del anuncio" loading="lazy" class="icono" />
  <div class="resumen-propiedad">
    <p class="precio"><?php echo $propiedad['precio']; ?> €</p>
    <ul class="iconos-caracteristicas">
      <li>
        <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" class="icono" />
        <p><?php echo $propiedad['habitaciones']; ?></p>
      </li>
      <li>
        <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy" class="icono" />
        <p><?php echo $propiedad['wc']; ?></p>
      </li>
      <li>
        <img src="build/img/icono_aparcamiento.svg" alt="Icono aparcamiento" loading="lazy" class="icono" />
        <p><?php echo $propiedad['plazas']; ?></p>
      </li>
    </ul>
    <p><?php echo $propiedad['descripcion']; ?></p>
  </div>
</main>
<?php
mysqli_close($db);

incluirTemplate('footer');
?>