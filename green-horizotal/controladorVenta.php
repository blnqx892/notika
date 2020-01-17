 <?php
 include("Confi/Conexion.php");
$conexion = conectarMysql();

  $fechaC = $_POST["fecha"];
  $fechaC =explode("/",$fechaC);
  $fechaC=$fechaC[2].'-'.$fechaC[1].'-'.$fechaC[0];
  $recibo = $_POST["numero"];
  $cliente = $_POST["cliente"];
  $pago = $_POST["pago"];
  $paque = $_POST["paquete"];

  $sql = "INSERT INTO venta (fecha_ven,numero_ven,pago,paquete_ven,id_cliente) VALUES 
  ('$fechaC','$recibo','$pago','$paque','$cliente')";

  mysqli_query($conexion,$sql) or die ("Error no conectai".mysqli_connect_error());
  //***************extraer el paquete para ver que producto disminuir
  //***********PARA ACTUALIZAR INVENTARIO
  $pwa=mysqli_query($conexion,"SELECT * FROM paquete WHERE idPaquete='$paque'");             
     if($roww=mysqli_fetch_array($pwa)){
      $producto=$roww['idProducto'];  
       }


  //**

//***********PARA ACTUALIZAR INVENTARIO
  $pwa=mysqli_query($conexion,"SELECT stock FROM invetario WHERE idProducto='$producto'");             
     if($roww=mysqli_fetch_array($pwa)){
      $stock=$roww['stock'];  
      $new_cant=$roww['stock']-1;
      mysqli_query($conexion,"UPDATE invetario SET stock='$new_cant' WHERE idProducto='$producto'");
       }


  ?>