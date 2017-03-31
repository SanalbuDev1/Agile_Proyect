<?php 

	include 'public/header.php';

	if($_GET){

		$id = $_GET['id'];

		$delete = mysqli_query($con, "DELETE FROM vehiculos WHERE id = '$id'");

		if($delete){

			echo "<script>

					alert('Se eliminó con exito');
					window.location.replace('inventario.php');

				</script>";
		} else {
			echo "<script>

					alert('Ocurrió un inconveniente');

				</script> ";
		}
	}
 ?>