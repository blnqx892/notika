<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();


	$duiC = $_POST["dui"];
	$nombresC = $_POST["nombres"];
	$apellidosC = $_POST["apellidos"];
	$direccionC = $_POST["direccion"];
	$telefonoC = $_POST["telefono"];
	$fechaC = $_POST["fecha"];
	$fechaC =explode("/",$fechaC);
	$fechaC=$fechaC[2].'-'.$fechaC[1].'-'.$fechaC[0];
	$bene1C = $_POST["bene1"];
	$bene2C = $_POST["bene2"];
	$bene3C = $_POST["bene3"];
	$sql = "INSERT INTO cliente (Dui_cli,nombre_cli,apellidos_Cli,direccion_cli,telefono_Cli,ben1_Cli,ben2_Cli,ben3_Cli,fecha_Cli) VALUES 
	('$duiC','$nombresC','$apellidosC','$direccionC','$telefonoC','$bene1C','$bene2C','$bene3C','$fechaC')";

	mysqli_query($conexion,$sql) or die ("Error no conectai".mysqli_connect_error());

	#$_SESSION['mensaje'] ="Registro guardado exitosamente";
	header("location: /Funesi/notika/green-horizotal/RegCliente.php");


?>