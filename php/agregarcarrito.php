<?php 
include "../inc/config.inc";
session_start();
$_SESSION["cont_productos"] = $_SESSION["cont_productos"] + 1;
$_SESSION["num_productos"] = $_SESSION["cont_productos"];
$id_producto = $_GET["id_producto"];
$id_usuario = $_SESSION["id_usuario"];
$id_registro = $_SESSION["id_registro"];

$peticion = "SELECT precio FROM productos WHERE id_producto = '$id_producto' ";
$resultado = mysqli_query($conexion, $peticion);

while($fila = mysqli_fetch_array($resultado)){
	$precio_producto = $fila["precio"];
}
$peticion_registro = "INSERT INTO pedidos (num_pedido, id_producto, total, id_usuario) VALUES ('$id_registro', '$id_producto', $precio_producto, $id_usuario )";
$resultado_registro = mysqli_query($conexion, $peticion_registro);

?>
<script>
	window.location = "menu_user.php#nuevo-titulo";
</script>