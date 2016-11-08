<?php 
include "../inc/cabecera_pages.inc";
include "../inc/config.inc"; ?>
<div class="parallax-2"></div>
<?php include "../inc/pie_pages.inc"; ?>
<?php 
$user = $_POST["usuario"];
$contra = $_POST["contra"];
/*Verificar que los campos no esten vacios*/
if(empty($user) || empty($contra)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Campos vacios!",
			  text: "Alguno de los campos esta vacio.",
			  type: "error",
			  allowEscapeKey: false,
			  allowOutsideClick: false
			 },
			function (confirmado) {
				if(confirmado){
					window.location.href = 'log_usuario.php';
			}
			});
	</script>
	<?php
}
/*Verificar que el campo de email sea tal*/
if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/",$user)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Usuario incorrecto!",
			  text: "El campo usuario es tu email, estrictamente.",
			  type: "error",
			  allowEscapeKey: false,
			  allowOutsideClick: false
			 },
			function (confirmado) {
				if(confirmado){
					window.location.href = 'log_usuario.php';
			}
			});
	</script>
	<?php	
}
/*Verificar que el usuario este registrado*/
$peticion = "SELECT * FROM usuarios WHERE email = '$user' ";
$resultado = mysqli_query($conexion, $peticion);

if(mysqli_num_rows($resultado)){
	while($fila = mysqli_fetch_array($resultado)){
		if(password_verify($contra, $fila["contra"])){
			session_start();
			$_SESSION["session-usuario"] = 1;
			?>
			<script type="text/javascript">
				swal({
					  title: "¡Bienvenido!",
					  text: "Sistema de pedidos en linea El Bule.",
					  type: "success",
					  allowEscapeKey: false,
					  allowOutsideClick: false
					 },
					function (confirmado) {
						if(confirmado){
							window.location.href = 'pedido_online.php';
					}
					});
			</script>
			<?php
			exit;
		}
		else{
			?>
			<script type="text/javascript">
				swal({
					  title: "¡Login incorrecto!",
					  text: "Alguno de los datos que proporcionaste es incorrecto, favor de verificarlo. ¡Gracias!.",
					  type: "error",
					  allowEscapeKey: false,
					  allowOutsideClick: false
					 },
					function (confirmado) {
						if(confirmado){
							window.location.href = 'log_usuario.php';
					}
					});
			</script>
			<?php
			exit;
		}
	}
}
else{
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Usuario no registrado!",
			  text: "El usuario ingresado no esta en nuestra base de datos.",
			  type: "error",
			  allowEscapeKey: false,
			  allowOutsideClick: false
			 },
			function (confirmado) {
				if(confirmado){
					window.location.href = 'log_usuario.php';
			}
			});
	</script>
	<?php
}
?>
