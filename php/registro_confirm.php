<?php 
include "../inc/cabecera_pages.inc";
include "../inc/config.inc"; ?>
<div class="parallax-2 hidden-xs"></div>
<?php 
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$codigopostal = $_POST["codigopostal"];
$telefono = $_POST["telefono"];
$user = $_POST["usuario"];
$contra = $_POST["contra"];

/*Verificar que los campos no esten vacios*/
if(empty($user) || empty($contra) || empty($nombre) || empty($direccion) || empty($codigopostal) || empty($telefono)){
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
	exit;
}
/*Verificar nombre de usuario*/
if(!preg_match("/^\S[a-zA-Z\sñáéíóúÁÉÍÓÚñÑ]{2,50}$/",$nombre)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Nombre incorrecto!",
			  text: "Nombre de usuario sin caracters especiales ni numeros.",
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
/*Verificar direccion*/
if(!preg_match("/^\S[a-zA-Z0-9\sñáéíóú,.#ÁÉÍÓÚñÑ]{2,50}$/",$direccion)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Direccion incorrecta!",
			  text: "Caracteres especiales permitidos: ,.# y numeros.",
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
/*Verificar codigo postal*/
if(!preg_match("/^\d{5}$/",$codigopostal)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Codigo postal incorrecto!",
			  text: "Seguir el formato de 5 digitos. ¡Gracias!.",
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
/*Verificar telefono*/
if(!preg_match("/^\d{12,13}$/",$telefono)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Telefono incorrecto!",
			  text: "Seguir el formato de 12 digitos local y 13 digitos para celular. ¡Gracias!.",
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
	exit;
}
/*Verificar contraseña*/
if(!preg_match("/^[a-zA-Z0-9]{8}$/",$contra)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Contraseña incorrecta!",
			  text: "Contraseña de 8 caracteres, sin caracteres especiales, solo numeros y letras sin acentos.",
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
/*Verificar que el usuario y el telefono no existan en la base de datos*/
$peticion = "SELECT email FROM usuarios WHERE email = '$user'";
$resultado = mysqli_query($conexion, $peticion);

if(mysqli_num_rows($resultado)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Email existente!",
			  text: "El email que nos proporcionas ya existe en nuestra base de datos",
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
/*Verificar que el usuario y el telefono no existan en la base de datos*/
$peticion = "SELECT telefono FROM usuarios WHERE telefono = '$telefono'";
$resultado = mysqli_query($conexion, $peticion);

if(mysqli_num_rows($resultado)){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Telefono existente!",
			  text: "El telefono que nos proporcionas ya existe en nuestra base de datos",
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
$contra_user = password_hash($contra,  PASSWORD_DEFAULT, ['cost' => 10]);
$peticion = "INSERT INTO usuarios (id_usuario, nombre, direccion, codigo_postal, telefono, email, contra) VALUES (NULL, '$nombre', '$direccion', '$codigopostal', '$telefono', '$user', '$contra_user');";
$resultado = mysqli_query($conexion, $peticion);

if($resultado){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Registro completo!",
			  text: "Bienvenido, ya puedes ordenar cuando gustes. ¡Gracias!",
			  type: "success",
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
else{
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Registro incompleto!",
			  text: "Error de sistema. Vuelve a intentarlo. ¡Gracias!",
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
?>
