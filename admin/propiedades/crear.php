<?php

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManager as Image;
use Intervention\Image\Drivers\Gd\Driver;

require '../../includes/app.php';

estaAutenticado();

$propiedad = Propiedad();
$vendedores = Vendedor::all();
debug($vendedores);

// Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Array con mensajes de errores
$errores = Propiedad::getErrores();

// Ejecutar el código después de que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crea una nueva instancia
    $propiedad = new Propiedad($_POST['propiedad']);

    /* Subida de archivos */
    // Generar nombre único para la imagen
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

    // Realiza un resize a la imagen con intervention
    if ($_FILES['propiedad']['tmp_name']['imagen']) {
        $manager = new Image(Driver::class);
        $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);

        // Setear la imagen
        $propiedad->setImagen($nombreImagen);
    }

    // Validar
    $errores = $propiedad->validar();

    // Revisar que el array de errores esté vacío
    if (empty($errores)) {
        // Crear la carpeta para subir imagenes
        if (!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
        }

        // Guarda la imagen en el servidor
        $image->save(CARPETA_IMAGENES . $nombreImagen);

        // Guarda en la base de datos
        $propiedad->guardar();
    }
}

incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Crear propiedad</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>
    <form action="/TarracoLuxe/admin/propiedades/crear.php" method="post" class="formulario" enctype="multipart/form-data">
        <?php include "../../includes/templates/formulario_propiedades.php" ?>
        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>
    <a href="/TarracoLuxe/admin" class="boton boton-verde">Volver</a>
</main>
<?php
incluirTemplate('footer');
?>