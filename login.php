<?
session_start();
include "config.php";
if (isset($_SESSION['user'])) 
{
	?>
	Hola <? $_SESSION['user'] ?> Ya has iniciado sesion <a href="logout.php">Cerrar sesion</a>
	<?
} else {
	?>
	<table width="300">
			<form method="post" action="logeo.php">
		<tr>
			<td>Usuario:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td><input type="password" name="pass"></td>
		</tr>
			<td><input type="submit" name="enviar" value="Acceder"></td>
			</form>
	</table>
	<?
}
?>