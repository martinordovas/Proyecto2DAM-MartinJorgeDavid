<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
}
else {
    $usuario = null;
}
?>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Nosotros</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!-- Stylesheets -->
        <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='stylesheets/nosotros.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='stylesheets/estilos1.css'>
        <!-- Fuente Montserrat de Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="icon" href="images/estrella.png" type="image/png">
    </head>
    <body class="cuadroInterior">
        <nav id="navbarPaginaPrincipal" class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <img src="logo-arlep-minusculas.png" alt="Logo de La Salle" width="100px">
                <?php if($usuario):?>
					<span class="navbar-text d-flex align-items-center my-0 align-self-center ps-3 me-3 emailUsuario" style="font-weight: 500; line-height: 1;">
						<i class="bi bi-person-circle me-1 fs-5" style="color: inherit; color: rgba(22, 59, 141);"></i>
						<?= htmlspecialchars($usuario) ?> 
					</span>
				<?php endif; ?>
                <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar" aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="inicio_sesion.php" id="enlaceFormulario" class="nav-link">Iniciar sesi&oacute;n</a></li>
                        <li class="nav-item"><a href="scriptsphp/cerrarSesion.php" id="enlaceCerrarSesion" class="nav-link">Cerrar
                            sesi&oacute;n</a></li>
                        <li class="nav-item"><a href="Empresas.php" class="nav-link">Empresas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
    <script src='bootstrap/js/bootstrap.bundle.js'></script>
    <script src="javascripts/gestionarCookies.js"></script>
    <script src="javascripts/script1.js"></script>
</html>