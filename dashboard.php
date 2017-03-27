<?php include "conexionbd.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agil_Proyect</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/master.css">
    <script src="js/chat.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php session_start(); ?>
	<section class="container-fluid">
		<div class="row">
        <div class="fondo col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">¡Bienvenido!</h1>
                    <hr>
                    <h2 class="text-center">Sus datos son:</h2>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-4">

                        </div>
                         <div class="col-md-7">
                         <?php 

                            if(isset($_SESSION['nombre'])){

                                $name     = $_SESSION['nombre'];

                                $query = mysqli_query($con, "SELECT * FROM agilt WHERE name = '$name' ");

                                while($row = mysqli_fetch_array($query)){
                                    echo $row['name'];
                                    echo $row['lastname'];

                                }
                            }
                        

                          ?>
                            <table border="1" class="difee table">
                               <tr>
                                    <td>Nickname</td>
                                    <td><!--   --></td>
                               </tr>
                                <tr>
                                    <td>Apellido</td>
                                    <td></td>
                               </tr>
                            </table>
                        </div>
                    </div>
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
                            <a data-toggle="collapse" data-parent="#accordion" href=""><i class="fa fa-home"></i>¿Quienes somos?</a>
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
                                        <i class="fa fa-database"></i><a href="inventario.html">Inventario</a>
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

</body>
</html>