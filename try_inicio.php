<?php

	include('conexionbd.php');
	
	if($_POST){

		$name     = mysqli_real_escape_string($con, $_POST['name']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		if($name != "" && $password != ""){

			$query = mysqli_query($con, "SELECT name, password FROM agilt WHERE $name = '$name' AND $password = '$password'");

			if(mysqli_num_rows($query) > 0 ){

				$row = mysqli_fetch_array($query);

				// Variable tipo session //
				session_start();
				$_SESSION['nombre'] = $row['name']." ".$row['lastname'];
				header("location: carrito.html");
			}

			else {
				echo "<script>alert('Usurio o clave incorrecta');</script>";
			}
		} else {
			echo "<script>alert('Hay campos vacios');</script>";
		}

	}