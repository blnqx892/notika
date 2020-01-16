<?php

  include("Confi/Conexion.php");
$conexion = conectarMysql();

if(isset($_POST['name'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $fechaC = $_POST["fecha"];
  $fechaC =explode("/",$fechaC);
  $fechaC=$fechaC[2].'-'.$fechaC[1].'-'.$fechaC[0];

  $proveedor=$_POST['x'];


  $factura = $_POST['factura'];

  
  $producto = $_POST['name'];
  $cantidad = $_POST['description'];
  
  $sql = "INSERT INTO compras (fac_Com,fecha_Com,producto_Com,cantidad_Com,id_Proveedor,estado_Com) VALUES 
  ('$factura','$fechaC','$producto','$cantidad','$proveedor',1)";

  mysqli_query($conexion,$sql) or die ("Error no conectai".mysqli_connect_error());

  //***********PARA ACTUALIZAR INVENTARIO
  $pwa=mysqli_query($conexion,"SELECT stock,precioVenta FROM invetario WHERE idProducto='$producto'");             
     if($roww=mysqli_fetch_array($pwa)){
      $stock=$roww['stock'];  
      $new_cant=$roww['stock']+$cantidad;
      $precioVenta=$roww['precioVenta'];
      mysqli_query($conexion,"UPDATE invetario SET stock='$new_cant' WHERE idProducto='$producto'");
       }

  //para registrar en el Kardex
  $total=($cantidad)*($precioVenta);

  $compraKardex="INSERT INTO kardex(factura,tipo,idProducto,cantidad,costo,importe,fecha)
  VALUES('$factura','COMPRA','$producto','$cantidad','$precioVenta','$total','$fechaC')";
  mysqli_query($conexion,$compraKardex) or die ("Error no conectai".mysqli_connect_error());
//*****fin Registro Kardex

  //fingir proceso
  //****para simular la venta
  $pro1=mysqli_query($conexion,"SELECT * FROM producto WHERE idProducto='$producto'");             
     if($row=mysqli_fetch_array($pro1)){
      $prod2=$row['nombre_Pro'];  
      }
  $query = "INSERT into detallecompra(producto, cantidad,precio,total,factura,id_producto)
   VALUES ('$prod2', '$cantidad','$precioVenta','$total','$factura','$producto')";
  $result = mysqli_query($conexion, $query);
//*******
  
                                                  
  //$_SESSION['mensaje'] ="Registro guardado exitosamente";
  //header("location: /Funesi/notika/green-horizotal/RegCompra.php");

  echo"
  <script language='javascript'>
  alert('Registro de Compra Exitoso!!')
  window.location='/Funesi/notika/green-horizotal/RegCompra.php'
  </script>";
  //////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró una compra')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////

  


}

?>