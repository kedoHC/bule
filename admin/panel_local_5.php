<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Matriz - pedidos online</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include "../inc/config.inc"; 

		$peticion = "SELECT * FROM pedidos WHERE sucursal = 5 ";
		$resultado = mysqli_query($conexion, $peticion);
		?>
			<div id="ordenes_sucursal">
			    <div class="container">
			    	<div class="row">
			            <div class="col-xs-1"><h1>#</h1></div>
			            <div class="col-xs-2"><h1>Productos</h1></div>
			            <div class="col-xs-1"><h1>User</h1></div>
			            <div class="col-xs-1"><h1>Hora</h1></div>
			            <div class="col-xs-1"><h1>Fecha</h1></div>
			            <div class="col-xs-1"><h1>Dir</h1></div>
			            <div class="col-xs-1"><h1>CP</h1></div>
			            <div class="col-xs-1"><h1>tel</h1></div>
			            <div class="col-xs-2"><h1>Espe 	</h1></div>
			            <div class="col-xs-1"><h1>Total</h1></div>
			        </div>
			        <?php
			        while ($fila = mysqli_fetch_array($resultado)) {
					echo'
			        <div class="row">
			            <div class="col-xs-1"><p>'.$fila["num_pedido"].'</p></div>
			            ';
			            $id_producto_orden = $fila["id_producto"];
			            $peticion_producto = "SELECT descripcion FROM productos WHERE id_producto = '$id_producto_orden' ";
			            $resultado_producto = mysqli_query($conexion, $peticion_producto);
			            while($fila_producto = mysqli_fetch_array($resultado_producto)){
			            	echo'
			            		<div style="color: red;" class="col-xs-2"><p>'.$fila_producto["descripcion"].'</p></div>	
			            	';
			            }
			            echo'
			            <div class="col-xs-1"><p>'.$fila["nombre_cliente"].'</p></div>
			            <div class="col-xs-1"><p>'.$fila["hora"].'</p></div>
			            <div class="col-xs-1"><p>'.$fila["fecha"].'</p></div>
			            <div class="col-xs-1"><p>'.$fila["direccion"].'</p></div>
			            <div class="col-xs-1"><p>'.$fila["codigo_postal"].'</p></div>
			            <div class="col-xs-1"><p>'.$fila["telefono"].'</p></div>
			            <div class="col-xs-2"><p>'.$fila["especificacion"].'</p></div>
			            <div class="col-xs-1"><p>'.$fila["total"].'</p></div>
			        </div>
			        ';
			    	}
			    	?>
			    </div>
			</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
