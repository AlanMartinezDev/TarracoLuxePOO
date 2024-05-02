<?php

use App\Vendedor;

require '../../includes/app.php';

estaAutenticado();

// Validar que sea un ID válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /TarracoLuxe/admin');
}

// Obtener el arreglo del vendedor
$vendedor = Vendedor::find($id);

// Array con mensajes de errores
$errores = Vendedor::getErrores();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Asignar los valores
    $args = $_POST['vendedor'];

    // Sincronizar el objeto en memoria
    $vendedor->sincronizar($args);

    // Validación
    $errores = $vendedor->validar();

    // Guarda en la base de datos
    if (empty($errores)) {
        $vendedor->guardar();
    }
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