<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Crear propiedad</h1>
    <form class="formulario">
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" placeholder="Título de la propiedad">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Precio de la propiedad">
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Número de habitaciones" min="1" max="9">
            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder="Número de baños" min="1" max="9">
            <label for="plazas">Plazas:</label>
            <input type="number" id="plazas" placeholder="Número de plazas" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select>
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