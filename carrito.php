<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>gola</h1>
	<table border="2px">
		<tr><td>Marca</td><td>Modelo</td><td>Color</td><td>Cilindraje</td></tr>
		<?php 
			$con=mysqli_connect("localhost","root","","agil");
			$query=mysqli_query($con,"SELECT * FROM buy");

			$row=mysqli_fetch_array($query);

			echo "<tr>
					<td>".$row['Marca']."</td>
					<td>".$row['Modelo']."</td>
					<td>".$row['Color']."</td>
					<td>".$row['Cilindraje']."</td>
				 </tr>"
		 ?>
	</table>
</body>
</html>