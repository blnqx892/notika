<?php
session_start();
echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<script  src = "https://cdn.jsdelivr.net/npm/sweetalert2@9"> </script>';
include("../Confi/Conexion.php");
include("../Confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];

if ($bandera=="GuardarCompra") {
	$facturaC = $_POST["facturaec"];
	$fechaC = $_POST["fechaec"];
	$fechaC =explode("/",$fechaC);
	$fechaC=$fechaC[2].'-'.$fechaC[1].'-'.$fechaC[0];
	$productoC = $_POST["productoec"];
	$cantidadC = $_POST["cantidadec"];
    $unitarioC = $_POST["unitarioec"];
    $ProveedorC = $_POST["id_Proveedor"];
    
	$sql = "INSERT INTO compras (fac_Com,fecha_Com,producto_Com,cantidad_Com,unitario_Com,id_Proveedor,estado_Com) VALUES 
	('$facturaC','$fechaC','$productoC','$cantidadC','$unitarioC','$ProveedorC',1)";

	mysqli_query($conexion,$sql) or die ("Error no conectai".mysqli_connect_error());

	//para registrar en el Kardex
	$total=($cantidadC)*($unitarioC);
	$compraKardex="INSERT INTO kardex(factura,tipo,idProducto,cantidad,costo,importe,fecha)
	VALUES('$facturaC','COMPRA','$productoC','$cantidadC','$unitarioC','$total','$fechaC')";
	mysqli_query($conexion,$compraKardex) or die ("Error no conectai".mysqli_connect_error());

	//***********PARA ACTUALIZAR INVENTARIO
	$pwa=mysqli_query($conexion,"SELECT stock FROM invetario WHERE idProducto='$productoC'");             
     if($roww=mysqli_fetch_array($pwa)){
      $stock=$roww['stock'];  
      $new_cant=$roww['stock']+$cantidadC;
      mysqli_query($conexion,"UPDATE invetario SET stock='$new_cant' WHERE idProducto='$ProveedorC'");
       }
                                                  
	//$_SESSION['mensaje'] ="Registro guardado exitosamente";
	//header("location: /Funesi/notika/green-horizotal/RegCompra.php");

	echo "<script language='javascript'>
	$(document).ready(function () {
		setTimeout(function () {
			Swal.fire({
				title: '',
				text: '¡¡¡Registro Exitoso!!!',
				icon: 'success',
				confirmButtonText: 'Aceptar'
			  }).then((result) => {
				if (result.value) {
					window.location='/Funesi/notika/green-horizotal/RegCompra.php';
				}
			  })
		}, 1000);
	});
	
	</script>";
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró una compra')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
}


if ($bandera=="cambio") {

	$sql = "UPDATE compras set estado_Com='".$_POST["valor"]."' where idCompra = '".$_POST["id"]."'";
	$mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
	$aux = 0;
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio una Compra de alta')";
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
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio una Compra de baja')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
	//	$_SESSION['mensaje'] ="Cliente dado de baja exitosamente";

    //////////CAPTURA DATOS PARA BITACORA
   // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
   // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un cliente')";
   // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
	}
	header("location: /Funesi/notika/green-horizotal/ListaCompra.php?tipo=".$aux."");
	
 }
?>