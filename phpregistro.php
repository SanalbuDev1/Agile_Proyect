<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		if ($_FILES) {
			
			$nimage    = time();
			$path      = $_FILES['image']['name'];
			$extension = pathinfo($path, PATHINFO_EXTENSION);

			$image     = 'public/imgs/avatars/'.$nimage.'.'.$extension;

			$name     = $_POST['name'];
			$password = $_POST['password'];
			$lastname = $_POST['lastname'];
			$email    = $_POST['email'];
			$city     = $_POST['city'];
			$address  = $_POST['address'];

			if(!empty($_FILES['image']['name'])) {
							move_uploaded_file($_FILES['image']['tmp_name'], $image);
							$sql = "INSERT INTO agilt VALUES ('$name', '$password', '$lastname', '$email','$city','$address', DEFAULT , '$image')";

						}else{
							$sql = "INSERT INTO agilt VALUES ( '$name', '$password', '$lastname', '$email','$city','$address',DEFAULT,'$image')";
			}

			$con = mysqli_connect('localhost','root','','agil');
			if(mysqli_query($con,$sql)){
							$_SESSION['action'] = 'Add';
							echo "<script>location.replace('index.php');</script>";
						} else {
							echo "no se ha añadido";
						}

						mysqli_close($con);
		}

	 ?>
	
</body>
</html>