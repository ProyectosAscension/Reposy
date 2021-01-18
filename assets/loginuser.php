<?php
	session_start();
	require 'conexion.php';
	$usuario=$_POST["email-modallogin"];
	$pass=$_POST["password-modallogin"];
	$sql=mysqli_query($conn,"SELECT * FROM cliente WHERE correo='$usuario'");
	if($f=mysqli_fetch_assoc($sql))
	{
		if($pass==$f['contrasenia'])
		{
			$_SESSION['id']=$f['id_usuario'];
			$_SESSION['user']=$f['correo'];
			header("Location: ../iniciousuario.php");
		}
		else
		{
			  /*echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'>
			  	Swal.fire({
				title: 'Contraseña Incorrecta',
				text: 'Su contraseña de usuario es Incorrecta',
				icon: 'error',
			
				confirmButtonText: 'Ok',
				//footer:'El tiempo de su pedido sera estimado en la seccion de pedidos',
				allowOutsideClick: false,
				allowEscapeKey: false,
				allowEnterKey: false,
				stopKeydpwnPropagation: false,
				//toast:true
			  });
			  </script>";*/
			//echo "<script>location.href='/loginuser'</script>";
			echo "<script>location.href='../index.php?msgi=1'</script>";
		}
	}
	else
	{
		echo "<script>location.href='../index.php'</script>";	
	}
	/*require 'conexion.php';
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
	}*/
?>
