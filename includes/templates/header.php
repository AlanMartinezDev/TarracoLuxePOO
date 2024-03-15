<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TarracoLuxe</title>
    <link rel="stylesheet" href="/TarracoLuxe/build/css/app.css" />
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/TarracoLuxe/index.php">
                    <img src="/TarracoLuxe/build/img/logo.svg" alt="Logotipo de TarracoLuxe" />
                </a>
                <div class="mobile-menu">
                    <img src="/TarracoLuxe/build/img/barras.svg" alt="Icono menú responsive" />
                </div>
                <div class="derecha">
                    <img src="/TarracoLuxe/build/img/dark-mode.svg" alt="Icono dark mode" class="dark-mode-boton" />
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
            <?php if ($inicio) { ?>
                <h1>Venta de casas y pisos exclusivos de lujo en Tarragona</h1>
            <?php } ?>
        </div>
    </header>