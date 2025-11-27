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
                <img src="images/logoncm.png" alt="Logo de La Salle" width="70px">
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
        <div class="container-fluid">
            <div class="bloqueInicial row">
                <div class="col-xl-4 persona">
                    <img class="imagenPersona" src="images/estrella.png" alt="Foto de Jorge Villuendas Soro"/>
                    <h4>Jorge Villuendas Soro</h4>
                    <h6>jorgevilluendassoro@lasallesantoangel.es</h6>
                </div>
                <div class="col-xl-4 persona">
                    <img class="imagenPersona" src="images/estrella.png" alt="Foto de Martín Ordovás Gracia"/>
                    <h4>Mart&iacute;n Ordov&aacute;s Gracia</h4>
                    <h6>martinordovasgracia@lasallesantoangel.es</h6>
                </div>
                <div class="col-xl-4 persona">
                    <img class="imagenPersona" src="images/estrella.png" alt="Foto de David Pasamar Arroyo"/>
                    <h4>David Pasamar Arroyo</h4>
                    <h6>davidpasamararroyo@lasallesantoangel.es</h6>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bloqueInicial mt-5">
                <div class="escuela">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="imagenEscuela" src="images/lasalle.jpg" alt="Imagen de La Salle Santo Ángel">
                        </div>
                        <div class="col-xl-6 huecoTexto">
                            <h1 class="textoColegio"><b>La Salle Santo &Aacute;ngel</b></h1>
                            <h3 class="textoColegio mb-4">Zaragoza</h3>
                            <h5 class="textoColegio">Oferta educativa en Grado B&aacute;sico, Medio y Superior en electricidad, mecanizado, rob&oacute;tica y programaci&oacute;n</h5>
                            <h5 class="textoColegio mb-3">Bachilleratos de Ciencias y Letras</h5>
                            <h4 class="textoColegio">Nosotros estudiamos Grado Superior en Desarrollo de Aplicaciones Multiplataforma</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bloqueInicial mt-5 row">
                <div class="col-xl-4 persona">
                    <img class="imagenPersona" src="images/estrella.png" alt="Foto de Jorge Villuendas Soro"/>
                    <h4>Alumno de Ir&uacute;n</h4>
                    <h6></h6>
                </div>
                <div class="col-xl-4 persona">
                    <img class="imagenPersona" src="images/estrella.png" alt="Foto de Martín Ordovás Gracia"/>
                    <h4>Alumno de Ir&uacute;n</h4>
                    <h6></h6>
                </div>
                <div class="col-xl-4 persona">
                    <img class="imagenPersona" src="images/estrella.png" alt="Foto de David Pasamar Arroyo"/>
                    <h4>Alumno de Ir&uacute;n</h4>
                    <h6></h6>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="bloqueInicial mt-5">
                <div class="escuela">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <img class="imagenEscuela" src="images/iruncolegio.jpg" alt="Imagen de La Salle Irún">
                        </div>
                        <div class="col-xl-6 huecoTexto">
                            <h1 class="textoColegio"><b>Irungo La Salle</b></h1>
                            <h3 class="textoColegio mb-4">Ir&uacute;n</h3>
                            <h5 class="textoColegio">Oferta educativa en Educaci&oacute;n Infantil, Primaria, Secundaria Obligatoria, Bachilleratos de Ciencias y Letras</h5>
                            <h5 class="textoColegio mb-3">Grado Medio de electricidad y mecanizado y Superior de rob&oacute;tica, programaci&oacute;n en la producci&oacute;n, asistencia a la direcci&oacute;n y administraci&oacute;n</h5>
                            <h4 class="textoColegio">Nosotros estudiamos Grado Superior en Administraci&oacute;n y Finanzas</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src='bootstrap/js/bootstrap.bundle.js'></script>
    <script src="javascripts/gestionarCookies.js"></script>
    <script src="javascripts/script1.js"></script>
</html>