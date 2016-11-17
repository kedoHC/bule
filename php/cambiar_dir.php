<?php 
session_start();
$direccion_nueva = $_POST["direccion"];
$codigopostal_nuevo = $_POST["codigopostal"];

$_SESSION["direccion_usuario"] = $direccion_nueva;
$_SESSION["codigo_postal"] = $codigopostal_nuevo;
?>
<script>
	window.location = "detalle_pedido.php#nuevo-titulo";
</script>