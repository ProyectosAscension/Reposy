<?php

	$nombre=$_POST['nombreModal'];
	$mail=$_POST['emailModal'];
	$pass= $_POST['password1Modal'];
	$rpass=$_POST['password2Modal'];
	$ap=$_POST['apellidoPModal'];
	$am=$_POST['apellidoMModal'];
	$telefono=$_POST['telefonoModal'];
	$calle=$_POST['calleModal'];;
	$ciudad=$_POST['ciudadModal'];
    $cp=$_POST['cpModal'];
    $colonia=$_POST['coloniaModal'];
    $numero=$_POST['numeroModal'];
	
	$message_adduser='';
	require("conexion.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($conn,"SELECT * FROM cliente WHERE correo='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			
			if($check_mail>0){
				//echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
				//$message_adduser='Existe un email con el mismo nombre ya registrado';
				header("Location: ../");
					echo '<p class="alert alert-success agileits" role="alert">Existe un email con el mismo nombre ya registrado!</p>';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $sqli="INSERT INTO cliente (Nombre, Telefono, Colonia, Calle, Numero, apellido_p, apellido_m, correo, contrasenia, ciudad, codigo_postal) VALUES ('$nombre','$telefono','$colonia','$calle','$numero','$ap','$am','$mail','$pass','$ciudad','$cp')";
                if(mysqli_query($conn,$sqli))
                {
					//$message_adduser='Usted ha sido registrado';
                    //
                    //echo '<script src="../js/msg-agregado.js"></script> ';
					header("Location: ../");
					echo '<p class="alert alert-success agileits" role="alert">Usted ha sido registrado!p>';
					//echo 'agregado';
                    //echo 'INSERT INTO cliente (Nombre, Telefono, Colonia, Calle, Numero, apellido_p, apellido_m, correo, contraseña, ciudad, codigo_postal) VALUES('."$nombre".', '."$telefono".', '."$colonia".', '."$calle".', '."$numero".', '."$ap".', '."$am".', '."$mail".', '."$pass".', '."$ciudad".', '."$cp".')';
                }
                else{
					//echo "Error: " . $sqli . "<br>" . mysqli_error($conn);
					//$message_adduser='Su usuario no ha sido agregado';
					header("Location: ../");
					echo '<p class="alert alert-success agileits" role="alert">Su usuario no ha sido agregado!p>';
                }
                //header("Location: index.php");
				
				
			}
			
		}else{
			//echo 'Las contraseñas son incorrectas';
			//$message_adduser='Las contraselas no coinciden';
			header("Location: ../");
					echo '<p class="alert alert-success agileits" role="alert">Las contraselas no coinciden!p>';
		}

	
?>