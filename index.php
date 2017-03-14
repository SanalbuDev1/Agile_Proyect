<?
session_start();
include "config.php";
if (isset($_SESSION['user']))
{
	?>
	<table width="500" height="400">
		<tr>
			<td><iframe name="iframe" width="280" height="300"></iframe></td>
		</tr>
		<tr>
			<td><input type="text" name="mensaje"/><button type="
			submit" name="enviar">Enviar Mensaje</button>
		</tr>
	</table>
	<?
}else{
	?>
	Debes iniciar sesion para iniciar el chat <a href="login.php">Click Aquí</a>
	<?
}
?>