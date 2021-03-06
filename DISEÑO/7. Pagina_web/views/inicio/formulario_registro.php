<html>
<head>
	<title>
		Formulario de registro
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
	<link rel="stylesheet" type="text/css" href="views/css/formularios.css">


</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">
					<div class="container-fluid">
						<div class="row">

							<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" STYLE="text-align: center;">
								<IMG SRC="views/img/Logo.jpeg" class="imgFormularios" STYLE=""></IMG>
							</div>

							<div class="col-lg-10" STYLE="background-color: WHITE;">
								<div class="row" id="busc">
									<div class="col-lg-2" STYLE="">
									</div>
									<div class="col-lg-4" STYLE="">
										<div class="input-group" id="bus">
											
										</div>
									</div>
									<div class="col-lg-2" id="inicio-personal">
										
									</div>
									<div class="col-lg-4" id="inicio-usuarios">
										
									</div>
								</div>
								<div class="row" style="height: 15%;">
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<main>
					<h2>Formulario de registro</h2>
					<form action="" method="" id="formulario_registrousuario">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="row centrar">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Primer Nombre</label><br>
									<input type="text" name="primer-nombre">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Segundo Nombre</label><br>
									<input type="text" name="segundo-nombre">
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="row centrar">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Primer Apellido</label><br>
									<input type="text" name="primer-apellido">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Segundo Apellido</label><br>
									<input type="text" name="segundo-apellido">
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="row centrar">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Tipo documento</label><br>
									<div id="typesDoc" style="display: inline-flex;">
										<input type="radio" name="documento" value="">
										<div>C.C</div>
										<input type="radio" name="documento" value="">
										<div>NIT</div>
										<input type="radio" name="documento" value=""> <div>C.E</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Número</label><br>
									<input type="number" name="numerodoc">
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
							<div class="row centrar">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Fecha de nacimiento</label><br>
									<input type="date" id="edad">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 seccion">
									<label>Genero</label><br>
									<IMG SRC="views/img/mujer.png"></IMG>
									<input type="radio" name="genero">
									<IMG SRC="views/img/hombre.png"></IMG>
									<input type="radio" name="genero">
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 centrar seccion">
								<label>correo</label><br>
								<input type="email" name="">
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 centrar seccion">
								<input type="checkbox" name="">
								<label onclick="modal();" id="aceptar_TyC">Aceptar terminos y condiciones</label>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="row centrar">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 seccion" id="btn-registrarse">
									<a href="?class=IndexHome&method=registroExitoso">
										<input type="text" name="Registrarse" value="Registrarse">
									</a>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 seccion" id="btn-cancelar">
									<a href="?class=IndexHome&method=index"><input type="text" name="Cancelar" value="Cancelar"></a>
								</div>
							</div>
						</div>

					</form>
					<div class="fix ocultar" id="tyc">
						<div class="center">
							<div class="container-fluid" id="pag">
								<div class="row">
									<div class="col-lg-12">
										<div class="container-fluid">
											<div class="row">

												<div class="col-lg-2" STYLE="">
													<IMG SRC="views/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
												</div>

												<div class="col-lg-10" STYLE="background-color: WHITE;">
													<div class="row" id="busc">
														<div class="col-lg-2" STYLE="">
														</div>
														<div class="col-lg-4" STYLE="">
															<div class="input-group" id="bus">
																
															</div>
														</div>
														<div class="col-lg-2" id="inicio-personal">
															
														</div>
														<div class="col-lg-4" id="inicio-usuarios">
															
														</div>
													</div>
													<div class="row" style="height: 15%;">
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<main id="formulario_registrousuario">
									<div class="btn-cerrar">
										<img src="views/img/cancelar.png" id="cerrar" onclick="modal();">
									</div>
									<h3>TERMINOS Y CONDICIONES</h3>
									<p>
										<ol>
											<li>es simplemente un texto ficticio de la industria de impresión y composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500</li>
											<li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</li>
											<li>
												Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
											</li>
										</ol>
									</p>
								</main>
							</div>
						</div>
					</div>
				</main>	
			</div>
		</div>
	</div>
	<script type="text/javascript" src="views/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="views/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="views/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
	<script type="text/javascript" src="views/Utilitarios/Utilitarios/tether.min.js"></script>
	<script type="text/javascript" src="views/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="views/js/generales.js"></script>
</body>
</html>