<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];

if ($bandera=="GuardarCliente") {
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

	$_SESSION['mensaje'] ="Registro guardado exitosamente";
	header("location: /Funesi/notika/green-horizotal/RegCliente.php");
}

if ($bandera=="EditarCliente") {
	$nombresE = $_POST["nombresed"];
	$apellidosE = $_POST["apellidosed"];
	$direccionE = $_POST["direccioned"];
	$telefonoE = $_POST["telefonoed"];
	$fechaE = $_POST["fechaed"];
	$fechaE =explode("/",$fechaE);
	$fechaE=$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0];
	$bene1E = $_POST["bene1ed"];
	$bene2E = $_POST["bene2ed"];
	$bene3E = $_POST["bene3ed"];
	$idcliente = $_POST["idcliente"];
	$sql = "UPDATE cliente set nombre_cli='$nombresE',apellidos_Cli='$apellidosE',direccion_cli='$direccionE',telefono_Cli='$telefonoE',ben1_Cli='$bene1E',ben2_Cli='$bene2E',ben3_Cli='$bene3E',fecha_Cli='$fechaE' where idCliente ='$idcliente'";

	mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
	
	header("location: /Funesi/notika/green-horizotal/ListaCliente.php");
}
?>