<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	<style>
	body{
		font-family: Arial;
		color: #282828;
	}
	form{
		margin: 50px auto;
		width: 400px;

	}
	form input{
		display: block;
		margin-bottom: 10px;
		width: 200px;

	}
	form input.error{
		border: 2px solid red;
		background-color: rgba(255,0,0,.3);
	}
	form input.valid{
		border:2px solid #2CE414;
		background-color: rgba(0,255,0,0.25);
	}
	div.field{
		position: relative;
		transition: all 1s ease-in;
		}
	span.help-block.form-error{
		background-color: #a00;
		color:#fff;
		position: absolute;
		padding: 4px;
		top: 0px;
		left: 250px;
		width: 414px;	

	}
</style>
	<h1>Login</h1>
	<hr>
	
	<form action="txt/procesar.php" method="post" id="registro">
	<div class="field" ><input type="text"
		 name="name"
		 placeholder="Escriba su usuario"
		 data-validation="length"
		 data-validation-length="min4";
		 ></div>
	<div class="password">
		<input type="password"
		name="edad"
		placeholder="password"
		data-validation="password">
	</div>

	

		 <input type="submit" value="registro">
	</form>

	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>

	<script>
		$(document).ready(function() {
			$.validate({ form: '#registro' , language : es})
		});
	</script>
</body>
</html>