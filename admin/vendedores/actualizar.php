<?php

use App\Vendedor;

require '../../includes/app.php';

estaAutenticado();

// Consulta para obtener todos los vendedores
$vendedor = new Vendedor;

// Array con mensajes de errores
$errores = Vendedor::getErrores();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Actualizar vendedor</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>
    <form method="post" class="formulario" enctype="multipart/form-data">
        <?php include "../../includes/templates/formulario_vendedores.php" ?>
        <input type="submit" value="Actualizar vendedor" class="boton boton-verde">
    </form>
    <a href="/TarracoLuxe/admin" class="boton boton-verde">Volver</a>
</main>
<?php
incluirTemplate('footer');
?>