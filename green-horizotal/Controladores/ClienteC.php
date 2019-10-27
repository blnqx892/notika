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
	$sql = "INSERT INTO cliente (DuiCliente, NombreCliente, ApellidoCliente, DireccionCliente, TelCliente, Be1Cliente, Be2Cliente, Be3Cliente, FechaCliente) VALUES ('$duiC','$nombresC','$apellidosC','$direccionC','$telefonoC', '$bene1C','$bene2C','$bene3C','$fechaC')";

	mysqli_query($conexion,$sql) or die ("Error no conecta".mysqli_connect_error());

	#$_SESSION['mensaje'] ="Registro guardado exitosamente";
	header("location: /Funesi/notika/green-horizotal/RegCliente.php");


?>