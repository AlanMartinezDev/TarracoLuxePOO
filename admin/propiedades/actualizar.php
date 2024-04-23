<?php

use App\Propiedad;

require '../../includes/app.php';

estaAutenticado();

$db = conectarDB();

// Validar por ID válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /TarracoLuxe/admin');
}

// Obtener los datos de la propiedad
$propiedad = Propiedad::find($id);

// Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Array con mensajes de errores
$errores = Propiedad::getErrores();

// Ejecutar el código después de que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Asignar los atributos
    $args = $_POST['propiedad'];

    $propiedad->sincronizar($args);

    $errores = $propiedad->validar();

    // Revisar que el array de errores esté vacío
    if (empty($errores)) {
        /* Subida de archivos */
        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        // Comprobar si ya existe una imagen para eliminarla
        if ($imagen['name']) {
            // Eliminar imagen si ya existe
            unlink($carpetaImagenes . $propiedad['imagen']);

            // Generar nombre único para la imagen
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            // En caso de no actualizar la imagen
            $nombreImagen = $propiedad['imagen'];
        }

        // Insertar en la base de datos
        $query = "UPDATE propiedades SET titulo = '{$titulo}', precio = '{$precio}', imagen = '{$nombreImagen}', descripcion = '{$descripcion}', habitaciones = {$habitaciones}, wc = {$wc}, plazas = {$plazas}, vendedorId = {$vendedorId} WHERE id = {$id}";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario
            header('Location: /TarracoLuxe/admin?resultado=2');
        }
    }
}

incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Actualizar propiedad</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>
    <form method="post" class="formulario" enctype="multipart/form-data">
        <?php include "../../includes/templates/formulario_propiedades.php" ?>
        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
    </form>
    <a href="/TarracoLuxe/admin" class="boton boton-verde">Volver</a>
</main>
<?php
incluirTemplate('footer');
?>