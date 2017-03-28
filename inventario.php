<?php include 'public/header.php'; ?>

	<section class="container-fluid">
		<div class="row">
        <div class="fondo col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Inventario</h1>
                    <hr>
                    <h3 class="text-center">Vehiculos actuales</h3>
                    <button class="col-md-offset-1 btn btn-success btn-default"><i class="fa fa-plus-circle"></i><a class="add" href="">Adicionar</a></button>
                    <table class="tablevh table table-bordered text-center">
                    	<tr>
                    		<td class="title">Marca</td>
                    		<td class="title">Color</td>
                    		<td class="title">Capacidad</td>
                    		<td class="title">CRUD</td>
                    	</tr>
                    	<?php
                    		$query = mysqli_query($con, "SELECT * FROM vehiculos");

                    		while($row = mysqli_fetch_array($query)){
                    			echo "  
									<tr>
			                    		<td>".$row['marca']."</td>
			                    		<td>".$row['color']."</td>
			                    		<td>".$row['capacidad']."</td>
			                    		<td>
											<a href=''><i class='col fa fa-search-plus'></i></a>
											<a href=''><i class='col fa fa-pencil'></i></a>
											<a href=''><i class='col fa fa-eraser'></i></a>
			                    		</td>
			                    	</tr>
                    			";
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