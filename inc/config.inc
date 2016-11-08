<?php
	$servidor="localhost";
	$usuario="bule";
	$contrasena="kedokedo";
	$basededatos="bule";

	$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
	mysqli_set_charset($conexion, "utf8");
?>