<?php 
include "../inc/cabecera_pages.inc";
include "../inc/config.inc";

session_start();
$id_usuario = $_SESSION["id_usuario"];
$id_registro = $_SESSION["id_registro"];

$peticion = "SELECT * FROM pedidos WHERE id_usuario = '$id_usuario' && num_pedido = '$id_registro' ";
$resultado = mysqli_query($conexion, $peticion);

?>
<div id="menu" class="hidden-xs">
    <div class="container">
      <div class="row">
        <div id="sello" class="col-xs-2">
          <img class="img-responsive" src="../img/sello.png">
        </div>
        <div class="menu-item col-xs-2">
        <a href="menu_user.php#nuevo-titulo"><p>Novedades</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="menu_user.php#nuevo-titulo"><p>La cocina</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="menu_user.php#nuevo-titulo"><p>Menu</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="menu_user.php#nuevo-titulo"><p>Ordenar online</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="menu_user.php#contacto"><p>Contacto</p></a>
        </div>
      </div>
    </div>
  </div>
  <div id="nuevo-titulo">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-center">Mi Orden</h1>
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
  <div id="carrito-detalle">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Carrito de compras</h1>
          <?php 
             if(mysqli_num_rows($resultado)){
              $total = 0; 
              while ($fila_pedido = mysqli_fetch_array($resultado)){
                $id_producto_pedido = $fila_pedido["id_producto"];
                $peticion_producto = "SELECT * FROM productos WHERE id_producto = '$id_producto_pedido' ";
                $resultado_producto = mysqli_query($conexion, $peticion_producto);
                while ($fila_producto_pedido = mysqli_fetch_array($resultado_producto)) {
                  $total = $total + $fila_producto_pedido["precio"];
                  echo '
              <div class="row">
                  <div class="col-xs-10 col-lg-push-2"><h1><a href="eliminar_producto_pedido.php?id_producto='.$fila_producto_pedido["id_producto"].'"><span style="color: #ef4135;" class="fa fa-minus-circle">&nbsp&nbsp</span></a>'.$fila_producto_pedido["descripcion"].'</h1></div>
                  <div class="col-xs-2"><h1>'.$fila_producto_pedido["precio"].'.00</h1></div>
              </div>
              ';
            }
          }
           echo'
            <div class="row">
                <div class="col-xs-10"><h1 class="text-right">Total: $</h1></div>
                <div class="col-xs-2"><h1>'.$total.'.00</h1></div>
            </div>
            ';
          ?>
        </div>
      </div>
    </div>
  </div>
  <div id="enviar_pedido" style="margin-bottom: 50px; ">
      <div class="container">
          <div class="row">
              <div class="col-xs-9">
              <h1>Especificaciones de la orden:</h1>
                 <form action="detalle_pedido.php" method="POST" name="form_envio_pedido">
                 <input style="width: 100%; height: 50px;" type="text" name="especificaciones">
              </div>
              <div class="col-xs-3">
              <br><br><br>
                  <input class="btn btn-primary btn-lg center-block" type="submit" value="Siguiente">
                  </form>
              </div>
          </div>
      </div>
  </div>
   <?php 
  }
  else{
    echo'
    <div id="carrito-detalle">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="text-center">No hay pedidos =(</h1>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    ';
  }
  ?>
  <?php include "../inc/pie_pages.inc"; ?>
