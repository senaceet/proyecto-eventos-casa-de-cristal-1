<html>
<head>
	<title>
		Login Empleado
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
			<div class="row">
				<main id="login-usuario">
					<div class="btn-cerrar">
						<a href="?class=IndexHome&method=index">
							<img src="views/img/cancelar.png" id="cerrar">
						</a>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="inicio-de-sesion">
						<h2>Iniciar sesion Empleados</h2>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="contenedor-login">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte-10">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<label>Usuario</label><br>
								<input type="text" name="primer-nombre">
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte-10">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<label>Contraseña</label><br>
								<input type="password" name="password">
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="olvide">
							<a href="?class=IndexHome&method=restablecerContrasena">
								Olvide mi contraseña
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="parte-11">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="btn-registrarse">
								<a href="?class=IndexHome&method=empleados">
									<input type="text" name="Ingresar" value="Ingresar">
								</a>
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