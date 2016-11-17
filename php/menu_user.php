<?php include "../inc/cabecera_pages.inc"; 
session_start();?>
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
          <h1 class="text-center">Menu</h1>
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
<div id="menu-alimentos">
	<div class="container">
		<div class="row">
			<div id="menu-hamburguesa" class="col-xs-3 menu-alimentos-item">
				<p class="text-center">Hamburguesas</p>
			</div>
			<div id="menu-hotdogs" class="col-xs-3 menu-alimentos-item">
				<p class="text-center">Hotdogs</p>
			</div>
			<div id="menu-bebidas" class="col-xs-3 menu-alimentos-item">
				<p class="text-center">Bebidas</p>
			</div>
			<div id="menu-varios" class="col-xs-3 menu-alimentos-item">
				<p class="text-center">Varios</p>
			</div>
		</div>
	</div>
</div>
<div id="contenedor-hamburguesas">
	<div class="container">
		<div class="col-xs-3">
			<h2 id="bule-h0" class="nombre-producto">DeepBule <span>$60.00</span><span style="font-size: 25px; color: blue;" class="animated flash label-nuevo">  ¡Nuevo!</span></h2>
			<h2 id="bule-h1" class="nombre-producto">MasterMeet <span>$70.00</span></h2>
			<h2 id="bule-h2" class="nombre-producto">La Brava <span>$65.00</span></h2>
			<h2 id="bule-h3" class="nombre-producto">BuleBuilding <span>$60.00</span></h2>
			<h2 id="bule-h4" class="nombre-producto">GreenBurguer <span>$60.00</span></h2>
			<h2 id="bule-h5" class="nombre-producto">BuleX <span>$70.00</span></h2>
		</div>
		<div id="ingredientes" class="col-xs-3">
			<h2 id="ingredientes-h0" class="text-center"><span>DeepBule</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca. </h2>
			<a id="producto0" class="agregarcarrito" href="agregarcarrito.php?id_producto=1"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-h1" class="text-center">Para los amantes de la carne, <span>MasterMeet</span>, una hamburguesa con los mejores cortes de carne, lechuga, tomate y aderezo marca <span>El Bule</span></h2>
			<a id="producto1" class="agregarcarrito" href="agregarcarrito.php?id_producto=2"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-h2" class="text-center">La mejor hamburguesa Tex-Mex del norte del pais: <span>La Brava</span>, es traida para los paladares mas atrevidos del picante y los sabores del norte del pais. Unica en el estado de Guanajuato.</h2>
			<a id="producto2" class="agregarcarrito" href="agregarcarrito.php?id_producto=3"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-h3" class="text-center"><span>BuleBuilding</span>. Una estructura de 3 pisos que rompera tu sentido del gusto: cebolla, tomate, aderezos y champiñones seran los cimientos de este monumento de carne.</h2>
			<a id="producto3" class="agregarcarrito" href="agregarcarrito.php?id_producto=4"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-h4" class="text-center">Porque lo verde siempre es bueno, <span>GreenBurguer</span> una combinación de pollo y carne en perfecta armonia con vegetales frescos. Garantia <span>El Bule</span>.</h2>
			<a id="producto4" class="agregarcarrito" href="agregarcarrito.php?id_producto=5"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-h5" class="text-center"><span>BuleX</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca.</h2>
			<a id="producto5" class="agregarcarrito" href="agregarcarrito.php?id_producto=6"><button class="center-block">Agregar a mi orden</button></a>
		</div>
		<div class="col-xs-6">
			<img id="img-bule-h0" class="img-responsive center-block" src="../img/galeria-1.jpg">
			<img id="img-bule-h1" class="img-responsive center-block" src="../img/galeria-2.jpg">
			<img id="img-bule-h2" class="img-responsive center-block" src="../img/galeria-3.jpeg">
			<img id="img-bule-h3" class="img-responsive center-block" src="../img/galeria-4.jpg">
			<img id="img-bule-h4" class="img-responsive center-block" src="../img/galeria-5.jpg">
			<img id="img-bule-h5" class="img-responsive center-block" src="../img/galeria-6.jpeg">
		</div>
	</div>
</div>
<div id="contenedor-hotdogs">
	<div class="container">
		<div class="col-xs-3">
			<h2 id="bule-hd0" class="nombre-producto">DeepBuleHotDog <span>$40.00</span></h2>
			<h2 id="bule-hd1" class="nombre-producto">MasterHD <span>$40.00</span><span style="font-size: 25px; color: blue;" class="animated flash label-nuevo">  ¡Nuevo!</span></h2>
			<h2 id="bule-hd2" class="nombre-producto">El Barrio <span>$40.00</span></h2>
			<h2 id="bule-hd3" class="nombre-producto">The Bridge <span>$40.00</span></h2>
			<h2 id="bule-hd4" class="nombre-producto">HotGreen <span>$40.00</span></h2>
			<h2 id="bule-hd5" class="nombre-producto">HotDogLeon <span>$40.00</span></h2>
		</div>
		<div id="ingredientes" class="col-xs-3">
			<h2 id="ingredientes-hd0" class="text-center"><span>DeepBuleHotdog</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca. </h2>
			<a id="producto0hd" class="agregarcarrito" href="agregarcarrito.php?id_producto=7"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-hd1" class="text-center">Para los amantes de la carne, <span>MasterHD</span>, una hamburguesa con los mejores cortes de carne, lechuga, tomate y aderezo marca <span>El Bule</span></h2>
			<a id="producto1hd" class="agregarcarrito" href="agregarcarrito.php?id_producto=8"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-hd2" class="text-center">La mejor hamburguesa Tex-Mex del norte del pais: <span>El Barrio</span>, es traida para los paladares mas atrevidos del picante y los sabores del norte del pais. Unica en el estado de Guanajuato.</h2>
			<a id="producto2hd" class="agregarcarrito" href="agregarcarrito.php?id_producto=9"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-hd3" class="text-center"><span>The Bridge</span>. Una estructura de 3 pisos que rompera tu sentido del gusto: cebolla, tomate, aderezos y champiñones seran los cimientos de este monumento de carne.</h2>
			<a id="producto3hd" class="agregarcarrito" href="agregarcarrito.php?id_producto=10"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-hd4" class="text-center">Porque lo verde siempre es bueno, <span>HotGreen</span> una combinación de pollo y carne en perfecta armonia con vegetales frescos. Garantia <span>El Bule</span>.</h2>
			<a id="producto4hd" class="agregarcarrito" href="agregarcarrito.php?id_producto=11"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-hd5" class="text-center"><span>HotDogLeon</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca.</h2>
			<a id="producto5hd" class="agregarcarrito" href="agregarcarrito.php?id_producto=12"><button class="center-block">Agregar a mi orden</button></a>
		</div>
		<div class="col-xs-6">
			<img id="img-bule-hd0" class="img-responsive center-block" src="../img/hot-dog-0.jpg">
			<img id="img-bule-hd1" class="img-responsive center-block" src="../img/hot-dog-1.jpg">
			<img id="img-bule-hd2" class="img-responsive center-block" src="../img/hot-dog-2.jpg">
			<img id="img-bule-hd3" class="img-responsive center-block" src="../img/hot-dog-3.jpg">
			<img id="img-bule-hd4" class="img-responsive center-block" src="../img/hot-dog-4.jpg">
			<img id="img-bule-hd5" class="img-responsive center-block" src="../img/hot-dog-5.jpg">
		</div>
	</div>
</div>
<div id="contenedor-bebidas">
	<div class="container">
		<div class="col-xs-3">
			<h2 id="bule-b0" class="nombre-producto">AguasBule <span>$30.00</span><span style="font-size: 25px; color: blue;" class="animated flash label-nuevo">  ¡Nuevo!</span></h2>
			<h2 id="bule-b1" class="nombre-producto">RefrescoDeRaiz <span>$30.00</span></h2>
			<h2 id="bule-b2" class="nombre-producto">Refresco <span>$30.00</span></h2>
			<h2 id="bule-b3" class="nombre-producto">Jugos <span>$30.00</span></h2>
			<h2 id="bule-b4" class="nombre-producto">CervezaAlemana <span>$30.00</span></h2>
			<h2 id="bule-b5" class="nombre-producto">CervezaNacional <span>$30.00</span></h2>
		</div>
		<div id="ingredientes" class="col-xs-3">
			<h2 id="ingredientes-b0" class="text-center"><span>AguasBule</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca. </h2>
			<a id="producto0b" class="agregarcarrito" href="agregarcarrito.php?id_producto=13"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-b1" class="text-center">Para los amantes de la carne, <span>RefrescoDeRaiz</span>, una hamburguesa con los mejores cortes de carne, lechuga, tomate y aderezo marca <span>El Bule</span></h2>
			<a id="producto1b" class="agregarcarrito" href="agregarcarrito.php?id_producto=14"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-b2" class="text-center">La mejor hamburguesa Tex-Mex del norte del pais: <span>Refresco</span>, es traida para los paladares mas atrevidos del picante y los sabores del norte del pais. Unica en el estado de Guanajuato.</h2>
			<a id="producto2b" class="agregarcarrito" href="agregarcarrito.php?id_producto=15"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-b3" class="text-center"><span>Jugos</span>. Una estructura de 3 pisos que rompera tu sentido del gusto: cebolla, tomate, aderezos y champiñones seran los cimientos de este monumento de carne.</h2>
			<a id="producto3b" class="agregarcarrito" href="agregarcarrito.php?id_producto=16"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-b4" class="text-center">Porque lo verde siempre es bueno, <span>CervezaAlemana</span> una combinación de pollo y carne en perfecta armonia con vegetales frescos. Garantia <span>El Bule</span>.</h2>
			<a id="producto4b" class="agregarcarrito" href="agregarcarrito.php?id_producto=17"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-b5" class="text-center"><span>CervezaNacional</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca.</h2>
			<a id="producto5b" class="agregarcarrito" href="agregarcarrito.php?id_producto=18"><button class="center-block">Agregar a mi orden</button></a>
		</div>
		<div class="col-xs-6">
			<img id="img-bule-b0" class="img-responsive center-block" src="../img/bebidas-0.jpg">
			<img id="img-bule-b1" class="img-responsive center-block" src="../img/bebidas-1.jpg">
			<img id="img-bule-b2" class="img-responsive center-block" src="../img/bebidas-2.jpg">
			<img id="img-bule-b3" class="img-responsive center-block" src="../img/bebidas-3.jpg">
			<img id="img-bule-b4" class="img-responsive center-block" src="../img/bebidas-4.jpg">
			<img id="img-bule-b5" class="img-responsive center-block" src="../img/bebidas-5.jpg">
		</div>
	</div>
</div>
<div id="contenedor-varios">
	<div class="container">
		<div class="col-xs-3">
			<h2 id="bule-v0" class="nombre-producto">PapasBuleCheese <span>$35.00</span></h2>
			<h2 id="bule-v1" class="nombre-producto">PapasEnGajos <span>$35.00</span></h2>
			<h2 id="bule-v2" class="nombre-producto">PapasFrancesas <span>$35.00</span></h2>
			<h2 id="bule-v3" class="nombre-producto">GuacamoleBule <span>$35.00</span></h2>
			<h2 id="bule-v4" class="nombre-producto">NachosLaFiera <span>$35.00</span></h2>
			<h2 id="bule-v5" class="nombre-producto">EnsaladaHouse <span>$35.00</span></h2>
		</div>
		<div id="ingredientes" class="col-xs-3">
			<h2 id="ingredientes-v0" class="text-center"><span>PapasBuleCheese</span> una receta original de El Bule cuenta con los mejores ingredientes: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca. </h2>
			<a id="producto0v" class="agregarcarrito" href="agregarcarrito.php?id_producto=19"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-v1" class="text-center">Para los amantes de la carne, <span>PapasEnGajos</span>, una hamburguesa con los mejores cortes de carne, lechuga, tomate y aderezo marca <span>El Bule</span></h2>
			<a id="producto1v" class="agregarcarrito" href="agregarcarrito.php?id_producto=20"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-v2" class="text-center">La mejor hamburguesa Tex-Mex del norte del pais: <span>PapasFrancesas</span>, es traida para los paladares mas atrevidos del picante y los sabores del norte del pais. Unica en el estado de Guanajuato.</h2>
			<a id="producto2v" class="agregarcarrito" href="agregarcarrito.php?id_producto=21"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-v3" class="text-center"><span>GuacamoleBule</span>. Una estructura de 3 pisos que rompera tu sentido del gusto: cebolla, tomate, aderezos y champiñones seran los cimientos de este monumento de carne.</h2>
			<a id="producto3v" class="agregarcarrito" href="agregarcarrito.php?id_producto=22"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-v4" class="text-center">Porque lo verde siempre es bueno, <span>NachosLaFiera</span> una combinación de pollo y carne en perfecta armonia con vegetales frescos. Garantia <span>El Bule</span>.</h2>
			<a id="producto4v" class="agregarcarrito" href="agregarcarrito.php?id_producto=23"><button class="center-block">Agregar a mi orden</button></a>
			<h2 id="ingredientes-v5" class="text-center"><span>EnsaladaHouse</span> una receta original de El Bule cuenta con los mejoresv: Adereso, carne suprema, lechuga, tomate, cebolla e ingredientes propios de la marca.</h2>
			<a id="producto5v" class="agregarcarrito" href="agregarcarrito.php?id_producto=24"><button class="center-block">Agregar a mi orden</button></a>
		</div>
		<div class="col-xs-6">
			<img id="img-bule-v0" class="img-responsive center-block" src="../img/varios-0.jpg">
			<img id="img-bule-v1" class="img-responsive center-block" src="../img/varios-1.jpg">
			<img id="img-bule-v2" class="img-responsive center-block" src="../img/varios-2.jpg">
			<img id="img-bule-v3" class="img-responsive center-block" src="../img/varios-3.jpg">
			<img id="img-bule-v4" class="img-responsive center-block" src="../img/varios-4.jpg">
			<img id="img-bule-v5" class="img-responsive center-block" src="../img/varios-5.jpg">
		</div>
	</div>
</div>
<?php include "../inc/pie_pages.inc"; ?>
