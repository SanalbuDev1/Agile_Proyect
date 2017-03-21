<?php include "conexionbd.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agil_Proyect</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/chat.js"></script>
</head>
<body>
<?php session_start(); ?>

	<section class="container-fluid">
		<div class="row">
        <div class="galeria col-md-10">
			<section class="owl-carousel owl-theme galeria">
				<img src="imgs/car1.jpg" height="670px" width="1150px">
				<img src="imgs/car2.jpg" height="670px" width="1150px">
				<img src="imgs/car3.jpg" height="670px" width="1150px">
			</section>
            <div class="login">
                <h4>We can work together <br>
                    <span></span>
                </h4>
                <h1>Proyecto Agil</h1>
                <button id="iniciar">Sign in</button>
                <section id="modal">
                    <article>
                        <button id="close" class="btn">&times;</button>
                        <form method="post">
                            <span id="logo2"></span>
                            <h3>Sign In</h3>
                            <input class="write" name="name" type="text" placeholder="Nickname"><br>
                            <input class="write" name="password" type="password" placeholder="Password"><br><a href="registro.html">Sing up here.</a>
                            <input class="send" type="submit">
                        </form>
                        <?php
                            
                            if($_POST){

                                $name          = mysqli_real_escape_string($con, $_POST['name']);
                                $password      = mysqli_real_escape_string($con, $_POST['password']);

                                if($name != "" && $password != ""){

                                    $query = mysqli_query($con, "SELECT name, password FROM agilt WHERE name = '$name' AND password = '$password'");

                                    if(mysqli_num_rows($query) > 0 ){

                                        $row = mysqli_fetch_array($query);

                                        // Variable tipo session //
                                        session_start();
                                        $_SESSION['nombre'] = $row['name']." ".$row['lastname'];
                                        header("location: carrito.html");
                                    }

                                    else {
                                        echo "<script>alert('Usurio o clave incorrecta');</script>";
                                    }
                                } else {
                                    echo "<script>alert('Hay campos vacios');</script>";
                                }

                            }
                    ?>
                    </article>
                </section>
            </div>
        </div>
			<script src="js/jquery-3.1.1.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script>
				$(document).ready(function(){
                    $('#modal').hide();
                    $('#modal article').hide();

                    // //************************//

                    $('#iniciar').click(function(event){
                    $('#modal').fadeIn('slow', function(){
                    $('#modal article').show();
                    $('#modal article').animate({top: '0px'}, 500);
                        });
                    });

                    // ********************** //

                    $('#modal article button').click(function(event){
                    $('#modal article').animate({top: '-1000px'}, 
                    500, function(){
                    $(this).hide();
                    $('#modal').fadeOut('slow');
                            });
                        });
                    });

                    //************************//
					$('.owl-carousel').owlCarousel({
						autoplay:true,
					    loop:true,
					    nav: true,
					    items:1
					});
			</script>
			<div class="asd col-sm-6 col-md-2">
			<div class="icon">
                <span id="icon"></span>
            </div>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="exte panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-user-circle"></i>Usuarios</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel2 panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <i class="fa fa-plus-circle"></i><a href="http://www.jquery2dotnet.com">Nuevo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-search-plus"></i><a href="http://www.jquery2dotnet.com">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-pencil"></i><a href="http://www.jquery2dotnet.com">Modificar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-eraser"></i><a href="http://www.jquery2dotnet.com">Eliminar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
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
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-user-o"></i>Conductores</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
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
        </div>
		</div>
	</section>

  	<script src="js/bootstrap.min.js"></script>
</body>
</html>