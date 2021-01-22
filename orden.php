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
	<link rel="stylesheet" href="css/tableorden.css">

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
						<li><a href="" data-toggle="modal" data-target="#modalLoginForm" ><img src="images/logoperfil1.png">Perfil</a></li>
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
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Sus Ordenes</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pizzas con ingredientes naturales"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Sus Ordenes</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>"Pruebe nuestras mejores pizzas"</h2>
		   					<p><a href="#fh5co-why-us" class="btn btn-primary btn-lg" >Sus Ordenes</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<!--PEQUEÑOS AVATARES BUENA OPCION-->
	
	<div id="fh5co-why-us" class="animate-box">
	<div class="table-title">
	<h3>Ordenes</h3>
	</div>
	<table class="table-fill">
	<thead>
		<tr>
			<th class="text-left">ID Pedido</th>
			<th class="text-left">Producto</th>
			<th class="text-left">Categoria</th>
			<th class="text-left">Cantidad</th>
			<th class="text-left">Precio</th>
			<th class="text-left">Tamanio</th>
			<th class="text-left">Estatus</th>
			<th class="text-left">Eliminar</th>
		</tr>
	</thead>
	<tbody class="table-hover">
	<?php
	$usuario_n=$_SESSION['user'];
	$cadena="SELECT * FROM pedidos WHERE nombre_usuario='$usuario_n'";
	$dato=mysqli_query($conn,$cadena);

	while($mostrar=mysqli_fetch_array($dato))
	{
		$concatenar=$mostrar['id_pedido'];
	?>
		<tr>
			<td class="text-left"><?php echo $mostrar['id_pedido'] ?></td>
			<td class="text-left"><?php echo $mostrar['producto'] ?></td>
			<td class="text-left"><?php echo $mostrar['categoria'] ?></td>
			<td class="text-left"><?php echo $mostrar['cantidad'] ?></td>
			<td class="text-left"><?php echo $mostrar['precio'] ?></td>
			<td class="text-left"><?php echo $mostrar['tamanio'] ?></td>
			<td class="text-left"><?php echo $mostrar['estatus'] ?></td>
			<td class="text-left">
			<a href=<?php echo "assets/borrarorden.php?o=$concatenar" ?>  class="btn btn-primary btn-outline with-arrow btn-sm">Eliminar</a>
			</td>
		</tr>
	<?php
	}
		?>
	</tbody>
	</table>
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
	<script src="js/borrarpedido1.js"></script>
	-->
	</body>

</html>

