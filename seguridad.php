<?php 

	if (!isset($_SESSION['nombre'])) {
		echo "
			<script>
				alert('Debe loguearse para poder ingresar...');
				window.location.replace('index.html');
			</script>
		";
	}

 ?>