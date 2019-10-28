<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();

	$nomEmp = $_POST["nomEmp"];
	$dirEmp = $_POST["dirEmp"];
	$telEmp = $_POST["telEmp"];
  $nomRes = $_POST["nomRes"];
	$telRes = $_POST["telRes"];
	$sql = "INSERT INTO proveedor (nomEmp, telEmp, dirEmp, nomRes, telRes, estadoProv) VALUES ('$nomEmp','$telEmp','$dirEmp','$nomRes','$telRes', '1')";

	mysqli_query($conexion,$sql) or die ("Error no conecta".mysqli_connect_error());

	#$_SESSION['mensaje'] ="Registro guardado exitosamente";
	header("location: /Funesi/notika/green-horizotal/RegCliente.php");


?>
