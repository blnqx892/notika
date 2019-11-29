<?php
session_start();
include("../Confi/Conexion.php");
$conexion = conectarMysql();


$bandera = $_POST["bandera"];
if ($bandera=="GuardarProveedor") {
	$nomEmp = $_POST["nomEmp"];
	$dirEmp = $_POST["dirEmp"];
	$telEmp = $_POST["telEmp"];
    $nomRes = $_POST["nomRes"];
	$telRes = $_POST["telRes"];
	$sql = "INSERT INTO proveedor (nombre_prov, telefonoResp_prov, direccion_Prov, nombreEmpr, telefEmp,estado_Provee) VALUES
	 ('$nomEmp','$telEmp','$dirEmp','$nomRes','$telRes',1)";

	mysqli_query($conexion,$sql) or die ("Error no conecta".mysqli_connect_error());
	///$_SESSION['mensaje']="Datos Agregados";
	//notaError("¡El nombre ingresado ya ha sido registrado!"); 
	#$_SESSION['mensaje'] ="Registro guardado exitosamente";
	//header("location: /Funesi/notika/green-horizotal/RegProveedor.php");
	echo"
	<script language='javascript'>
	alert('Registro de Proveedor Exitoso!!')
	window.location='/Funesi/notika/green-horizotal/RegProveedor.php'
	</script>";

//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró un proveedor')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
}

if ($bandera=="EditarProveedor") {
	$nombreEmp=$_POST["nombreEmpreC"];
	$direccionEmp= $_POST["direccionEmpreC"];
	$telefonoEmp= $_POST["telEmpreC"];
	$nombreRe= $_POST["nombreResC"];
	$telefonoRe= $_POST["telResC"];
	$idproveedor=$_POST["idproveedor"];
	$sql = "UPDATE proveedor set nombre_prov='$nombreEmp', direccion_Prov='$direccionEmp', telefonoResp_Prov='$telefonoEmp', nombreEmpr='$nombreRe', telefEmp='$telefonoRe' where idProveedor ='$idproveedor'";

	mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD desde editaPro".mysqli_connect_error());
	
	//header("location: /Funesi/notika/green-horizotal/ListaProveedor.php");
	echo"
	<script language='javascript'>
	alert('Registro Editado de Proveedor Exitoso!!')
	window.location='/Funesi/notika/green-horizotal/ListaProveedor.php'
	</script>";

//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Edito un proveedor')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
}

if ($bandera=="cambio") {

	$sql = "UPDATE proveedor set estado_Provee='".$_POST["valor"]."' where idProveedor = '".$_POST["id"]."'";
	$mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
	$aux = 0;
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un proveedor')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	//	$_SESSION['mensaje'] ="Cliente dado de alta exitosamente";

    //////////CAPTURA DATOS PARA BITACORA
   // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
   // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un cliente')";
   // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
	}else{
		$aux = 1;
		//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja un proveedor')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	//	$_SESSION['mensaje'] ="Cliente dado de baja exitosamente";

    //////////CAPTURA DATOS PARA BITACORA
   // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
   // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un cliente')";
   // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
	}
	header("location: /Funesi/notika/green-horizotal/ListaProveedor.php?tipo=".$aux."");
	
 }
?>