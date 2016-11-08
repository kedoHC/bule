<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>El Bule</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- ***************************
  ************* Logo *************
  ******************************-->
  <div id="logo" class="hidden-xs">
    <div class="container">
      <div class="row">
        <div class="text-logo-1 col-xs-4 hidden-xs">
          <p>"Las mejores hamburguesas de la ciudad de Leon, Gto"</p>
          <p><span>-GourmetMexico.com</span></p>
        </div>
        <div class="col-xs-4">
          <img class="center-block img-responsive" src="img/logo1.png" width="70%">
        </div>
        <div class="text-logo-2 col-xs-4 hidden-xs">
          <p>"La mejor calidad y el mejor ambiente familiar"</p>
          <p><span>-FastFoodMX.com</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- ***************************
  *********** log movil **********
  ******************************-->
  <div class="parallax-1 visible-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img class="img-responsive center-block" src="img/logo1.png" width="70%">
          <form name="form-login-movil" action="confirm_user.php" method="POST">
          <input class="center-block" type="text" name="usuario" placeholder="Usuario"><br>
          <input class="center-block" type="password" name="contra" placeholder="Contraseña"><br>
           <p class="text-center">Terminos de uso y condiciones</p>
          <input class="center-block" type="submit" value="Ingresar">
          </form>
        </div>
      </div>
    </div>
  </div>
   <!-- ***************************
  ************* Menu *************
  ******************************-->
  <div id="menu" class="hidden-xs">
    <div class="container">
      <div class="row">
        <div id="sello" class="col-xs-2">
          <img class="img-responsive" src="img/sello.png">
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
        <a href="php/log-usuario.php"><p>Ordenar online</p></a>
        </div>
        <div class="menu-item col-xs-2">
        <a href="#"><p>Contacto</p></a>
        </div>
      </div>
    </div>
  </div>







<!-- ***************************
********** Contacto ************
******************************-->
<div id="contacto">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Ubicación y Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <h3>Boulevard Lopez Mateos 77 Col. Esmeralda</h3>
        <h3>Leon Gto. México</h3>
        <h3>1564 725288</h3><br><br>
        <h3>¡Mantengamos el contacto!</h3>
        <h3>Promociones especiales, eventos y mas.</h3>
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <form>
          <input type="email" name="email" placeholder="Correo Electronico">
          </div>
          <div class="col-xs-12 col-md-4">
            <input class="btn btn-default" type="submit" value="Enviar">
        </form>
          </div>
        </div>
      </div>
      <div class="col-xs-6 hidden-xs hidden-sm">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.6698772640275!2d-101.6849433856112!3d21.12572358594589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbf0d21c1fa9d%3A0xd95de12234cb28ee!2sBoulevard+L%C3%B3pez+Mateos+Poniente%2C+Centro%2C+37000+Le%C3%B3n%2C+Gto.!5e0!3m2!1ses-419!2smx!4v1475296703593" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<div id="mapa-movil" class="visible-xs visible-sm">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.6698772640275!2d-101.6849433856112!3d21.12572358594589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbf0d21c1fa9d%3A0xd95de12234cb28ee!2sBoulevard+L%C3%B3pez+Mateos+Poniente%2C+Centro%2C+37000+Le%C3%B3n%2C+Gto.!5e0!3m2!1ses-419!2smx!4v1475296703593" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>   
</div>
<!--************************************
* ********** Pie de pagina *************
* ************************************-->
<div id="pie">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="text-center"><span class="pastry">El Bule  </span><span class="glyphicon glyphicon-copyright-mark"> Todos los derechos reservados.</span></p>
      </div>
    </div>
  </div>
</div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>