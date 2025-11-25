<!DOCTYPE html>

<?php
session_start();
$mensaje = null;
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}
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
    <title>Nombre Empresa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Stylesheets -->
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheets/estilos1.css'>
    <!-- Fuente Montserrat de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="images/estrella.png" type="image/png">
</head>

<body class="cuadroInterior">
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div id="toastContainer" class="toast-container position-fixed top-4 end-4 p-3" style="z-index: 1080;">
            <?php if ($mensaje == "Ha iniciado sesión. Bienvenid@."): ?>
                <div id="liveToast" class="toast text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <?= htmlspecialchars($mensaje) ?>
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($mensaje == "Usuario y/o contraseña incorrectos."): ?>
                <div id="liveToast" class="toast text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <?= htmlspecialchars($mensaje) ?>
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <nav id="navbarPaginaPrincipal" class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <img src="images/logoncm.png" alt="Logo de La Salle" width="60px">
            <?php if($usuario):?>
                <span class="navbar-text d-flex align-items-center my-0 align-self-center ps-3 me-3 emailUsuario" style="font-weight: 500; line-height: 1;">
                    <i class="bi bi-person-circle me-1 fs-5" style="color: inherit; color: rgba(22, 59, 141);"></i>
                    <?= htmlspecialchars($usuario) ?> 
                </span>
            <?php endif; ?>
            <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar"
                aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#carruselFotos" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#quienesSomos" class="nav-link">Feria</a></li>
                    <li class="nav-item"><a href="nosotros.php" class="nav-link">Sobre nosotros</a></li>
                    <li class="nav-item"><a href="#contenedor" class="nav-link">Empresa ganadora</a></li>
                    <li class="nav-item"><a href="inicio_sesion.php" id="enlaceFormulario" class="nav-link">Iniciar
                            sesi&oacute;n</a>
                    </li>
                    <li class="nav-item"><a href="scriptsphp/cerrarSesion.php" id="enlaceCerrarSesion" class="nav-link">Cerrar
                            sesi&oacute;n</a>
                    </li>
                    <li class="nav-item"><a href="Empresas.php" class="nav-link">Empresas</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div id="carruselFotos" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="contenidoSuperpuesto">
                <div id="tituloContenedor">
                    <h1 class="text-center"><b>Bienvenid@ a la feria de La Salle 2025</b></h1>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active ajusteCarrusel">
                    <img src="images/fotoEjemploFondo1.jpg" class="d-block w-100" alt="Foto 1">
                </div>
                <div class="carousel-item ajusteCarrusel">
                    <img src="images/fotoEjemploFondo2.jpg" class="d-block w-100" alt="Foto 2">
                </div>
                <div class="carousel-item ajusteCarrusel">
                    <img src="images/fotoEjemploFondo3.jpeg" class="d-block w-100" alt="Foto 3">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carruselFotos"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carruselFotos"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>
    <article>
        <div class="contenedores-principales d-flex justify-content-between flex-wrap">

            <div class="contenedor-individual ocultar col-box" id="contenedorDescarga1">
                <h4><b>Descarga 1</b></h4>
                <a href="https://www.google.es" class="btn btn-light mt-3" target="_blank">Enlace 1</a>
            </div>

            <div class="contenedor-individual ocultar col-box" id="contenedorDescarga2">
                <h4><b>Descarga 2</b></h4>
                <a href="https://www.google.es" class="btn btn-light mt-3" target="_blank">Enlace 2</a>
            </div>

            <div class="contenedor-individual ocultar contenedorDescarga3 col-box" id="contenedorDescarga3">
                <h4><b>Descarga 3</b></h4>
                <a href="https://www.google.es" class="btn btn-light mt-3" target="_blank">Enlace 3</a>
            </div>
        </div>
    </article>

    <article>
        <div class="container-fluid">
            <div class="quienesSomos ocultar" id="quienesSomos">
                <h1><b>
                        ¿Quiénes somos?
                    </b></h1>
                <img src="images/fotoEjemploFondo2.jpg" alt="Foto de ejemplo 2">
                <p>
                    Desde 2007, ayudamos a las empresas y despachos profesionales a digitalizar sus procesos con
                    herramientas informáticas de última generación, optimizando los procesos de gestión empresarial
                    para resolver los retos a los que hay que enfrentarse diariamente en cada negocio.
                </p>
            </div>
        </div>
    </article>
    <article>
        <div class="container-fluid contenedor ocultar" id="contenedor">
            <div class="row">
                <div class="col-md-6">
                    <div class="col1">
                        <h2><b>Empresa Ganadora 2025</b></h2>
                        <img src="images/logo1.jpeg" alt="Logo de la empresa ganadora">
                        <p>
                            Ayudamos a las empresas a modernizarse mediante la digitalización de procesos clave,
                            la implantación de soluciones basadas en inteligencia artificial y consultoría
                            especializada.
                            Nuestro enfoque está orientado a optimizar operaciones y mejorar la
                            competitividad en un entorno digital.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col2">
                    <div class="col-12 row1">
                        <h5><b>Este es el spot ganador de este año</b></h5>
                    </div>
                    <div class="col-12 row2">
                        <div class="ratio ratio-16x9">
                            <iframe class="video_centrada"
                                src="https://www.youtube.com/embed/LXb3EKWsInQ?si=Me5Sonmhj0pppGIe"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <footer>
        <div class="container-fluid">
            <div class="row piePagina">
                <div class="col-md-4 columna1Footer">
                    <div class="d-flex align-items-center justify-content-center">
                        <h5><b>Nuestra ubicación</b></h5>
                        <a href="https://maps.app.goo.gl/7xVmBDbeuFshzQDv7"><i
                                class="bi bi-geo-alt-fill fs-4 ajustarIcono"></i></a>
                    </div>
                    <a class="ajustarEnlaces" href="https://maps.app.goo.gl/7xVmBDbeuFshzQDv7">C. de Tomás Anzano, 1,
                        Casablanca, 50012 Zaragoza</a>
                </div>
                <div class="col-md-4 columna2Footer">
                    <div class="d-flex align-items-center justify-content-center">
                        <h5><b>Contáctanos</b></h5>
                        <a href="https://contacts.google.com/"><i
                                class="bi bi-telephone-plus-fill fs-4 ajustarIcono"></i></a>
                    </div>
                    <a class="ajustarEnlaces" href="mailto:correoejemplo@gmail.com">correoejemplo@gmail.com</a>
                </div>
                <div class="col-md-4 columna3Footer">
                    <h5><b>Redes sociales</b></h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://x.com/"><i class="bi bi-twitter fs-4 ajustarIcono"></i></a>
                        <a href="https://www.facebook.com/"><i class="bi bi-facebook fs-4 ajustarIcono"></i></a>
                        <a href="https://www.instagram.com/"><i class="bi bi-instagram fs-4 ajustarIcono"></i></a>
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin fs-4 ajustarIcono"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src='bootstrap/js/bootstrap.bundle.js'></script>
    <script src="javascripts/script1.js"></script>
    <script src="javascripts/gestionarCookies.js"></script>
</body>

</html>