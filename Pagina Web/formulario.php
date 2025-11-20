<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Registrate</title>
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
</head>

<body>
    <nav id="navbarPaginaPrincipal" class="navbar navbar-expand fixed-top">
        <div class="container-fluid">
            <img src="logo-arlep-minusculas.png" alt="Logo de La Salle" width="100px">
            <div class="" id="menuNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="Empresas.php" class="nav-link">Empresa ganadora</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <img class="fondoPagina" src="images/fondo.png" alt="Fondo de la página">
    <div>
        <div class="contenido">
            <div class="formularioInicioSesion2"> <!--id="formularioContenedor"-->
                <form action="scriptsphp/registrarDatos.php" method="post" id="">
                    <h2 class="text-center text-white mb-4">Ingrese sus datos</h2>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" id="nombreEmpresa" name="nombreEmpresa" class="form-control" placeholder="Nombre de la empresa" required/>
                                </div>
                                <div class="mb-3">
                                    <input type="email" id="correoEmpresa" name="correoEmpresa" class="form-control" placeholder="Correo electr&oacute;nico" required/>
                                </div>
                                <div class="mb-3">
                                    <input type="password" id="passwordEmpresa" name="passwordEmpresa" class="form-control" placeholder="Contrase&#241;a" required/>
                                </div>
                                <div class="mb-3">
                                    <input type="url" id="enlaceWeb" name="enlaceWeb" class="form-control" placeholder="Tu p&aacute;gina web" required/>
                                </div>
                                <div class="mb-3">
                                    <input type="url" id="enlaceMeet" name="enlaceMeet" class="form-control" placeholder="URL Meet" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 pb-2 pt-2 cuadro">
                                    <h5 class="text-start text-center text-white">El logo de la empresa</h5><input type="file" class="form-control-sm" required></input>
                                </div>
                                <div class="mb-3">
                                    <div class="container-fluid margen1">
                                        <div class="row">
                                            <div class="col-3">
                                                <h5 class="margen2">Horario de</h5>
                                            </div>
                                            <div class="col-1">
                                                <input type="time" id="horarioEmpresaAM1" name="horarioEmpresaAM1" class="" required/>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1">
                                                <h5>a</h5>
                                            </div>
                                            <div class="col-2">
                                                <input type="time" id="horarioEmpresaAM2" name="horarioEmpresaAM2" class="" required/>
                                            </div>
                                            <div class="col-1"></div>
                                            <div class="col-2">
                                                <h5>A.M.</h5>
                                            </div>
                                        </div>
                                        <div class="mb-3"></div>
                                        <div class="row">
                                            <div class="col-3">
                                                <h5 class="margen2">Horario de</h5>
                                            </div>
                                            <div class="col-1">
                                                <input type="time" id="horarioEmpresaPM1" name="horarioEmpresaPM1" class="" required/>
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-1">
                                                <h5>a</h5>
                                            </div>
                                            <div class="col-2">
                                                <input type="time" id="horarioEmpresaPM2" name="horarioEmpresaPM2" class="" required/>
                                            </div>
                                            <div class="col-1"></div>
                                            <div class="col-2">
                                                <h5>P.M.</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea id="descripcionEmpresa" name="descripcionEmpresa" class="form-control form-control2" placeholder="Descripción de tus productos / servicios" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button id="botonEnviar" name="botonEnviar" type="submit" class="btn btn-primary w-100">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
        
</body>

</html>