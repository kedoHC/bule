<?php 
include "../inc/cabecera_pages.inc";
include "../inc/config.inc";

session_start();
$especificacion = $_POST["especificaciones"];
$id_usuario = $_SESSION["id_usuario"];
$id_registro = $_SESSION["id_registro"];

$peticion = "UPDATE pedidos SET especificacion = '$especificacion' WHERE id_usuario = '$id_usuario' && num_pedido = '$id_registro' ";
$resultado = mysqli_query($conexion, $peticion);

$peticion_datos_usuario = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
$resultado_datos_usuario = mysqli_query($conexion, $peticion_datos_usuario);


?>
<div id="menu" class="hidden-xs">
    <div class="container">
      <div class="row">
        <div id="sello" class="col-xs-2">
          <img class="img-responsive" src="../img/sello.png">
        </div>
        <div class="menu-item col-xs-2">
        <a href="#"><p>Novedades</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="#"><p>La cocina</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="menu_user.php"><p>Menu</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="log_usuario.php"><p>Ordenar online</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="#"><p>Contacto</p></a>
        </div>
      </div>
    </div>
  </div>
  <div id="nuevo-titulo">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-center">Ultimos detalles</h1>
        </div>
      </div>
    </div>
  </div>
  <div id="carrito">
    <div class="container">
      <div class="row">
        <div class="col-xs-6"></div>
        <div class="col-xs-5 carrito">
            <a href="micarrito.php"><h3 class="text-right" style="color: #215a9e;"><span style="color: #ef4135" class="fa fa-shopping-cart"></span> Mi compra:<span style="color: #ef4135; font-weight: bold;"> <?php echo $_SESSION["num_productos"]; ?> </span><span> bules.</span> ID Pedido: <span style="color: #ef4135; font-weight: bold;"><?php echo $_SESSION["id_registro"]; ?></span></h3></a>
          </div>
          <div class="col-xs-1">
            <a href="salir.php"><h3>Salir</h3></a>
          </div>
      </div>
    </div>
  </div>
  <?php 
    while($fila_datos_usuario = mysqli_fetch_array($resultado_datos_usuario)){
      echo'
        <div id="detalles_pedido">
            <div class="container">
              <h1 class="text-center">Datos del usuario</h1>
              <h3 class="text-center">Información de envio</h3>
                <div class="row">
                    <div class="col-lg-push-2 col-xs-10"><h1><span class="fa fa-user">&nbsp&nbsp</span>'.$fila_datos_usuario["nombre"].'</h1></div>
                </div>
                <div class="row">
                    <div class="col-lg-push-2 col-xs-10"><h1><span class="fa fa-map-marker">&nbsp&nbsp</span>'.$fila_datos_usuario["direccion"].'</h1></div>
                </div>
                <div class="row">
                    <div class="col-lg-push-2 col-xs-3"><h1><span class="fa fa-map-pin">&nbsp&nbsp</span>'.$fila_datos_usuario["codigo_postal"].'</h1></div>
                    <div class="col-lg-push-1 col-xs-3"><h1><span class="fa fa-mobile">&nbsp&nbsp</span>'.$fila_datos_usuario["telefono"].'</h1></div>
                    <div class="col-lg-push-1 col-xs-4"><h1><span class="fa fa-envelope">&nbsp&nbsp</span>'.$fila_datos_usuario["email"].'</h1></div>
                </div>
            </div>
        </div>
      ';  
    }
  ?>
  <div id="envio_cambio">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <button id="btn_cambiar" class="center-block btn btn-primary btn-lg">Cambiar direccion de entrega</button>
              </div>
          </div>
      </div>
  </div>
  <style type="text/css">
    #form_cambiar_dir{
      padding-top: 30px;
      padding-bottom: 30px;
    }
    #form_cambiar_dir input[type="text"]{
     /* width: 200px;
      height: 40px;
      border: none;
      background-color: #eee;
      font-size: 20px;*/
    }
  </style>
  <div id="form_cambiar_dir">
      <div class="container">
      <h3 class="text-center">Este cambio no afecta tu perfil de usuario.</h3>
          <div class="row">
              <div class="col-xs-12 text-center">
                <form action="cambiar_dir.php" method="POST" name="form_cambiar_dir">
                  <input type="text" name="direccion" placeholder="Direccion de envio">
                  <input type="text" name="codigopostal" placeholder="Codigo postal del envio">
                  <input class="btn btn-primary" type="submit" value="Cambiar direccion de entrega">
                </form>
              </div>
          </div>
      </div>
  </div>
  <div id="forma_de_pago">
      <div class="container">
      <h1 class="text-center">Forma de pago</h1>
          <div class="row">
              <div class="col-xs-12 text-center">
                 <form action="enviar_orden.php" method="POST" name="form_enviar_orden">
                  <input type="text" name="nombre_tarjeta" placeholder="Nombre">
                  <input type="text" name="numero_tarjeta" placeholder="Numero de tarjeta" maxlength="16">
                  <input type="text" name="numero_secreto" placeholder="Numero de seguridad">
                  <input type="date" name="fecha_vencimiento" placeholder="DD/MM/YYY">
              </div>
          </div>
          <div style="padding-top: 30px; padding-bottom: 50px;" class="row">
            <div class="col-xs-12">
              <input class="btn btn-primary btn-lg center-block" type="submit" value="Confirmar Pedido">
              </form>
            </div>
          </div>
      </div>
  </div>
  <?php include "../inc/pie_pages.inc"; ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#form_cambiar_dir").hide();
    });
    $("#btn_cambiar").click(function(){
      $("#form_cambiar_dir").toggle();
    });
  </script>