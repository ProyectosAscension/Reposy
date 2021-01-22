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
    <link rel="stylesheet" href="css/mapa.css">

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
						<li><a href="iniciousuario.php#fh5co-why-us"><img src="images/logopizza1.png">Pizzas y adicionales</a></li>
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
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Agregue su ubicacion</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pizzas con ingredientes naturales"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Agregue su ubicacion</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pruebe nuestras mejores pizzas"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Agregue su ubicacion</a></p>
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
                    <h2>Seleccione su Ubicacion</h2>
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1182.8686954101174!2d-97.67999087186394!3d17.267385836965115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c62f9724188f97%3A0xd7d00807932133c!2sPizzer%C3%ADa%20la%20Asunci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1611308734121!5m2!1ses-419!2smx" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                    </div>
                    <p></p>
                    <a href="#"  class="btn btn-primary btn-outline with-arrow btn-sm">Guardar Ubicacion</a>
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






	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/main.js"></script>
	<!--
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="js/mensajesproductos.js"></script>-->
	</body>

</html>
