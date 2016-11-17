<?php 
include "../inc/config.inc";
session_start();

$id_producto = $_GET["id_producto"];
$id_registro = $_SESSION["id_registro"];

$peticion_numero_filas = "SELECT id_producto, id_usuario FROM pedidos WHERE id_producto = '$id_producto' && num_pedido = '$id_registro' ";
$resultado_numero_filas = mysqli_query($conexion, $peticion_numero_filas);
$contador = 0;
while($fila_numero_filas = mysqli_fetch_array($resultado_numero_filas)){
	$contador = $contador + 1;
}
if($contador > 1){	
	$_SESSION["num_productos"] = $_SESSION["num_productos"] - 1;
	$_SESSION["cont_productos"] = $_SESSION["cont_productos"] - 1;
	$peticion = "DELETE FROM pedidos WHERE id_producto = '$id_producto' && num_pedido = '$id_registro' LIMIT 1 ";
	$resultado = mysqli_query($conexion, $peticion);
}
else{
	$_SESSION["num_productos"] = $_SESSION["num_productos"] - 1;
	$_SESSION["cont_productos"] = $_SESSION["cont_productos"] - 1;
	$peticion = "DELETE FROM pedidos WHERE id_producto = '$id_producto' && num_pedido = '$id_registro' ";
	$resultado = mysqli_query($conexion, $peticion);
}


?>
<script>
	window.location = "micarrito.php#nuevo-titulo";
</script>