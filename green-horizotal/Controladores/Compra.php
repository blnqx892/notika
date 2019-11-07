<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];

if ($bandera=="GuardarCompra") {
	$facturaC = $_POST["facturaec"];
	$fechaC = $_POST["fechaec"];
	$fechaC =explode("/",$fechaC);
	$fechaC=$fechaC[2].'-'.$fechaC[1].'-'.$fechaC[0];
	$productoC = $_POST["productoec"];
	$categoriaC = $_POST["cateec"];
	$tipoC = $_POST["tipoec"];
	$cantidadC = $_POST["cantidadec"];
    $unitarioC = $_POST["unitarioec"];
    $ProveedorC = $_POST["id_Proveedor"];
	$sql = "INSERT INTO compras (fac_Com,fecha_Com,producto_Com,cate_Com,tipo_Comp,cantidad_Com,unitario_Com,id_Proveedor,estado_Com) VALUES 
	('$facturaC','$fechaC','$productoC','$categoriaC','$tipoC','$cantidadC','$unitarioC','$ProveedorC',1)";

	mysqli_query($conexion,$sql) or die ("Error no conectai".mysqli_connect_error());

	//$_SESSION['mensaje'] ="Registro guardado exitosamente";
	header("location: /Funesi/notika/green-horizotal/RegCompra.php");
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
	
	header("location: /Funesi/notika/green-horizotal/ListaCliente.php");
}

if ($bandera=="cambio") {

	$sql = "UPDATE compras set estado_Com='".$_POST["valor"]."' where idCompra = '".$_POST["id"]."'";
	$mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
	$aux = 0;
	//	$_SESSION['mensaje'] ="Cliente dado de alta exitosamente";

    //////////CAPTURA DATOS PARA BITACORA
   // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
   // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un cliente')";
   // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
	}else{
		$aux = 1;
	//	$_SESSION['mensaje'] ="Cliente dado de baja exitosamente";

    //////////CAPTURA DATOS PARA BITACORA
   // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
   // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un cliente')";
   // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
	}
	header("location: /Funesi/notika/green-horizotal/ListaCompra.php?tipo=".$aux."");
	
 }
?>