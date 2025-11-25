<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Inicio de sesión</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Stylesheets -->
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheets/inicio_sesion.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheets/estilos1.css'>
    <!-- Fuente Montserrat de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap">
    <link rel="icon" href="images/estrella.png" type="image/png">
</head>

<body>
    <nav id="navbarPaginaPrincipal" class="navbar navbar-expand fixed-top">
        <div class="container-fluid">
            <img src="images/logoncm.png" alt="Logo de La Salle" width="60px">
            <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar"
                aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="Empresas.php" class="nav-link">Empresa ganadora</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="contenido2">
            <div class="formularioInicioSesion"> <!--id="formularioContenedor"-->
                <form action="scriptsphp/iniciarSesion.php" id="" method="POST">
                    <h2 class="text-center text-white mb-3">Accede a la Feria 2025</h2>
                    <h4 class="text-center text-white mb-4">Bienvenido a La Salle Business Match</h4>
                    <div class="mb-3">
                        <input id="emailInicioSesion" name="emailInicioSesion" type="email" class="form-control" placeholder="Correo electr&oacute;nico corporativo">
                    </div>
                    <div class="mb-4">
                        <input id="passwordInicioSesion" name="passwordInicioSesion" type="password" class="form-control" placeholder="Contrase&#241;a">
                    </div>
                    <button id="botonIniciarSesion" name="botonIniciarSesion" type="submit" class="btn btn-primary w-100">Iniciar sesi&oacute;n</button>
                    <a class="registrarse" href="formulario.php">¿Eres nuevo? Regístrate </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>