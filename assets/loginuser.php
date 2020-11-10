<?php
	require 'conexion.php';
	$usuario=$_POST["email-modallogin"];
	$pass=$_POST["password-modallogin"];
	$resultado=mysqli_query($conn,"SELECT * FROM cliente WHERE correo='$usuario' and contrasenia='$pass'");
		$num=mysqli_num_rows($resultado);
	if ($num==1) {
		header("Location: ../iniciousuario.php");
	} else
	{
		echo '<p class="alert alert-success agileits" role="alert" id="agregadoMS">Error al inciar sesion!</p>';
		header("Location: ../");
	}
?>