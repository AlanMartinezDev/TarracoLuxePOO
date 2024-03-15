<?php
$resultado = $_GET['resultado'] ?? null;

require '../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Administrador de TarracoLuxe</h1>
    <?php if (intval($resultado) === 1) : ?>
        <p class="alerta exito">Propiedad creada correctamente</p>
    <?php endif; ?>
    <a href="/TarracoLuxe/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>
</main>
<?php
incluirTemplate('footer');
?>