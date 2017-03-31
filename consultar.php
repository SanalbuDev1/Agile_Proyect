<?php include 'public/header.php'; ?>
<section class="container-fluid">
		<div class="row">
        <div class="fondo col-md-10">
            <div class="row">
                <div class="marginbot col-md-12">
                    <h1 class="text-center">Consultar</h1>
                    <hr>
                    <a class="btn btn-success col-md-offset-1" href="inventario.php"><i class="fa fa-arrow-left"></i>Volver</a><br><br>
                    <table class="tablevh table table-bordered text-center">
                    	<tr>
                    		<td class="title">ID</td>
                    		<td class="title">Marca</td>
                    		<td class="title">Color</td>
                    		<td class="title">Capacidad</td>
                    		<td class="title">Chasis</td>
                    		<td class="title">Modelo</td>
                    	</tr>
                    <?php 

                    	if($_GET){

                    		$id = $_GET['id'];

                    		$query = mysqli_query($con, "SELECT * FROM vehiculos WHERE id = '$id'");

                    		while($row = mysqli_fetch_array($query)){
                    			echo "  
									<tr>
			                    		<td>".$row['id']."</td>
			                    		<td>".$row['marca']."</td>
			                    		<td>".$row['color']."</td>
			                    		<td>".$row['capacidad']."</td>
			                    		<td>".$row['chasis']."</td>
			                    		<td>".$row['modelo']."</td>
			                    	</tr>
                    			";
                    		}
                    	} 
                    ?>
                   </table>
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