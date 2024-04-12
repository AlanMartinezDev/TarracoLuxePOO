<fieldset>
    <legend>Información general</legend>
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" value="<?php echo $propiedad->titulo; ?>" placeholder="Título de la propiedad">
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" value="<?php echo $propiedad->precio; ?>" placeholder="Precio de la propiedad">
    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen" value="<?php echo $propiedad->imagen; ?>" accept="image/jpeg, image/png">
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" name="descripcion"><?php echo $propiedad->descripcion; ?></textarea>
</fieldset>
<fieldset>
    <legend>Información de la propiedad</legend>
    <label for="habitaciones">Habitaciones:</label>
    <input type="number" id="habitaciones" name="habitaciones" value="<?php echo $propiedad->habitaciones; ?>" placeholder="Número de habitaciones" min="1" max="9">
    <label for="wc">Baños:</label>
    <input type="number" id="wc" name="wc" value="<?php echo $propiedad->wc; ?>" placeholder="Número de baños" min="1" max="9">
    <label for="plazas">Plazas:</label>
    <input type="number" id="plazas" name="plazas" value="<?php echo $propiedad->plazas; ?>" placeholder="Número de plazas" min="1" max="9">
</fieldset>
<fieldset>
    <legend>Vendedor</legend>
    <select name="vendedorId">
        <option disabled selected>-- Selecciona un vendedor --</option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
            <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
        <?php endwhile ?>
    </select>
</fieldset>