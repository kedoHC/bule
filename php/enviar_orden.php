<?php 
include "../inc/cabecera_pages.inc";
include "../inc/config.inc";

session_start();
$id_usuario = $_SESSION["id_usuario"];
$id_registro = $_SESSION["id_registro"];
$nombre_usuario = $_SESSION["nombre_usuario"];
$direccion_usuario = $_SESSION["direccion_usuario"];
$codigo_postal = $_SESSION["codigo_postal"];
$telefono = $_SESSION["telefono"];
$time = time();
$hora = date("H:i:s", $time);
$fecha = date("Y-m-d ", $time);
$sucursal = 0;

if($codigo_postal >= 37000 && $codigo_postal <= 37199){
	$sucursal = 1;
}
elseif ($codigo_postal >= 37200 && $codigo_postal <= 37299) {
	$sucursal = 2;
}
elseif ($codigo_postal >= 37300 && $codigo_postal <= 37399) {
	$sucursal = 3;
}
elseif ($codigo_postal >= 37400 && $codigo_postal <= 37490) {
	$sucursal = 4;
}
elseif ($codigo_postal >= 37500 && $codigo_postal <= 37590) {
	$sucursal = 5;
}
elseif ($codigo_postal >= 37600 && $codigo_postal <= 37698) {
	$sucursal = 6;
}
$peticion = "UPDATE pedidos SET nombre_cliente = '$nombre_usuario', hora = '$hora', fecha = '$fecha', direccion = '$direccion_usuario', codigo_postal = '$codigo_postal', telefono = '$telefono', sucursal = '$sucursal'  WHERE id_usuario = '$id_usuario' && num_pedido = '$id_registro' ";
$resultado = mysqli_query($conexion, $peticion);

if($resultado){
	?>
	<script type="text/javascript">
		swal({
		  title: "¡Envio en camino!",
		  text: "Tu pedido se encuentra en camino. ¡Gracias!.",
		  type: "success",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = '../index.php';
		}
		});
		session_destroy();
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		swal({
		  title: "¡Error!",
		  text: "Vuelve a intentarlo. ¡Gracias!.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'detalle_pedido.php';
		}
		});
	</script>
	<?php
}
?>
<?php include "../inc/cabecera_pages.inc"; ?>
