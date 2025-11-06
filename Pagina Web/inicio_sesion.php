<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Inicio de sesión</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Stylesheets -->
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheets/inicio_sesion.css'>
    <!-- Fuente Montserrat de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navegacion">
        <div class="container-fluid">
            <img src="logo-arlep-minusculas.png" alt="Logo de La Salle" width="100px" />
            <ul class="navbar-nav ms-auto">
                <li><a href="index.html" class="nav-link texto">Inicio</a></li>
                <li><a href="Empresas.php" class="nav-link texto">Empresas</a></li>
            </ul>
        </div>
    </nav>
    <div class="fondo">
        <div class="contenido">
            <div class="formularioInicioSesion"> <!--id="formularioContenedor"-->
                <form id="">
                    <h2 class="text-center text-white mb-3">Accede a la Feria 2025</h2>
                    <h4 class="text-center text-white mb-4">Bienvenido a La Salle Business Match</h4>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Correo electr&oacute;nico corporativo">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" placeholder="Contrase&#241;a">
                    </div>
                    <button type="submit" class="btn btn-primary w-100"><a href="index.html" class="nav-link">Iniciar sesi&oacute;n</a></button>
                    <a class="registrarse" href="formulario.php">¿Eres nuevo? Regístrate </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>