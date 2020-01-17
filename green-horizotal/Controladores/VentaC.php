<?php
session_start();
include("../Confi/Conexion.php");
$conexion=conectarMysql();

$bandera=$_POST["bandera"];

if ($bandera=="GuardarVenta") {
    $fecha=$_POST["fecha"];
	$fecha =explode("/",$fecha);
	$fecha=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
    $numeroV=$_POST["numeroV"];
    $dui=$_POST["dui"];
    $nombres=$_POST["nombres"];
    $apellidos=$_POST["apellidos"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $paquete=$_POST["paquete"];
    $precio=$_POST["precio"];
    $sql="INSERT INTO venta (fecha_ven,numero_ven,dui_ven,nombres_ven,apellidos_ven,direccion_ven,telefono_ven,paquete_ven,precio_ven) VALUES 
    ('$fecha','$numeroV', '$dui','$nombres', '$apellidos', '$direccion', '$telefono', '$paquete', '$precio')";

    mysqli_query($conexion, $sql) or die ("Error no conectai".mysqli_connect_error());
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
					window.location='/Funesi/notika/green-horizotal/RegVenta.php';
				}
			  })
		}, 1000);
	});
	
	</script>";
 //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql="INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró una venta')";
    mysqli_query($conexion, $sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
}
?>