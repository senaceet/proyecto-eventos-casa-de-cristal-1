<html>
	<head>
		<title>
			Editar evento
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="Assets/img/icon.ico" />

		<!--link rel="stylesheet" type="text/css" href="Assets/Utilitarios/bootstrap-4.0.0/css/bootstrap.min.css"-->
		<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/fontawesome-5.13.0/css/all.css">
		<link rel="stylesheet" type="text/css" href="Assets/Utilitarios/datetimepicker/jquery.datetimepicker.css">
		<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="Assets/css/administrador.css">
		<link rel="stylesheet" type="text/css" href="Assets/css/administrador_eliminar_editar.css">

	</head>
	<body>
		<!-- Modal -->
		<div class="modal fade accionEvento" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onclick="">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Importante</h5>
				<button type="button" class="close accionEvento" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				...
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary accionEvento" data-dismiss="modal" onclick="">Cerrar</button>
				<!--button type="button" class="btn btn-primary">Save changes</button-->
				</div>
			</div>
			</div>
		</div>
		<!-----------------------   FIN MODAL  ------------------------------------>
		<div class="center">
			<div class="container-fluid" id="pag">
				<div class="row">
					<div class="col-lg-12">
						<div class="container-fluid">
							<div class="row">

								<div class="col-lg-2" STYLE="">
									<a href="?class=administrador&method=index">
										<IMG SRC="Assets/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
									</a>
								</div>

								<div class="col-lg-10" STYLE="background-color: WHITE;">
									<div class="row" id="busc">
										<div class="col-lg-3" STYLE="margin:auto;text-align:center;">
										</div>
										<div class="col-lg-4" STYLE="margin:auto;text-align:center;">
											<div class="input-group" id="bus">
												<input type="text" class="form-control" placeholder="BUSCADOR">
												<div class="input-group-append">
													<button class="btn btn-outline-secondary" type="button">IR</button>
												</div>
											</div>
										</div>
										<div class="col-lg-1" id="inicio-personal">

										</div>
										<div class="col-lg-4" id="inicio-usuarios">
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="usuario-arriba">
												<p><?php echo $_SESSION['UserAutenticate']->NOMBRE; ?></p>
												<img src="Assets/img/silueta-de-multiplesusuarios.png">
											</div>
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="usuario-arriba1">
												<p>cerrar sesion</p>
												<label class="switch">
													<input type="checkbox" onclick="cerrarSesion();">
													<span class="slider round"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<main>
					<?php 
						$ResponseGetEventos = parent::getEvento($_GET['tipo_de_evento']);
					?>
						<div class="row">
							<div class="col-lg-12">
								<div class="row" id="event_2">
									<div class="col-lg-12" STYLE="">
										<div style="text-align: center; margin-top: 5%;">
											<h2>Editar Evento <?php echo $ResponseGetEventos->TIPO_DE_EVENTO; ?></h2>
											<div class="row pt-4">
												<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1 mt-4" >
												</div>
												<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-4" >
													<img src="Files/img/<?php echo $ResponseGetEventos->IMAGEN; ?>" style=" width: 200px; height: 200px; opacity: 90%;">												
												</div>
												<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4" id="">
													<form method="POST" enctype="multipart/form-data" action="?class=Eventos&method=edit_store">
														<div class="row sombra">
															<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 margen-abajo">
																<label for="nombreEvento">
																	NOMBRE EVENTO 
																</label>
																<br>
																<input type="text" name="nombreEvento"  id="nombreEvento" placeholder="0" value="<?php echo $ResponseGetEventos->TIPO_DE_EVENTO; ?>" required>
															</div>
															<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center margen-abajo">
																<label for="imagen">
																	Imagen
																</label>
																<br>
																<input type="file" name="imagen"  id="imagen">
															</div>
															<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center margen-abajo">
																<input type="hidden" name="idEvento"  id="idEvento" value="<?php echo $ResponseGetEventos->ID_EVENTO; ?>">
															</div>
															<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center margen-abajo">
																<input type="hidden" name="tipoImagenActual"  id="tipoImagenActual" value="<?php echo $ResponseGetEventos->TIPO_IMAGEN; ?>">
															</div>
															<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center margen-abajo">
																<input type="hidden" name="imagenActual"  id="imagenActual" value="<?php echo $ResponseGetEventos->IMAGEN; ?>">
															</div>
														</div>
														<div class="row mt-4">
															<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 pt-4">
															</div>
															<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 pt-4">
																<button type="submit" class="btn azul" id="crear-evento">Actualizar</button>
															</div>
															<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 pt-4">
																<a class="btn rojo" href="?class=Eventos&method=index">
																	volver
																</a>
															</div>
															<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 pt-4">
															</div>
														</div>
													</form>
												</div>
												<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1 mt-4" >
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;">
												<div class="row">
													<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
														<a href="?class=administrador&method=indexPaquetes">
															<img src="Assets/img/izquierda.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
														<a href="?class=administrador&method=index">
															<img src="Assets/img/casa.png">
														</a>
													</div>
													<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">		
													</div>
												</div>
											</div>
										</>
									</div>
								</div>
							</div>
						</div>

				</main>
			</div>
		</div>
	<script type="text/javascript" src="Assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="Assets/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/tether.min.js"></script>
	<script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Assets/Utilitarios/Utilitarios/jquery.maskMoney.js"></script>
	<script type="text/javascript" src="Assets/Utilitarios/datetimepicker/jquery.datetimepicker.full.min.js"></script>
	<script type="text/javascript" src="Assets/js/generales.js"></script>
</body>
</html>