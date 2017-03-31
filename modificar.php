<?php include 'public/header.php'; ?>
<?php 

    if($_GET){

        $id = $_GET['id'];

        $consulta = mysqli_query($con, "SELECT * FROM vehiculos WHERE id = '$id'");

        $row = mysqli_fetch_array($consulta);
    }
 ?>
<section class="container-fluid">
		<div class="row">
        <div class="fondo col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Modificar</h1>
                    <hr>
                    <a class="btn btn-success col-md-offset-1" href="inventario.php"><i class="fa fa-arrow-left"></i>Volver</a><br><br>
                    <form class="col-md-offset-3 col-md-6" method="post">
                    	<h3 class="text-center">Modificar un auto</h3><br>
                    	<i class="fa fa-address-card"></i><label>Marca</label>
                    	<input value="<?php echo $row['marca'] ?>" type="text" name="marca" class="form-control" placeholder="Ejemplo: Mazda, chevrolet" required>
                    	<i class="fa fa-eyedropper"></i><label>Color</label>
                    	<input value="<?php echo $row['marca'] ?>" type="color" name="color" class="form-control" required>
                    	<i class="fa fa-user-circle"></i><label>Capacidad</label>
                    	<input value="<?php echo $row['capacidad'] ?>" type="number" min="1" max="4" name="capacidad" class="form-control" placeholder="Ejemplo: 2,4" required>
                    	<i class="fa fa-car"></i><label>Chasis</label>
                    	<input value="<?php echo $row['chasis'] ?>" type="text" name="chasis" class="form-control" placeholder="Ejemplo: 12548796" required>
                    	<i class="fa fa-calendar"></i><label>Modelo</label>
                    	<input value="<?php echo $row['chasis'] ?>" type="number" name="modelo" class="form-control" placeholder="Ejemplo: 2016-2015-2017" required><br>
                    	<input type="submit" class="btn btn-success col-md-offset-2">
                    	<input type="reset" value="Reiniciar" class="btn btn-danger col-md-offset-3">
                    </form>
                    <?php

                    	if($_POST){

                    		$marca     = $_POST['marca'];
                    		$color     = $_POST['color'];
                    		$capacidad = $_POST['capacidad'];
                    		$chasis    = $_POST['chasis'];
                    		$modelo    = $_POST['modelo'];

                    		$con = mysqli_connect('localhost','root','','agil');

                    		$actualizar = mysqli_query($con, "UPDATE vehiculos SET marca = '$marca', color = '$color', capacidad = '$capacidad', chasis = '$chasis', modelo = '$modelo' WHERE id = $id");

                    		if($actualizar){

                    			echo "<script>

                    					alert('Se modificaron los campos con exito');
                    					window.location.replace('inventario.php');

                    				</script>";
                    		} else {
                    			echo "<script>

                    					alert('Ocurrió un inconveniente');

                    				</script> ";
                    		}
                    	}

                    ?>
                </div>
            </div>
        </div>
			<div class="asd col-sm-6 col-md-2">
			<div class="icon">
                <span id="icon"></span>
            </div>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href=""><i class="fa fa-home"></i>Inicio</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href=""><i class="icon fa fa-user-o"></i>Usuarios</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-car"></i>Vehiculos</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <i class="fa fa-database"></i><a href="inventario.php">Inventario</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-folder-open-o"></i><a href="carrito.html">Catálogo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-id-card-o"></i><a href="detalles.php">Detalles</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="maps.html"><i class="fa fa-hand-o-down"></i>Where we are?</a>
                        </h4>
                    </div>
                </div>
            </div>
            <i class="redes fa fa-facebook fa-2x"></i>
            <i class="redes fa fa-twitter fa-2x"></i>
            <i class="redes fa fa-instagram fa-2x"></i>
            <br>
            <div class="usuario">
                <h4>El usuario ingresado es:</h4>
                <li id="perr"><i class="icon fa fa-user-o"></i><?php echo $_SESSION['nombre'];?></li><br>
                <a class="closese" href="cerrar_sesion.php"><i class="icon fa fa-window-close-o"></i>Cerrar Session</a>
            </div>
        </div>
		</div>
	</section>

<?php include 'public/footer.php'; ?>