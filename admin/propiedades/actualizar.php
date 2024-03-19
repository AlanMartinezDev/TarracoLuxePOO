<?php
require '../../includes/funciones.php';
estaAutenticado();

// Validar por ID válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /TarracoLuxe/admin');
}

require '../../includes/config/database.php';
$db = conectarDB();

// Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = {$id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

// Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Array con mensajes de errores
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$plazas = $propiedad['plazas'];
$vendedorId = $propiedad['vendedorId'];
$imagenPropiedad = $propiedad['imagen'];

// Ejecutar el código después de que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizar con mysqli_real_escape_string
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $imagen = mysqli_real_escape_string($db, $_POST['imagen']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $plazas = mysqli_real_escape_string($db, $_POST['plazas']);
    $creado = date('Y/m/d');
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);

    // Asignar files a una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "Debes añadir un título";
    }

    if (strlen($titulo) > 45) {
        $errores[] = "El título no debe superar los 45 caracteres";
    }

    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }

    // Validar por tamaño (2mb máximo)
    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es demasiado grande";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripcion que tenga al menos 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "Debes añadir al menos una habitación";
    }

    if (!$wc) {
        $errores[] = "Debes añadir al menos un baño";
    }

    if (!$plazas) {
        $errores[] = "Debes añadir al menos una plaza";
    }

    if (!$vendedorId) {
        $errores[] = "Debes añadir un vendedor";
    }

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
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" placeholder="Título de la propiedad">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?php echo $precio; ?>" placeholder="Precio de la propiedad">
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" value="<?php echo $imagen; ?>" accept="image/jpeg, image/png">
            <img src="/TarracoLuxe/imagenes/<?php echo $imagenPropiedad; ?>" alt="" class="imagen-small">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" value="<?php echo $habitaciones; ?>" placeholder="Número de habitaciones" min="1" max="9">
            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" value="<?php echo $wc; ?>" placeholder="Número de baños" min="1" max="9">
            <label for="plazas">Plazas:</label>
            <input type="number" id="plazas" name="plazas" value="<?php echo $plazas; ?>" placeholder="Número de plazas" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option disabled selected>-- Selecciona un vendedor --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile ?>
            </select>
        </fieldset>
        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
    </form>
    <a href="/TarracoLuxe/admin" class="boton boton-verde">Volver</a>
</main>
<?php
incluirTemplate('footer');
?>