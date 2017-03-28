<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		if ($_POST) {
			$name     = $_POST['name'];
			$password = $_POST['password'];
			$lastname = $_POST['lastname'];
			$email    = $_POST['email'];
			$city     = $_POST['city'];
			$address  = $_POST['address'];

			if ($name != "" && $password != "" && $email!= "" && $city!= "" && $address!= "") {
				
				$con = mysqli_connect("localhost","root","","Agil");
				$query = mysqli_query($con , "INSERT INTO agilt VALUES('$name','$password','$lastname','$email','$city','$address','')");
				if ($query) {
					echo "<script>
							alert('Se registró correctamente ');
							window.location.replace('index.php');
						  </script>";
				}else{
					echo "<script>
							alert('Ocurrió algún problema');
							window.location.replace('registro.html');
						  </script>";
				}

			}else{
				echo "no entre";
			}
		}

	 ?>
	
</body>
</html>