<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();
$duiC = $_REQUEST["dui"];
$telefono = $_REQUEST["telefono"];
$filas  = mysqli_query($conexion, "select * from cliente where Dui_cli = '".$duiC."' or telefono_Cli = '".$telefono."'");
	$contador = 0;
	while($valor = mysqli_fetch_assoc($filas)){
		$contador++;
	}
    echo $contador;
?>