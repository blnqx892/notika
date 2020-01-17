<?php
session_start();
echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<script  src = "https://cdn.jsdelivr.net/npm/sweetalert2@9"> </script>';
include("../Confi/Conexion.php");
$conexion=conectarMysql();

$bandera=$_POST["bandera"];

if ($bandera=="GuardarPaquete") {
    $nombre=$_POST["nombrePaq"];
    $feretro=$_POST["feretro"];
    $servicios=$_POST["servicios"];
    $precio=$_POST["precio"];
    $sql="INSERT INTO paquete (nombre_paq, idProducto,servicios,precio_paq) VALUES 
    ('$nombre', '$feretro', '$servicios', '$precio')";

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
					window.location='/Funesi/notika/green-horizotal/RegPaquete.php';
				}
			  })
		}, 1000);
	});
	
	</script>";
 //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql="INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró un paquete')";
    mysqli_query($conexion, $sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
}
?>