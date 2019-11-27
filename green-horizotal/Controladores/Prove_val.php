<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();
$telefonoo = $_REQUEST["telEmp"];
$filas  = mysqli_query($conexion, "select * from proveedor where  telefEmpr = '".$telefonoo."'");
	$contador = 0;
	while($valor = mysqli_fetch_assoc($filas)){
		$contador++;
	}
    echo $contador;
?>