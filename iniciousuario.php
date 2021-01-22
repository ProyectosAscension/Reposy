<?php
  session_start();
  require("assets/conexion.php");
	if (!isset($_SESSION['user'])) {
		echo "<script>location.href='index.php'</script>";
	  }
	?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pizzeria Asuncion</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--MENSAJE DE ALERTA PEDIDO-->
	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="#"><img src="images/logopizzeria1.png">Pizzeria Asuncion<span></span></a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="" data-toggle="modal" data-target="#modalActualizarForm" ><img src="images/logoperfil1.png">Perfil</a></li>
						<li><a href="#fh5co-why-us"><img src="images/logopizza1.png">Pizzas y adicionales</a></li>
						<!--<li><a href="#"><img src="images/logobebida1.png">Adicionales</a></li>-->
						<li><a href="orden.php"><img src="images/logopedido1.png">Mi Orden</a></li>
						<li><a href="assets/desconexion.php"><img src="images/logocerrar3.png">Salir</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
<!---->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Las mejores Pizza a su paladar"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Haga su pedido</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pizzas con ingredientes naturales"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Haga su pedido</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pruebe nuestras mejores pizzas"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Haga su pedido</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<!--PEQUEÑOS AVATARES BUENA OPCION-->
	
	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Seleccione su Pizza de preferencia</h2>
					<p>Puede escoger su pizza de nuestras diferentes variedades y sabores que ofrecemos</p>
					<p>Agregue su direccion actual</p>
					<button class="btn btn-primary btn-outline with-arrow btn-sm" href="">Ingresar direccion del pedido</button>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/AsuncionP1.png"  class="img-responsive"></span>
					<h3>Asunción</h3>
					<p>Ingredientes: Chorizo, Champiñones, Cebolla Morada, Jamon</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido1">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/hawainaP1.png" class="img-responsive"></span>
					<h3>Hawaiana</h3>
					<p>Ingredientes: Jamon, Piña</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido2">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/mexicanaP1.png"  class="img-responsive"></span>
					<h3>Mexicana</h3>
					<p>Ingredientes: Jamon, Chorizo, Jalapeño,Jitomate, Cebolla</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido3">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/italianaP1.png"  class="img-responsive"></span>
					<h3>Italiana</h3>
					<p>Ingredientes: Pepperoni, Champiñones,Jamon,Pimiento,Cebolla Morada, Queso</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido4">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/aztecaP1.png"  class="img-responsive"></span>
					<h3>Azteca</h3>
					<p>Ingredientes: Carne Molida, Jamon, Champiñones,Pimiento,Cebolla, Jitomate, Jalapeño</p>
					<p><a  class="btn btn-primary btn-outline with-arrow" id="pedido5">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/PepperoniP1.png"  class="img-responsive"></span>
					<h3>Pepperoni</h3>
					<p>Ingredientes: Pepperoni, Queso</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido6">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<!--ADICIONALES-->
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h3>Seleccione sus Adicionales</h3>
					<p>Puede escoger productos adicionales</p>
					<!--<p>Agregue su direccion actual</p>-->	
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/hamburguesa.png"  class="img-responsive"></span>
					<h3>Hamburguesa</h3>
					<p>Seleccione su hamburguesa de su preferencia</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_hamburguesa">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/hotdog.png"  class="img-responsive"></span>
					<h3>Hotdogs</h3>
					<p>Seleccione su hotdog de su preferencia</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_hotdog">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/alita.png"  class="img-responsive"></span>
					<h3>Alitas</h3>
					<p>Seleccione su orden de alitas de su preferencia</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_alita">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/torta.png"  class="img-responsive"></span>
					<h3>Tortas</h3>
					<p>Seleccione su torta de su preferencia</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_torta">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/papas.png"  class="img-responsive"></span>
					<h3>Papas</h3>
					<p>Seleccione su orden de papas perferencia</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_papas">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<!--BEBIDAS-->
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h3>Seleccione su Bebida</h3>
					<p>Escoga de nuestra seleccion de bebidas que tenemos para usted</p>
					<!--<p>Agregue su direccion actual</p>-->	
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/coca3l.png"  class="img-responsive"></span>
					<h3>Refresco 3L</h3>
					<p>Seleccione el sabor de su refresco</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_refresco3">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/coca2l.png"  class="img-responsive"></span>
					<h3>Refresco 2L</h3>
					<p>Seleccione el sabor de su refresco</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_refresco2">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/coca600.png"  class="img-responsive"></span>
					<h3>Refresco 600 ml</h3>
					<p>Seleccione el sabor de su refresco</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_refresco600">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/agua.png"  class="img-responsive"></span>
					<h3>Agua</h3>
					<p>Seleccione el tamaño de su agua</p>
					<p><a class="btn btn-primary btn-outline with-arrow" id="pedido_agua">Agregar a su pedido<i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
	
	

	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Desarrollado</h3>
				<p>Equipo de desarrollo Dinamyte</p>
				<!--<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">Ingresar <i class="icon-arrow-right"></i></a></p>-->
			</div>
		</div>
	</footer>
	</div>
	<!--
	<script>
		$("#asuncion_pedido").click(function(){
			Swal.fire({
    			title:'Compra Hecha',
    			text:'Su compra se ha agregado a su pedido',
    			icon:'success',
    			confirmButtonText:'Ok',
    			footer:'El tiempo de su pedido sera estimado en la seccion de pedidos',
   				allowOutsideClick:false,
    			allowEscapeKey:false,
    			allowEnterKey:false,
    			stopKeydpwnPropagation:false
    			//toast:true
			});
		});
	</script>
	-->


	<div class="modal fade" id="modalActualizarForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
	  <!--<form action="index.php" method="POST">-->
	  <form action="assets/registrousuario.php" method="POST">
	  
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 font-weight-bold">Registro de Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>

	  <!---->
	  
      <div class="modal-body mx-3">
		  
		<table>
			<tr>
				<td>
				<div class="md-form mb-5">
					<h4 class="modal-title w-100 font-weight-bold">Datos Personales</h4>
				  </div>
				</td>
			</tr>
			<tr >
				<td colspan=2>
		  				<label data-error="wrong" data-success="right" for="orangeForm-name">Nombre: </label>
          				<input type="text" id="nombreModal" name="nombreModal" class="form-control validate" required>
				</td>
			</tr>
		  <!---->
		  <tr>
			  	<td>
						<label data-error="wrong" data-success="right" for="orangeForm-name">Apellido Paterno: </label>
						<input type="text" id="apellidoPModal" name="apellidoPModal" class="form-control validate" required>
				</td>
		  		<td>
		 			 	<label data-error="wrong" data-success="right" for="orangeForm-name">Apellido Materno: </label>
						<input type="text" id="apellidoMModal" name="apellidoMModal" class="form-control validate" required>
				</td>
			</tr>
			<tr>
				<td  colspan=2>
		  <!---->
						<label data-error="wrong" data-success="right" for="orangeForm-name">Telefono: </label>
						<input type="number" id="telefonoModal" name="telefonoModal" class="form-control validate" required>
				</td>
			</tr>
			<tr>
				<td  colspan=2>
						<label data-error="wrong" data-success="right" for="orangeForm-email">Correo electronico: </label>
						<input type="email" id="emailModal" name="emailModal" class="form-control validate" required>
				</td>
			</tr>
			<tr>
				<td >
						<label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña: </label>
						<input type="password" id="password1Modal" name="password1Modal" class="form-control validate" required>
				</td>
				<td >
						<label data-error="wrong" data-success="right" for="orangeForm-pass">Repita Contraseña: </label>
						<input type="password" id="password2Modal" name="password2Modal" class="form-control validate" required>
				</td>
			</tr>
		  <!---->
        
		<!---->
			<tr>
				<td>
						<h4 class="modal-title w-100 font-weight-bold">Datos de domicilio</h4>
				</td>
			</tr>
			<tr>
		 	 	<td>
						<label data-error="wrong" data-success="right" for="orangeForm-name">Ciudad</label>
						<input type="text" id="ciudadModal" name="ciudadModal" class="form-control validate" required>
				</td>
				<td>
			 			<label data-error="wrong" data-success="right" for="orangeForm-name">Codigo Postal</label>
			  			<input type="text" id="cpModal" name="cpModal" class="form-control validate" required>
		  		</td>
			</tr>
			<tr>
				<td>
				  		<label data-error="wrong" data-success="right" for="orangeForm-name">Colonia</label>
				  		<input type="text" id="coloniaModal" name="coloniaModal" class="form-control validate" required>
			  	</td>
			  	<td>
				  		<label data-error="wrong" data-success="right" for="orangeForm-name">Calle</label>
				  		<input type="text" id="calleModal" name="calleModal" class="form-control validate" required>
			  	</td>
			</tr>
			<tr>
				<td>
				<label data-error="wrong" data-success="right" for="orangeForm-name">Numero de casa</label>
				  		<input type="number" id="numeroModal" name="numeroModal" class="form-control validate" required>
				</td>
			</tr>
		  <!---->
	</table>

	  </div>
	  <div class="modal-footer d-flex justify-content-center">
		<button type="submit" class="btn btn-primary btn-outline with-arrow btn-sm" id="agregadoBD">Registrar</button>
	</div>
	</div>
</form>
  </div>
</div>




	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/main.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="js/mensajesproductos.js"></script>
	</body>

</html>

