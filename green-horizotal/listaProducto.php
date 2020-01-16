<?php
  include("Confi/Conexion.php");
$conexion = conectarMysql();

$query = "SELECT *FROM detallecompra";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'factura' => $row['factura'],
      'producto' => $row['producto'],
      'cantidad' => $row['cantidad'],
      'precio' => $row['precio'],
      'total' => $row['total'],
      'id'=>$row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>