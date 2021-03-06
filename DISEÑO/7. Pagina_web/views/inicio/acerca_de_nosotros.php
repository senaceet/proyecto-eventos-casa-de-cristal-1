<html>
<head>
	<title>
		Acerca de nosotros
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="views/img/icon.ico" />

	<!--link rel="stylesheet" type="text/css" href="views/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="views/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="views/Utilitarios/fontawesome-5.13.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="views/css/styles.css">
	<link rel="stylesheet" type="text/css" href="views/css/acercadenosotros.css">


</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					x
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2 esp-bajo" STYLE="text-align:center;">
								<IMG SRC="views/img/Logo.jpeg" id="img-logo"></IMG>
							</div>

							<div class="col-lg-10" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-2" STYLE="">
									</div>
									<div class="col-lg-4 esp-bajo" STYLE="">
										<div class="input-group" id="bus">
											<input type="text" class="form-control" placeholder="BUSCADOR">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button">IR</button>
											</div>
										</div>
									</div>
									<div class="col-lg-2 esp-bajo" id="inicio-personal">
										<a href="?class=IndexHome&method=loginEmpleados">
											<!--IMG class="img-login" SRC="views/img/usuario.png"  title="Login empleado"></IMG-->
											<i class="fas fa-user"></i>
										</a>

										<a href="?class=IndexHome&method=loginAdministrador">
											<!--IMG class="img-login" SRC="views/img/espia.png"  title="Login administrador"-->
											<i class="fas fa-user-secret"></i>
										</a>
									</div>
									<div class="col-lg-4 esp-bajo" id="inicio-usuarios">
										<a href="?class=IndexHome&method=loginUsuario">
											<button type="button" class="btn btn-primary">Iniciar sesion</button>
										</a>
										<a href="?class=IndexHome&method=formularioRegistro">
											<button type="button" class="btn btn-primary">Registro</button>
										</a>
									</div>
								</div>
								<div class="row" style="height: 15%;">
								</div>
								<div id="div-menu" onclick="menu();">
									<img src="views/img/menu.png">
								</div>
								<nav class="men" id="men">
									<ul class="menu-pincipal">
										<li class="">
											<a href="?class=IndexHome&method=index">Inicio</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=eventos">Eventos</a>
										</li>
										<li class="active">
											<a href="?class=IndexHome&method=acercaDeNosotros">Acerca de nosotros</a>
										</li>
										<li class="">
											<a href="?class=IndexHome&method=contactos">Contactenos</a>
										</li>
									</ul>
								</nav>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="todoElContenido">
			<div class="col-lg-12">
				<div class="row" id="event_2">
					<div class="col-lg-12" STYLE="">
						<div style="text-align: center;">
							<h2>EVENTOS CASA DE CRISTAL</h2>
							<p class="center" id="text">
								Eventos casa de cristal es una compañía que vela por la organización y creatividad de eventos sociales, familiares y empresariales sin dejar de lado los intereses y gustos de nuestro clientes 	
							</p>
						</div>
					</div>
				</div>
				<div id="video-acercadenosotros">
					<iframe width="500" height="250" src="https://www.youtube.com/embed/6EllTOaYgqg?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="row margin" >
					<div class="col-lg-3">
						<img src="views/img/novios.jpg" style="" id="imagenes">
					</div>
					<div class="col-lg-7 justify">
						<h3>CAPTURAMOS MOMENTOS INOLVIDABLES...</h3>
						<p>
							¡Sus momentos merecen siempre la mejor presentación!. Nos encargamos de que espectaculares imágenes reflejen todos los sentimientos y sean captados durante la celebración.
							En cada evento nos encargamos de ofrecer fotos únicas en donde todos los momentos se convertirán en inolvidables y esos detalles se trasformaran en grandes y hermosos recuerdos 
						</p>
					</div>
					<div class="col-lg-2"></div>
				</div>
				<div class="row margin" >
					<div class="col-lg-2"></div>
					<div class="col-lg-7 justify">
						<h3>DECORACIÓN Y AMBIENTACIÓN</h3>
						<p>
							Nos comprometemos a crear juntos a los mejores profesionales el mundo de la de la ambientación y escenarios llenos de emociones que harán de sus eventos momentos inolvidables.

							Decoraciones de lujo, fantasía y creatividad acompañaran tus mejores momentos, si tienes alguna idea especial, buscaremos la forma de complementarla para que sea única
						</p>
					</div>
					<div class="col-lg-3">
						<img src="views/img/decoracion.jpg" style="" id="imagenes">
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="views/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="views/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="views/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
<script type="text/javascript" src="views/Utilitarios/Utilitarios/tether.min.js"></script>
<script type="text/javascript" src="views/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="views/js/generales.js"></script>
<script type="text/javascript">
	$('#div-menu').click(function(){
		
		var menu = document.getElementById("men"),
		estilo = document.head.appendChild(document.createElement("style"));

		if (menu.className =="men ocultar_menu") {
			estilo.innerHTML = "#todoElContenido{margin-top: 5%;}";
		}else if(menu.className =="men"){
			estilo.innerHTML = "#todoElContenido{margin-top: 50%;}";
		}

	});
</script>
</body>
</html>