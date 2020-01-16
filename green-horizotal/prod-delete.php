<?php
include("Confi/Conexion.php");
$conexion = conectarMysql();

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  

  //**para eliminar del kardex como no quiere los productos

  $pro1=mysqli_query($conexion,"SELECT * FROM detallecompra WHERE id='$id'");             
     if($row=mysqli_fetch_array($pro1)){
      $prod2=$row['id_producto']; 
      $fa=$row['factura']; 
      $cantMenos=$row['cantidad'];
      }
  $query = "DELETE FROM kardex WHERE idProducto = '$prod2' and factura='$fa'"; 
  $result = mysqli_query($conexion, $query);

  //*******fin

  //************disminuir como no lo quiere
  $pwa=mysqli_query($conexion,"SELECT stock FROM invetario WHERE idProducto='$prod2'");             
     if($roww=mysqli_fetch_array($pwa)){
      $stock=$roww['stock'];  
      $new_cant=$roww['stock']-$cantMenos;
      mysqli_query($conexion,"UPDATE invetario SET stock='$new_cant' WHERE idProducto='$prod2'");
       }

//**************MUY IMPORTATE
       $query = "DELETE FROM detallecompra WHERE id = $id"; 
  $result = mysqli_query($conexion, $query);
  ///*/*************************


  
}

?>