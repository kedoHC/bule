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
    <script src="../js/main.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#formulario-registro").hide();
        $("#login-form").addClass('titulo-activo');
        $("#img-bule-h1, #img-bule-h2, #img-bule-h3, #img-bule-h4, #img-bule-h5, #img-bule-hd1, #img-bule-hd2, #img-bule-hd3, #img-bule-hd4, #img-bule-hd5, #img-bule-b1, #img-bule-b2, #img-bule-b3, #img-bule-b4, #img-bule-b5, #img-bule-v1, #img-bule-v2, #img-bule-v3, #img-bule-v4, #img-bule-v5, #ingredientes-h1, #ingredientes-h2, #ingredientes-h3, #ingredientes-h4, #ingredientes-h5, #producto1, #producto2, #producto3, #producto4, #producto5, #contenedor-hotdogs, #contenedor-bebidas, #contenedor-varios").hide();
         $("#menu-hamburguesa").addClass("menu-alimentos-activo");
        
      });
      $("#registro-form").click(function(){
        $("#formulario-login").hide();
        $("#formulario-registro").show();
        $("#registro-form").addClass('titulo-activo');
        $("#login-form").removeClass('titulo-activo');
      });
      $("#login-form").click(function(){
        $("#formulario-registro").hide();
        $("#formulario-login").show();
        $("#login-form").addClass('titulo-activo');
        $("#registro-form").removeClass('titulo-activo');
      });
      $("#bule-h0").mouseover(function(){
        $("#img-bule-h1, #ingredientes-h1, #img-bule-h2, #ingredientes-h2, #img-bule-h3, #ingredientes-h3, #img-bule-h4, #ingredientes-h4, #img-bule-h5, #ingredientes-h5, #producto1, #producto2, #producto3, #producto4, #producto5").hide();
        $("#img-bule-h0, #ingredientes-h0, #producto0").show();
      });
      $("#bule-h1").mouseover(function(){
         $("#img-bule-h0, #ingredientes-h0, #img-bule-h2, #ingredientes-h2, #img-bule-h3, #ingredientes-h3, #img-bule-h4, #ingredientes-h4, #img-bule-h5, #ingredientes-h5, #producto0, #producto2, #producto3, #producto4, #producto5").hide();
        $("#img-bule-h1, #ingredientes-h1, #producto1").show();
      });
       $("#bule-h2").mouseover(function(){
         $("#img-bule-h0, #ingredientes-h0, #img-bule-h1, #ingredientes-h1, #img-bule-h3, #ingredientes-h3, #img-bule-h4, #ingredientes-h4, #img-bule-h5, #ingredientes-h5, #producto0, #producto1, #producto3, #producto4, #producto5").hide();
        $("#img-bule-h2, #ingredientes-h2, #producto2").show();
      });
        $("#bule-h3").mouseover(function(){
         $("#img-bule-h0, #ingredientes-h0, #img-bule-h1, #ingredientes-h1, #img-bule-h2, #ingredientes-h2, #img-bule-h4, #ingredientes-h4, #img-bule-h5, #ingredientes-h5, #producto0, #producto1, #producto2, #producto4, #producto5").hide();
        $("#img-bule-h3, #ingredientes-h3, #producto3").show();
      });
        $("#bule-h4").mouseover(function(){
         $("#img-bule-h0, #ingredientes-h0, #img-bule-h1, #ingredientes-h1, #img-bule-h2, #ingredientes-h2, #img-bule-h3, #ingredientes-h3, #img-bule-h5, #ingredientes-h5, #producto0, #producto1, #producto2, #producto3, #producto5").hide();
        $("#img-bule-h4, #ingredientes-h4, #producto4").show();
      });
         $("#bule-h5").mouseover(function(){
         $("#img-bule-h0, #ingredientes-h0, #img-bule-h1, #ingredientes-h1, #img-bule-h2, #ingredientes-h2, #img-bule-h3, #ingredientes-h3, #img-bule-h4, #ingredientes-h4, #producto0, #producto1, #producto2, #producto3, #producto4").hide();
        $("#img-bule-h5, #ingredientes-h5, #producto5").show();
      });
         $("#bule-hd0").mouseover(function(){
        $("#img-bule-hd1, #ingredientes-hd1, #img-bule-hd2, #ingredientes-hd2, #img-bule-hd3, #ingredientes-hd3, #img-bule-hd4, #ingredientes-hd4, #img-bule-hd5, #ingredientes-hd5, #producto1hd, #producto2hd, #producto3hd, #producto4hd, #producto5hd").hide();
        $("#img-bule-hd0, #ingredientes-hd0, #producto0hd").show();
      });
         $("#bule-hd1").mouseover(function(){
        $("#img-bule-hd0, #ingredientes-hd0, #img-bule-hd2, #ingredientes-hd2, #img-bule-hd3, #ingredientes-hd3, #img-bule-hd4, #ingredientes-hd4, #img-bule-hd5, #ingredientes-hd5, #producto0hd, #producto2hd, #producto3hd, #producto4hd, #producto5hd").hide();
        $("#img-bule-hd1, #ingredientes-hd1, #producto1hd").show();
      });
         $("#bule-hd2").mouseover(function(){
        $("#img-bule-hd0, #ingredientes-hd0, #img-bule-hd1, #ingredientes-hd1, #img-bule-hd3, #ingredientes-hd3, #img-bule-hd4, #ingredientes-hd4, #img-bule-hd5, #ingredientes-hd5, #producto0hd, #producto1hd, #producto3hd, #producto4hd, #producto5hd").hide();
        $("#img-bule-hd2, #ingredientes-hd2, #producto2hd").show();
      });
          $("#bule-hd3").mouseover(function(){
        $("#img-bule-hd0, #ingredientes-hd0, #img-bule-hd1, #ingredientes-hd1, #img-bule-hd2, #ingredientes-hd2, #img-bule-hd4, #ingredientes-hd4, #img-bule-hd5, #ingredientes-hd5, #producto0hd, #producto2hd, #producto1hd, #producto4hd, #producto5hd").hide();
        $("#img-bule-hd3, #ingredientes-hd3, #producto3hd").show();
      });
           $("#bule-hd4").mouseover(function(){
        $("#img-bule-hd0, #ingredientes-hd0, #img-bule-hd1, #ingredientes-hd1, #img-bule-hd3, #ingredientes-hd3, #img-bule-hd2, #ingredientes-hd2, #img-bule-hd5, #ingredientes-hd5, #producto0hd, #producto2hd, #producto3hd, #producto1hd, #producto5hd").hide();
        $("#img-bule-hd4, #ingredientes-hd4, #producto4hd").show();
      });
            $("#bule-hd5").mouseover(function(){
        $("#img-bule-hd0, #ingredientes-hd0, #img-bule-hd1, #ingredientes-hd1, #img-bule-hd3, #ingredientes-hd3, #img-bule-hd2, #ingredientes-hd2, #img-bule-hd4, #ingredientes-hd4, #producto0hd, #producto2hd, #producto3hd, #producto4hd, #producto1hd").hide();
        $("#img-bule-hd5, #ingredientes-hd5, #producto5hd").show();
      });



             $("#bule-b0").mouseover(function(){
        $("#img-bule-b1, #ingredientes-b1, #img-bule-b2, #ingredientes-b2, #img-bule-b3, #ingredientes-b3, #img-bule-b4, #ingredientes-b4, #img-bule-b5, #ingredientes-b5, #producto1b, #producto2b, #producto3b, #producto4b, #producto5b").hide();
        $("#img-bule-b0, #ingredientes-b0, #producto0b").show();
      });
         $("#bule-b1").mouseover(function(){
        $("#img-bule-b0, #ingredientes-b0, #img-bule-b2, #ingredientes-b2, #img-bule-b3, #ingredientes-b3, #img-bule-b4, #ingredientes-b4, #img-bule-b5, #ingredientes-b5, #producto0b, #producto2b, #producto3b, #producto4b, #producto5b").hide();
        $("#img-bule-b1, #ingredientes-b1, #producto1b").show();
      });
         $("#bule-b2").mouseover(function(){
        $("#img-bule-b0, #ingredientes-b0, #img-bule-b1, #ingredientes-b1, #img-bule-b3, #ingredientes-b3, #img-bule-b4, #ingredientes-b4, #img-bule-b5, #ingredientes-b5, #producto0b, #producto1b, #producto3b, #producto4b, #producto5b").hide();
        $("#img-bule-b2, #ingredientes-b2, #producto2b").show();
      });
          $("#bule-b3").mouseover(function(){
        $("#img-bule-b0, #ingredientes-b0, #img-bule-b1, #ingredientes-b1, #img-bule-b2, #ingredientes-b2, #img-bule-b4, #ingredientes-b4, #img-bule-b5, #ingredientes-b5, #producto0b, #producto2b, #producto1b, #producto4b, #producto5b").hide();
        $("#img-bule-b3, #ingredientes-b3, #producto3b").show();
      });
           $("#bule-b4").mouseover(function(){
        $("#img-bule-b0, #ingredientes-b0, #img-bule-b1, #ingredientes-b1, #img-bule-b3, #ingredientes-b3, #img-bule-b2, #ingredientes-b2, #img-bule-b5, #ingredientes-b5, #producto0b, #producto2b, #producto3b, #producto1b, #producto5b").hide();
        $("#img-bule-b4, #ingredientes-b4, #producto4b").show();
      });
            $("#bule-b5").mouseover(function(){
        $("#img-bule-b0, #ingredientes-b0, #img-bule-b1, #ingredientes-b1, #img-bule-b3, #ingredientes-b3, #img-bule-b2, #ingredientes-b2, #img-bule-b4, #ingredientes-b4, #producto0b, #producto2b, #producto3b, #producto4b, #producto1b").hide();
        $("#img-bule-b5, #ingredientes-b5, #producto5b").show();
      });

             $("#bule-v0").mouseover(function(){
        $("#img-bule-v1, #ingredientes-v1, #img-bule-v2, #ingredientes-v2, #img-bule-v3, #ingredientes-v3, #img-bule-v4, #ingredientes-v4, #img-bule-v5, #ingredientes-v5, #producto1v, #producto2v, #producto3v, #producto4v, #producto5v").hide();
        $("#img-bule-v0, #ingredientes-v0, #producto0v").show();
      });
         $("#bule-v1").mouseover(function(){
        $("#img-bule-v0, #ingredientes-v0, #img-bule-v2, #ingredientes-v2, #img-bule-v3, #ingredientes-v3, #img-bule-v4, #ingredientes-v4, #img-bule-v5, #ingredientes-v5, #producto0v, #producto2v, #producto3v, #producto4v, #producto5v").hide();
        $("#img-bule-v1, #ingredientes-v1, #producto1v").show();
      });
         $("#bule-v2").mouseover(function(){
        $("#img-bule-v0, #ingredientes-v0, #img-bule-v1, #ingredientes-v1, #img-bule-v3, #ingredientes-v3, #img-bule-v4, #ingredientes-v4, #img-bule-v5, #ingredientes-v5, #producto0v, #producto1v, #producto3v, #producto4v, #producto5v").hide();
        $("#img-bule-v2, #ingredientes-v2, #producto2v").show();
      });
          $("#bule-v3").mouseover(function(){
        $("#img-bule-v0, #ingredientes-v0, #img-bule-v1, #ingredientes-v1, #img-bule-v2, #ingredientes-v2, #img-bule-v4, #ingredientes-v4, #img-bule-v5, #ingredientes-v5, #producto0v, #producto2v, #producto1v, #producto4v, #producto5v").hide();
        $("#img-bule-v3, #ingredientes-v3, #producto3v").show();
      });
           $("#bule-v4").mouseover(function(){
        $("#img-bule-v0, #ingredientes-v0, #img-bule-v1, #ingredientes-v1, #img-bule-v3, #ingredientes-v3, #img-bule-v2, #ingredientes-v2, #img-bule-v5, #ingredientes-v5, #producto0v, #producto2v, #producto3v, #producto1v, #producto5v").hide();
        $("#img-bule-v4, #ingredientes-v4, #producto4v").show();
      });
            $("#bule-v5").mouseover(function(){
        $("#img-bule-v0, #ingredientes-v0, #img-bule-v1, #ingredientes-v1, #img-bule-v3, #ingredientes-v3, #img-bule-v2, #ingredientes-v2, #img-bule-v4, #ingredientes-v4, #producto0v, #producto2v, #producto3v, #producto4v, #producto1v").hide();
        $("#img-bule-v5, #ingredientes-v5, #producto5v").show();
      });
         
         
         $("#menu-hamburguesa").click(function(){
            $("#contenedor-hotdogs, #contenedor-bebidas, #contenedor-varios").hide();
            $("#contenedor-hamburguesas").show();
            $("#menu-hamburguesa").addClass("menu-alimentos-activo");
             $("#menu-hotdogs").removeClass("menu-alimentos-activo");
             $("#menu-bebidas").removeClass("menu-alimentos-activo");
             $("#menu-varios").removeClass("menu-alimentos-activo");
         });
         $("#menu-hotdogs").click(function(){
            $("#contenedor-hamburguesas, #contenedor-bebidas, #contenedor-varios, #ingredientes-hd1, #ingredientes-hd2, #ingredientes-hd3, #ingredientes-hd4, #ingredientes-hd5,  #producto1hd, #producto2hd, #producto3hd, #producto4hd, #producto5hd").hide();
            $("#contenedor-hotdogs").show();
            $("#menu-hotdogs").addClass("menu-alimentos-activo");
            $("#menu-hamburguesa").removeClass("menu-alimentos-activo");
             $("#menu-bebidas").removeClass("menu-alimentos-activo");
             $("#menu-varios").removeClass("menu-alimentos-activo");
         });
         $("#menu-bebidas").click(function(){
            $("#contenedor-hamburguesas, #contenedor-hotdogs, #contenedor-varios, #ingredientes-b1, #ingredientes-b2, #ingredientes-b3, #ingredientes-b4, #ingredientes-b5,  #producto1b, #producto2b, #producto3b, #producto4b, #producto5b").hide();
            $("#contenedor-bebidas").show();
            $("#menu-bebidas").addClass("menu-alimentos-activo");
            $("#menu-hamburguesa").removeClass("menu-alimentos-activo");
            $("#menu-hotdogs").removeClass("menu-alimentos-activo");
            $("#menu-varios").removeClass("menu-alimentos-activo");

         });
         $("#menu-varios").click(function(){
            $("#contenedor-hamburguesas, #contenedor-bebidas, #contenedor-hotdogs, #ingredientes-v1, #ingredientes-v2, #ingredientes-v3, #ingredientes-v4, #ingredientes-v5,  #producto1v, #producto2v, #producto3v, #producto4v, #producto5v").hide();
            $("#contenedor-varios").show();
             $("#menu-varios").addClass("menu-alimentos-activo");
            $("#menu-hamburguesa").removeClass("menu-alimentos-activo");
            $("#menu-hotdogs").removeClass("menu-alimentos-activo");
            $("#menu-bebidas").removeClass("menu-alimentos-activo");
         });
    </script>
    
  </body>
</html>