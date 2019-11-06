<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];
if ($bandera=="GuardarProveedor") {
	$nomEmp = $_POST["nomEmp"];
	$dirEmp = $_POST["dirEmp"];
	$telEmp = $_POST["telEmp"];
    $nomRes = $_POST["nomRes"];
	$telRes = $_POST["telRes"];
	$sql = "INSERT INTO proveedor (nombre_prov, telefonoResp_prov, direccion_Prov, nombreEmpr, telefEmp) VALUES
	 ('$nomEmp','$telEmp','$dirEmp','$nomRes','$telRes')";

	mysqli_query($conexion,$sql) or die ("Error no conecta".mysqli_connect_error());

	#$_SESSION['mensaje'] ="Registro guardado exitosamente";
	header("location: /Funesi/notika/green-horizotal/RegProveedor.php");
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
	
	header("location: /Funesi/notika/green-horizotal/ListaProveedor.php");
}
?>