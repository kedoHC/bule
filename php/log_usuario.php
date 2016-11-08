<?php include "../inc/cabecera_pages.inc"; ?>
   <!-- ***************************
  ************* Menu *************
  ******************************-->
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
        <a href="#"><p>Menu</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="#"><p>Ordenar online</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="#"><p>Contacto</p></a>
        </div>
      </div>
    </div>
  </div>
  <!-- ***************************
********** ordenar ************
******************************-->
<div class="parallax-1">
   <div class="container">
    <div class="row">
      <div id="usuario" class="col-xs-12">
       <img class="img-responsive center-block visible-xs" src="../img/logo1.png" width="60%">
        <h1 class="text-center"><span id="login-form">Login</span><span>|</span><span id="registro-form">Registro</span></h1>
        <div id="formulario-login" class="row">
          <div class="col-xs-12">
          <form name="form-usuario" action="user_confirm.php" method="POST">
            <input  class="center-block" type="email" name="usuario" placeholder="Email" required="on"><br>
            <input  class="center-block" type="password" name="contra" placeholder="Contraseña" required="on"><br>
            <input  class="center-block" type="submit" value="Ingresar">
          </form>
          </div>
        </div>
        <div id="formulario-registro" class="row">
          <div class="col-xs-12">
            <form name="form-usuario-registro" action="registro_confirm.php" method="POST">
          <input class="center-block" type="text" name="nombre" placeholder="Nombre completo">
          <input class="center-block" type="text" name="direccion" placeholder="Dirección">
          <input class="center-block" type="text" name="codigopostal" placeholder="Codigo postal">
          <input class="center-block" type="text" name="telefono" placeholder="Telefono">
          <input  class="center-block" type="email" name="usuario" placeholder="Email">
          <input  class="center-block" type="password" name="contra" placeholder="Contraseña">
          <input  class="center-block" type="submit" value="Ingresar">
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "../inc/pie_pages.inc"; ?>