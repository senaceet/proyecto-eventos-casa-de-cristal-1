<html>
<head>
	<title>
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
	
</head>
<body>
	
	<main>
		<section>
		<?php 

			if (isset($user)) {
				$Respuesta_modal = substr($user->RESPUESTA_MODAL, 0,9);
				$ValorId		 = substr($user->RESPUESTA_MODAL, 9);

				if($Respuesta_modal=="Cliente -"){
					echo "Eliminaste el usuario: <br><br>".$ValorId." ".$user->DESCRIPCION_MODAL;
				}else if($Respuesta_modal=="Empleado"){
					echo "Eliminaste el empleado: <br><br>".$ValorId." - ".$user->DESCRIPCION_MODAL;
				}else if($Respuesta_modal == 'Pedido  -'){
					echo "Actualizaste el pedido: <br><br>".$ValorId." del cliente ".$user->DESCRIPCION_MODAL;
				}else{
					echo "Respuesta no controlada";
				}

			}else{
				echo "Esta variable no está definida";
			}
		
		?>
		</section>
	</main>


	<script type="text/javascript" src="views/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="views/Utilitarios/Utilitarios/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="views/Utilitarios/Utilitarios/dataTables.responsive.min.js" ></script>	
	<script type="text/javascript" src="views/Utilitarios/Utilitarios/tether.min.js"></script>
	<script type="text/javascript" src="views/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="views/js/generales.js"></script>
</body>
</html>