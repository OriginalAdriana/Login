<?php
	$computadora="localhost";
	$usuario="root";
	$enlace=mysqli_connect($computadora,$usuario);
	mysqli_set_charset($enlace,"utf8");
	$basedatos="legoin";
	mysqli_select_db($enlace, $basedatos);
	$nom=$_GET['nom'];
	$pwd=$_GET['contra'];
	$consulta="SELECT nombre, Contraseña FROM nombre";
	$result=mysqli_query($enlace, $consulta);
	if(($nom=="Nacho"&&$pwd=="Teveo1234*")||($nom=="Adriana"&&$pwd=="Teveo1234*")||($nom=="Jose"&&$pwd=="Teveo1234*")||($nom=="Mar"&&$pwd=="Teveo1234*"))
	{
				
		header("location: principal.html");
		exit;
	}
	else
	{
		echo'
				<script>
					alert("Usuario Inexistente, verifique los datos de registro");
					window.location = "index.html";
				</script>
			';	
	}
	
?>
