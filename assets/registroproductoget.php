<?php
    session_start();
    //require conexion.php;
    $dbhost="us-cdbr-east-02.cleardb.com";
    $dbuser="bd14eb2f543610";
    $dbpass="231fc2aa";
    $dbname="heroku_2b5ce0a236f4ba4";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }
    if(isset($_GET["p"]) && isset($_GET["c"]))
    {
        $condicion=$_GET["p"];
        
        //echo "console.log('$condicion')";
        //$micantidad=$_GET["c"];
        if($condicion==1)
        {
            
            $producto=$_GET["Nombre"];
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
			//$total_producto=($cantidad*$precio);
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
			//$sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        
        
        
        
    }
    else
    {
       echo "console.log('Error')";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>LoginUser</title>
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/icomoon.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" href="../css/style.css">

		<script src="../js/modernizr-2.6.2.min.js"></script>
	</head>
    <body>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="../js/productocomprado.js"></script>
	</body>
</html>