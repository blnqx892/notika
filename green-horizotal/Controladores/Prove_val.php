<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();
$telefonoo = $_REQUEST["telEmp"];
$telefon = $_REQUEST["telRes"];
$filas  = mysqli_query($conexion, "select * from proveedor where  telefEmpr = '".$telefonoo."' or telefonoResp_Prov = '".$telefon."'");
	$contador = 0;
	while($valor = mysqli_fetch_assoc($filas)){
		$contador++;
	}
    echo $contador;
?>