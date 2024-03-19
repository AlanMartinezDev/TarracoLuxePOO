<?php
// Importar la conexión
require __DIR__ . '/../config/database.php';
$db = conectarDB();

// Consultar
$query = "SELECT * FROM propiedades LIMIT {$limite}";

// Obtener el resultado
$resultado = mysqli_query($db, $query);

?>
<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="anuncio">
            <img src="/Tarracoluxe/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Anuncio 1" loading="lazy" />
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
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
                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Ver propiedad</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php
// Cerrar la conexión
mysqli_close($db);
?>