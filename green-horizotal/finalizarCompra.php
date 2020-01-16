<?php
include("Confi/Conexion.php");
$conexion = conectarMysql();

//**************MUY IMPORTATE
       $query = "DELETE FROM detallecompra"; 
  $result = mysqli_query($conexion, $query);
  ///*/*************************

  header("location: /Funesi/notika/green-horizotal/RegCompra.php");


?>