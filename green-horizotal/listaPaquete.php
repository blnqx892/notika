<?php
  include("Confi/Conexion.php");
$conexion = conectarMysql();

$query = "SELECT * FROM paquete INNER JOIN producto ON paquete.idProducto=producto.idProducto INNER JOIN invetario ON paquete.idProducto=invetario.idProducto ";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
$bastese="Abastese";
$bastesex="NO Abastese";
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'nombre' => $row['nombre_paq'],
      'ferretero' => $row['nombre_Pro'],
      'existencia' => $row['stock'],
      'servicio' => $row['servicios'],
      'precio' => $row['precio_paq']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>