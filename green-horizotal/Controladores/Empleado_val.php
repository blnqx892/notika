<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();
$duiE = $_REQUEST["dui"];
$telefonoE = $_REQUEST["telefono"];
$filas  = mysqli_query($conexion, "select * from empleado where Dui_Emple = '".$duiE."' or telefono_Emple = '".$telefonoE."'");
	$contador = 0;
	while($valor = mysqli_fetch_assoc($filas)){
		$contador++;
	}
    echo $contador;
?>