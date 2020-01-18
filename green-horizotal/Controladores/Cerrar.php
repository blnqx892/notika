<?php
include("../confi/Conexion.php");
echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<script  src = "https://cdn.jsdelivr.net/npm/sweetalert2@9"> </script>';
$conexion = conectarMysql();
session_start();
//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Cerro Sesión')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
echo "<script language='javascript'>
	$(document).ready(function () {
		setTimeout(function () {
			Swal.fire({
				title: '',
				text: '¿Cerrar Sesión?',
				icon: 'question',
				confirmButtonText: 'Aceptar'
			  }).then((result) => {
				if (result.value) {
					window.location='/Funesi/notika/green-horizotal/Login.php';
				}
			  })
		}, 1000);
	});
	
	</script>";
///////////////////////////////////////////////
unset($_SESSION['usuarioActivo']);
//header("location: /Funesi/notika/green-horizotal/Login.php");
///////////////////////////////////////////////
 ?>
