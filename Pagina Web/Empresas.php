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
	<title>Empresas</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<!-- Stylesheets -->
	<link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='stylesheets/empresas.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='stylesheets/estilos1.css'>
	<!-- Fuente Montserrat de Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="icon" href="images/estrella.png" type="image/png">
</head>

<body class="bg-dark">
  	<nav id="navbarPaginaPrincipal" class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <div class="navbar-collapse">
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="inicio_sesion.php" class="nav-link" id="enlaceFormulario">Iniciar sesi&oacute;n</a></li>
					<li class="nav-item"><a href="scriptsphp/cerrarSesion.php" id="enlaceCerrarSesion" class="nav-link">Cerrar
                            sesi&oacute;n</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<section class="fondo">
		<div class="todasEmpresas">
			
				<div class="recuadroEmpresas">
				<div class="container py-5">
					<h2 class="text-light mb-4">Empresas registradas</h2>

					<div class="row g-4">

						<!-- Empresa 1 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/LASI.png" class="card-img-top p-3" alt="Logo Empresa 1">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">LASI</h5>
										<p class="card-text small">Moda e inclusividad</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=fashioncolasalle@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
										<a href="https://jonathancobas5.wixsite.com/lasi" class="empresa-web-link">
											Visitar sitio web
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 2 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/epiworks.png" class="card-img-top p-3" alt="Logo EPIWORKS LA SALLE">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">EPIWORKS LA SALLE</h5>
										<p class="card-text small">Venta de EPIS al por mayor</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=epiworks.sefed@lasalleinstitucion.es"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
										<a href="https://epiworkssefed.wixsite.com/epiworks" class="empresa-web-link"
											target="_blank">
											Visitar sitio web
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 3 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/lasalleirun.jpg" class="card-img-top p-3" alt="Logo ZAPALDU">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">ZAPALDU</h5>
										<p class="card-text small">Zapatería personalizada e inclusiva</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=zapalduinfo@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Empresa 4 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/lasalleirun.jpg" class="card-img-top p-3" alt="Logo AULKI">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">AULKI</h5>
										<p class="card-text small">Sillas de oficina inteligentes</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=aulki.info@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 5 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/lasalleirun.jpg" class="card-img-top p-3" alt="Logo LOREARTEAN">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">LOREARTEAN</h5>
										<p class="card-text small">Floristería y venta de flores</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=lorearteanirun@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
										<a href="https://jonathancobas5.wixsite.com/lasi" class="empresa-web-link"
											target="_blank">
											Visitar sitio web
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 6 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/lasalleirun.jpg" class="card-img-top p-3" alt="Logo GREENYKIT">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">GREENYKIT</h5>
										<p class="card-text small">Kits de limpieza sostenibles y ecológicos</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=greenykit.irun@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 7 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/VelocityCar.png" class="card-img-top p-3" alt="Logo VelocityCar">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">VelocityCar</h5>
										<p class="card-text small">Venta, alquiler, restauración y reparación de
											automóviles clásicos</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=velocitycar.sefed@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
										<a href="https://velocitycar.wixsite.com/velocitycar" class="empresa-web-link"
											target="_blank">
											Visitar sitio web
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 8 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/SLB.png" class="card-img-top p-3" alt="Logo SALLE-LAN BILTEGIAK">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">SALLE-LAN BILTEGIAK</h5>
										<p class="card-text small">Artículos para el almacenaje</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=sallelanbiltegiak.sefed@lsbikasleak.eus"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
										<a href="https://sallelanbiltegiakm.wixsite.com/sallelanbiltegiak"
											class="empresa-web-link" target="_blank">
											Visitar sitio web
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 9 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/lasallegracia.png" class="card-img-top p-3" alt="Logo GISING SLS">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">GISING SLS</h5>
										<p class="card-text small">Regalos para empresas</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=gising.2526@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 10 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/fruta.png" class="card-img-top p-3" alt="Logo Enfruita't SL">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">Enfruita't SL</h5>
										<p class="card-text small">Elaboración y venta de helados de frutas</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=fruitat@gmail.com"
											target="_blank" class="btn-contactar">
											Contactar
										</a>
										<a href="https://alanmunoz2006.wixsite.com/enfruitat" class="empresa-web-link"
											target="_blank">
											Visitar sitio web
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Empresa 11 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/IronBites.png" class="card-img-top p-3" alt="Logo IronBites, SL">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">IronBites, SL</h5>
										<p class="card-text small">Venta de suplementos alimenticios y productos
											dietéticos</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=Ironbites50@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://sites.google.com/view/ironbites-com/productes/post-entreno/magnesi-essencial"
											class="empresa-web-link" target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 12 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/Hemera.png" class="card-img-top p-3" alt="Logo HEMERA, SL">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">HEMERA, SL</h5>
										<p class="card-text small">Venta de perfumes personalizados</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=sl.hemera@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://sites.google.com/view/hemerasl/inicio" class="empresa-web-link"
											target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 13 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/Tastets.png" class="card-img-top p-3" alt="Logo TASTETS D'ARREU, S.L.">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">TASTETS D'ARREU, S.L.</h5>
										<p class="card-text small">Gastronomía multicultural</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=tastetsdarreu@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://sites.google.com/view/tastetsdarreu/quien-somos"
											class="empresa-web-link" target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 14 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/Nexa.png" class="card-img-top p-3" alt="Logo NEXA">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">NEXA</h5>
										<p class="card-text small">Ocio y deporte</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=nexalleida@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://tuit.cat/qSwSX" class="empresa-web-link"
											target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 15 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/TechCity.png" class="card-img-top p-3" alt="Logo Tech City">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">Tech City</h5>
										<p class="card-text small">Venta al por menor de productos informáticos</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=techcitylasalle@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://techcitylasalle.wixsite.com/tech-city" class="empresa-web-link"
											target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 16 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/Visualix.png" class="card-img-top p-3" alt="Logo VISUALIX">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">VISUALIX</h5>
										<p class="card-text small">Fotografía y video, asesoría sobre marketing digital
											a empresas</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=reception@visualix.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://sites.google.com/view/visualixcom/inicio?scoped_locale=es"
											class="empresa-web-link" target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 17 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/laSalleJerez.png" class="card-img-top p-3" alt="Logo CREAMATERIA">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">CREAMATERIA</h5>
										<p class="card-text small">Textil elaborado con materiales sostenibles y
											personalizados</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=reception@creamateria.com"
											target="_blank" class="btn-contactar">Contactar</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 18 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/PaperMas.png" class="card-img-top p-3" alt="Logo PAPERMÁS">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">PAPERMÁS</h5>
										<p class="card-text small">Material de oficina, papelería y formación en
											personalización de artículos de papelería</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=paapeer.mmass.empresa@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://sites.google.com/lasallemundonuevo.es/papermas/inicio"
											class="empresa-web-link" target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Empresa 19 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/Ofidesing.png" class="card-img-top p-3" alt="Logo OFIDESIGN">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">OFIDESIGN</h5>
										<p class="card-text small">Mobiliario de oficina y diseño de espacios
											personalizados para entornos laborales</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=ofidesign.mundonuevo@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://sites.google.com/d/1seS089uDtdCk8N3gR5pFFCzktYqjSWwR/p/1nIuqsqro521e8BDYW5Zp-4gGrROtT_pq/edit"
											class="empresa-web-link" target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 20 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/laSalleSagradoCorazon.jpg" class="card-img-top p-3" alt="Logo Tecnus">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">Tecnus</h5>
										<p class="card-text small">Comercialización de productos tecnológicos</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=tecnusventas@lasallesagradocorazon.es"
											target="_blank" class="btn-contactar">Contactar</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 21 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/laSalleSagradoCorazon.jpg" class="card-img-top p-3" alt="Logo AUREAL SL">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">AUREAL SL</h5>
										<p class="card-text small">Limpieza</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=empresasimnulada1@lasallesagradocorazon.es"
											target="_blank" class="btn-contactar">Contactar</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 22 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/laSalleSagradoCorazon.jpg" class="card-img-top p-3" alt="Logo SICUREZZADIRECT SL">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">SICUREZZADIRECT SL</h5>
										<p class="card-text small">Comercialización y distribución de aparatos de
											vigilancia</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=empresasimulada2@lasallesagradocorazon.es"
											target="_blank" class="btn-contactar">Contactar</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 23 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/laSalleSagradoCorazon.jpg" class="card-img-top p-3" alt="Logo FURNINNOVA SL">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">FURNINNOVA SL</h5>
										<p class="card-text small">Comercialización y distribución de muebles de oficina
										</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=empresasimulada3@lasallesagradocorazon.es"
											target="_blank" class="btn-contactar">Contactar</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Empresa 24 -->
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card h-100 shadow empresa-card">
								<img src="images/Sallemat.png" class="card-img-top p-3"
									alt="Logo SALLEMAT SUMINISTROS S.L.">
								<div class="card-body empresa-card-body">
									<div>
										<h5 class="card-title">SALLEMAT SUMINISTROS S.L.</h5>
										<p class="card-text small">Venta de suministros de ferretería, pintura y
											jardinería</p>
									</div>
									<div class="empresa-card-footer">
										<a href="https://mail.google.com/mail/?view=cm&fs=1&to=info.sallematsuministros@gmail.com"
											target="_blank" class="btn-contactar">Contactar</a>
										<a href="https://infosallematsumini.wixsite.com/sallemat-suministros"
											class="empresa-web-link" target="_blank">Visitar sitio web</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

		</div>
	</section>
	<script src='bootstrap/js/bootstrap.bundle.js'></script>
	<script src="javascripts/gestionarCookies.js"></script>
</body>

</html>