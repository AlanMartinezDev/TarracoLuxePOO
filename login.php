<?php
// Importar la base de datos
require 'includes/app.php';
$db = conectarDB();

$errores = [];

// Autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }

    if (!$password) {
        $errores[] = "La contraseña es obligatoria";
    }

    if (empty($errores)) {
        // Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '{$email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            // Obtener datos del usuario
            $usuario = mysqli_fetch_assoc($resultado);

            // Verificar si la contraseña es correcta o no
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                // El usuario está autenticado
                session_start();

                // Llenar el array de la sesión
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                header('Location: /TarracoLuxe/admin');
            } else {
                $errores[] = "La contraseña es incorrecta";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}
// Incluye el header
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesión</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="post" class="formulario" novalidate>
        <fieldset>
            <legend>Datos de inicio de sesión</legend>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required />
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña" required />
        </fieldset>
        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>
</main>
<?php
incluirTemplate('footer');
?>