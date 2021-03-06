<html>
<head>
	<title>
		Administrador factura ver
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
	<link rel="stylesheet" type="text/css" href="views/css/administrador.css">
	<link rel="stylesheet" type="text/css" href="views/css/facturas.css">

</head>
<body>
	<div class="center">
		<div class="container-fluid" id="pag">
			<div class="row">
				<div class="col-lg-12">

					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-2" STYLE="">
								<a href="?class=IndexHome&method=administrador">
									<IMG SRC="views/img/Logo.jpeg" STYLE="width: 90%;"></IMG>
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
											<p>Admin Eventos</p>
											<img src="views/img/silueta-de-multiplesusuarios.png">
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
					$Response = parent::getPedido($_GET['ID_PEDIDO']);
				?>
				<!---------------------------------- INICIO FACTURA -------------------------------------------------------------->
				<h1>FACTURA <?php echo $Response->ID_FACTURA ?></h1>
				<section class="seccionVerFactura cajon">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-5 pr-5 contenedorVerFactura">
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center mt-4">
								<img src="views/img/Logo.jpeg" class="logo_factura">
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center mt-4">
								<div class="logo_factura"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center mt-2" id="columna-1">
								<div class="row">
									<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-2 text-right">
										<i class="far fa-keyboard"></i>
									</div>
									<div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-2 text-left">Eventos casa de cristal</div>
								</div>
								<div class="row">
									<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-2 text-right">
										<i class="fas fa-phone"></i>
									</div>
									<div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-2 text-left">305 766 93 71</div>
								</div>
								<div class="row">
									<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-2 text-right">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-2 text-left">eventoscasadecristal@gmail.com</div>
								</div>
								<div class="row">
									<div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 mt-2 text-right">
										<i class="fas fa-desktop"></i>
									</div>
									<div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 mt-2 text-left">www.eventoscasadecristal.com</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 text-center"></div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center mt-2" id="columna-2">
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-right">
										<label>Nombres</label>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-center">
										<input class="boton_desabilitado" type="text" name="" placeholder="Nombres" disabled="disabled" value="<?php echo $Response->NOMBRES ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-right">
										<label>Apellidos</label>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-center">
										<input class="boton_desabilitado" type="text" name="" placeholder="Apellidos" disabled="disabled" value="<?php echo $Response->APELLIDOS ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-right">
										<label>Documento</label>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-center">
										<input class="boton_desabilitado" type="text" name="" placeholder="Documento" disabled="disabled" value="<?php echo $Response->DOCUMENTO ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-right">
										<label>Tipo factura</label>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 text-center">
										<input class="boton_desabilitado" type="text" name="" placeholder="Tipo factura" disabled="disabled" value="<?php echo $Response->TIPO_DE_FACTURA ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
											<label>Pedido</label>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
											<input class="boton_desabilitado text-center" type="text" name="" placeholder="Pedido" disabled="disabled" value="<?php echo $Response->ID_PEDIDO ?>">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
											<label>Factura</label>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
											<input class="boton_desabilitado text-center" type="text" name="" placeholder="Factura" disabled="disabled" value="<?php echo $Response->ID_FACTURA ?>">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3 mb-3">
								<div class="body-datos-factura">
									<div class="row">
										<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">PAQUETE</div>
										<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">DESCRIPCION</div>
										<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">CANTIDAD</div>
										<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">VALOR</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5 text-center">
								<div class="body-factura p-3">
									<table id="tabla_factura" class="">
										<thead> 
										</thead>
										<tbody id="body_tabla_factura">  
									    <?php   foreach (parent::getPaquete($_GET['ID_PAQUETE']) as $responseGetPaquete){ ?>
					                        <tr>
					                        	<td><?php echo $responseGetPaquete->TIPO_DE_PAQUETE ?></td>
					                            <td><?php echo $responseGetPaquete->INVENTARIO ?></td>
					                            <td>No aplica</td>
					                            <td>No aplica</td>
					                        </tr>
						                <?php   } ?>  
										</tbody>
									</table>

									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
											<div class="spacio-vacio"></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-2 text-center"></div>
										<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-2 text-right">
											<b>Precio sin iva:</b>
										</div>
										<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-2 text-left">
											<input class="boton_desabilitado" type="text" name="" placeholder="Precio sin iva" disabled="disabled" value="<?php echo $Response->VALOR_PAQUETE ?>">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-2 text-center"></div>
										<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-2 text-right">
											<b>Iva:</b>
										</div>
										<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-2 text-left">
											<input class="boton_desabilitado" type="text" name="" placeholder="Precio sin iva" disabled="disabled" value="<?php echo $Response->IVA ?>">
										</div>
									</div>
									<div class="fin-body-factura">
										<div class="row">

											<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-2 text-center"></div>
											<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-2 text-right">
												<b>Total:</b>
											</div>
											<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-2 text-left">
												<input class="boton_desabilitado" type="text" name="" placeholder="total" disabled="disabled" value="<?php echo $Response->VALOR_TOTAL ?>">
											</div>
										</div>
									</div>
									<div class="row">

											<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-2 text-center"></div>
											<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-2 text-right">
												<b>Fecha:</b>
											</div>
											<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mb-2 text-left">
												<input class="boton_desabilitado" type="text" name="" placeholder="FECHA" disabled="disabled" value="<?php echo $Response->FECHA_PEDIDO ?>">
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4 text-center"></div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4 pr-0 text-right estado-pedido">
							Estado:
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4 pl-0 text-left estado-pedido">
							<input class="boton_desabilitado" type="text" name="" placeholder="total" disabled="disabled" value="<?php echo $Response->ESTADO ?>">
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4 text-center"></div>
					</div>
				</section>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
						<a href="?class=IndexHome&method=administradorPedidos">
							<button class="btn rojo">Volver</button>
						</a>
					</div>
				</div>
				<!---------------------------------- FIN FACTURA -------------------------------------------------------------->
				<!--h1>FACTURA</h1>
				<br>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="cajon">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label>Cliente</label>
								<input type="text" name="cliente" value="" placeholder="digite su nombre">
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<label>Documento</label>
								<input class="medio" type="number" name="documento">
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 centrar">
								<select>
									<option>Seleccione un valor</option>
								</select>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label># Factura</label>
								<input class="medio" type="number" name="factura">
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label>NIT</label>
								<input type="number" name="number" value="" placeholder="">
							</div>
							<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
								<img src="views/img/email.png">
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
								<p class="centrar" >eventoscasadecristal@gmail.com</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
								<p class="centrar" >Calle 69 # 20-36, Bogota</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte">
						<h5>Detalle de factura</h5>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="det-factura">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label>Fecha</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Cantidad</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<label>Interes</label>
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<label># Pedido</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Subtotal</label>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<input type="date" name="fecha" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Cantidad" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<input type="number" name="Interes" value="" >
							</div>
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<input type="number" name="Pedido" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Subtotal" value="" >
							</div>
						</div>
					</div>
					<br>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="det-factura">
						<div class="row">
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Abono</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Iva</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<label>Valor parcial</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<label>Valor total</label>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								
							</div>
						</div>

						<div class="row">
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Abono" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="Iva" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
								<input type="number" name="ValorParcial" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								<input type="number" name="ValorTotal" value="" >
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
								
							</div>
						</div>
					</div>
				</div-->
			</main>
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