<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		if ($_GET) {
			$name = $_GET['name'];
			$password = $_GET['password'];
			$lastname = $_GET['lastname'];
			$email = $_GET['email'];
			$city = $_GET['city'];
			$address = $_GET['address'];

			if ($name != "" && $password != "" && $email!= "" && $city!= "" && $address!= "") {
				
				$con = mysqli_connect("localhost","root","","Agil");
				$query = mysqli_query($con , "INSERT INTO agilt VALUES('$name','$password','$lastname','$email','$city','$address','')");

				if ($query) {
					echo "Se registro correctamente";
				}else{
					echo "No se registro correctamente";
				}

			}else{
				echo "no entre";
			}




		}

	 ?>
	
</body>
</html>