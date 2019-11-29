<?php
session_start();
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
	$sql = "INSERT INTO cliente (Dui_cli,nombre_cli,apellidos_Cli,direccion_cli,telefono_Cli,ben1_Cli,ben2_Cli,ben3_Cli,fecha_Cli,estado_Cli) VALUES 
	('$duiC','$nombresC','$apellidosC','$direccionC','$telefonoC','$bene1C','$bene2C','$bene3C','$fechaC',1)";

	mysqli_query($conexion,$sql) or die ("Error no conectai".mysqli_connect_error());
	echo"
	<script language='javascript'>
	alert('Registro de Cliente Exitoso!!')
	window.location='/Funesi/notika/green-horizotal/RegCliente.php'
	</script>";
//$_SESSION['mensaje'] ="Registro guardado exitosamente";
//header("location: /Funesi/notika/green-horizotal/RegCliente.php");

//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró un cliente')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	
}

if ($bandera=="EditarCliente") {
	$nombresE = $_POST["nombresed"];
	$apellidosE = $_POST["apellidosed"];
	$direccionE = $_POST["direccioned"];
	$telefonoE = $_POST["telefonoed"];
	$bene1E = $_POST["bene1ed"];
	$bene2E = $_POST["bene2ed"];
	$bene3E = $_POST["bene3ed"];
	$idcliente = $_POST["idcliente"];
	$sql = "UPDATE cliente set nombre_cli='$nombresE',apellidos_Cli='$apellidosE',direccion_cli='$direccionE',telefono_Cli='$telefonoE',ben1_Cli='$bene1E',ben2_Cli='$bene2E',ben3_Cli='$bene3E' where idCliente ='$idcliente'";

	mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
	echo"
	<script language='javascript'>
	alert('Registro Editado de Cliente Exitoso!!')
	window.location='/Funesi/notika/green-horizotal/ListaCliente.php'
	</script>";
	//header("location: /Funesi/notika/green-horizotal/ListaCliente.php");
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Edito un cliente')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
}

if ($bandera=="cambio") {

	$sql = "UPDATE cliente set estado_Cli='".$_POST["valor"]."' where idCliente = '".$_POST["id"]."'";
	$mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
	$aux = 0;
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un cliente')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	}else{
		$aux = 1;
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un cliente')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	}
	header("location: /Funesi/notika/green-horizotal/ListaCliente.php?tipo=".$aux."");
	
 }
?>