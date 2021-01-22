<?php
	/*function agregardatos(){
		require 'assets/registrousuario.php';
		if(!empty($message_adduser))
		{
			//echo '<script src="js/msg-agregado.js"></script>';

		}
	}*/
	if(isset($_GET['msgi']))
	{
		//echo "<script src='js/errorLogin.js'></script>";
		$val=$_GET['msgi'];
		if($val==1)
		{
			//echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
			//echo "<script src='js/errorLogin.js'></script>";
		}
	}
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pizzeria Asuncion</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
|	-->
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="#"><img src="images/logopizzeria1.png">Pizzeria Asuncion<span></span></a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="" data-toggle="modal" data-target="#modalLoginForm" ><img src="images/logoinicio1.png">Iniciar</a></li>
						<!--<li><a href="services.html"><img src="images/logopizza1.png">Pizzas</a></li>
						<li><a href="pricing.html"><img src="images/logobebida1.png">Adicionales</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li class="cta"><a href="#">Get started</a></li>-->
					</ul>
				</nav>
			</div>
		</div>
	</header>
	

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Las mejores Pizza a su paladar"</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#modalLoginForm">Ordene ya</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pizzas con ingredientes naturales"</h2>
		   					<p><a href="#" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#modalLoginForm">Ordene ya</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pruebe nuestras mejores pizzas"</h2>
		   					<p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalLoginForm">Ordene ya</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<!-- BOTON ACCION LOGIN MODAL EJEMPLO --NO UTILIZAR--
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div>
-->
<!-- BOTON ACCION REGISTRO MODAL EJEMPLO --NO UTILIZAR--
<div class="text-center">
	<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
	  Modal Register Form</a>
  </div>
-->
	<!--PEQUEÑOS AVATARES BUENA OPCION-->
	<!--
	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Why Choose Us</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/30.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
					<h3>Strategy</h3>
					<p>Ingredientes:</p>
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/18.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
					<h3>Explore</h3>
					<p>Ingredientes:</p>
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="images/27.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
					<h3>Expertise</h3>
					<p>Ingredientes:</p>
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
	-->
	<!--COMENTARIO UNICO CON BOTON-->
	<!--
	<div class="fh5co-section-with-image">
		
		<img src="images/image_1.jpg" alt="" class="img-responsive">
		<div class="fh5co-box animate-box">
			<h2>Forward Thinking</h2>
			<p>Ingredientes:</p>
			<p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started <i class="icon-arrow-right"></i></a></p>
		</div>
		
	</div>
	-->
	<!--COMENTARIOS - BUENA OPCION-->
	<!--
	<div id="fh5co-testimonial" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Happy Clients</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4 text-center item-block">
					<blockquote>
						<p>&ldquo; She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of. &rdquo;</p>
						<p><span class="fh5co-author"><cite>Jason Davidson</cite></span><i class="icon twitter-color icon-twitter pull-right"></i></p>

					</blockquote>
				</div>
				<div class="col-md-4 text-center item-block">
					<blockquote>
						<p>&ldquo; Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. She had a last view back on the skyline of her hometown Bookmarksgrove, the headline of. &rdquo;</p>
						<p><span class="fh5co-author"><cite>Kyle Smith</cite></span><i class="icon googleplus-color icon-google-plus pull-right"></i></p>
					</blockquote>
				</div>
				<div class="col-md-4 text-center item-block">
						
					<blockquote>
						<p>&ldquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. S	he had a last view back on the skyline of her hometown Bookmarksgrove. &rdquo;</p>
						<p><span class="fh5co-author"><cite>Rick Cook</cite></span><i class="icon facebook-color icon-facebook pull-right"></i></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	-->
	<!--TIRA DE IMAGENES ANIMADAS-->
	<!--
	<div id="fh5co-grid-products" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Awesome Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
		</div>

		
		<div class="col-1">
			<a href="#" class="item-grid one" style="background-image: url(images/image_4.jpg)">
				<div class="v-align">
					<div class="v-align-middle">
						<span class="icon"><img src="images/9.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
						<h3 class="title">Geographical App</h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
			</a>
			<a href="#" class="item-grid three" style="background-image: url(images/image_3.jpg)">
				<div class="v-align">
					<div class="v-align-middle">
						<span class="icon"><img src="images/18.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
						<h3 class="title">Communication App</h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
			</a>
		</div>
		<div class="col-2">
			<a href="#" class="item-grid two" style="background-image: url(images/image_2.jpg)">
				<div class="v-align">
					<div class="v-align-middle">
						<span class="icon"><img src="images/27.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
						<h3 class="title">Golf Club Tracker</h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
			</a>
			
		</div>
		
		
	</div>
	-->
	<!--TIRA DE IMAGENES NO ANIMADAS-->
	<!--
	<div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Latest <em>from</em> Blog</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a class="fh5co-entry" href="#">
						<figure>
						<img src="images/image_1.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3>We Create Awesome Free Templates</h3>
							<span class="fh5co-date">June 8, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="fh5co-entry" href="#">
						<figure>
						<img src="images/image_2.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3>Handcrafted Using CSS3 &amp; HTML5</h3>
							<span class="fh5co-date">June 8, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="fh5co-entry" href="#">
						<figure>
						<img src="images/image_3.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3>We Try To Update The Site Everyday</h3>
							<span class="fh5co-date">June 8, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</a>
				</div>
				<div class="col-md-12 text-center">
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">View More Posts <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>	
	</div>
	-->
<!--BOTON DE AYUDA-->
<!--
	<div class="fh5co-cta" style="background-image: url(images/image_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>We Try To Update The Site Everyday</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>
-->

	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Desarrollado</h3>
				<p>Equipo de desarrollo Dinamyte</p>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">Ingresar <i class="icon-arrow-right"></i></a></p>
			</div>
			<!--
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Our Services</h3>
				<ul class="float">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Branding &amp; Identity</a></li>
					<li><a href="#">Free HTML5</a></li>
					<li><a href="#">HandCrafted Templates</a></li>
				</ul>
				<ul class="float">
					<li><a href="#">Free Bootstrap Template</a></li>
					<li><a href="#">Free HTML5 Template</a></li>
					<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
					<li><a href="#">HandCrafted Templates</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Colored Icons by <a href="https://dribbble.com/TrinhHo" target="_blank">Trinh Ho</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p>	
			</div>
					-->
			
		</div>
	</footer>
	</div>
<!--LOGIN MODAL-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ingrese sus datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form action="assets/loginuser.php" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="defaultForm-email">Correo electronico:</label>
          <input type="email" id="email-modallogin" name="email-modallogin" class="form-control validate" required>
        </div>
        <div class="md-form mb-4">
		  <label data-error="wrong" data-success="right" for="defaultForm-pass">Contraseña:</label>
          <input type="password" id="password-modallogin" name="password-modallogin" class="form-control validate" required>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
		<button class="btn btn-primary btn-outline with-arrow btn-sm" id="boton-modallogin" >Ingresar</button>
		<label>¿No tiene una cuenta?, Cree una <a data-toggle="modal" data-target="#modalRegisterForm">aqui</a></label>
	  </div>
	</form>
    </div>
  </div>
</div>
<!--REGISTRO  MODAL-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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



	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="js/msgagregado.js"></script>
	</body>
</html>

