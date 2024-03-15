<?php
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $plazas = $_POST['plazas'];
    $vendedorId = $_POST['vendedor'];

    // Insertar en la base de datos
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, plazas, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$plazas', '$vendedorId')";

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        echo "Insertado correctamente";
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Crear propiedad</h1>
    <form action="/TarracoLuxe/admin/propiedades/crear.php" method="post" class="formulario">
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título de la propiedad">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad">
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Número de habitaciones" min="1" max="9">
            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Número de baños" min="1" max="9">
            <label for="plazas">Plazas:</label>
            <input type="number" id="plazas" name="plazas" placeholder="Número de plazas" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option disabled selected>-- Selecciona un vendedor --</option>
                <option value="1">Alan</option>
                <option value="2">Alexandra</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>
    <a href="/TarracoLuxe/admin" class="boton boton-verde">Volver</a>
</main>
<?php
incluirTemplate('footer');
?>