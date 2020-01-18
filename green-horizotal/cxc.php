
<?php
session_start();
if (isset($_SESSION['usuarioActivo'])) {

    if (!empty($_GET['x'])) {
    //soy el id el que te esta salvando la vida en esta pantalla
    $id = $_GET['x'];

      
}

$conexion=mysqli_connect('localhost','root', '', 'funesi');

$queryP = "SELECT * FROM venta INNER JOIN cliente ON venta.id_cliente=cliente.idCliente INNER JOIN paquete ON paquete.idPaquete=venta.paquete_ven WHERE venta.idVenta='$id'";
                    $result = mysqli_query($conexion, $queryP);

                     while ($roww = mysqli_fetch_array($result)) {
                     $c_nombre = $roww['nombre_cli'];
                     $paquete = $roww['nombre_paq'];
                     $recibo=$roww['numero_ven'];
                     $precio=$roww['precio_paq'];
        }

        //********para sumar todos los abonos
$sumar="SELECT SUM(valor) as valores FROM abono WHERE recibo='$recibo'";
$xy = mysqli_query($conexion, $sumar);

while ($re = mysqli_fetch_array($xy)) {

                    $xResta=$re['valores'];
        }



//***************

?>
<!doctype html>
<html class="no-js" lang="">
<!--IMPORTE head desde Menu/apertura-->
<?php include("Menu/apertura.php"); ?>
<!--IMPORTE head desde Menu/apertura-->
<body>
    <!-- Importe menu desde Menu/menu-->
    <?php include("Menu/menu.php"); ?>

    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">

        <div class="container">

            <?php
   if (!empty($_POST['valor'])) {
    $valor = $_POST['valor'];
    $proxi = $_POST['proximo'];

    if ($xResta==NULL) {
       $restar=$precio-$valor;
    }else{
        $sum=$xResta+$valor;
    $restar=($precio-$sum);
     }

     if ($restar==0) {
         # code...
        mysqli_query($conexion,"INSERT INTO abono (recibo,valor,fecha,restante,estado)
        VALUES ('$recibo','$valor','$proxi','$restar','Cancelado')");
     }elseif ($precio==$valor) {
         # code...
        mysqli_query($conexion,"INSERT INTO abono (recibo,valor,fecha,restante,estado)
        VALUES ('$recibo','$valor','$proxi','$restar','Cancelado')");
     }else{
     mysqli_query($conexion,"INSERT INTO abono (recibo,valor,fecha,restante,estado)
        VALUES ('$recibo','$valor','$proxi','$restar','En Proceso')");
     }

      echo "<script>
          location.href ='cxc.php?x=$id';
        </script>";
    }

    ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>ABONOS A CREDITOS</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
                    <hr>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                            <button class="btn btn-success notika-btn-success">Reporte   <i class="fas fa-print"></i> </button><br><br>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Ventas al credito</h2>
                        </div>
                         <div class="row">
     <div class="col-md-12 text-info" style="font-size:16px">
    <br>
<strong class="col-md-2">Cliente:</strong>
<div class="col-md-4">
<input class="form-control" id="" type="text" value="<?php echo $c_nombre;?>" disabled> 
</div>
<strong class="col-md-2">Paquete: </strong>
<div class="col-md-4">
<input class="form-control" id="" type="text" value="<?php echo $paquete;?>" disabled>
</div>
<br><br><br>
<strong class="col-md-2">Precio: </strong>
<div class="col-md-4">
<input class="form-control" id="" type="text" value="<?php echo '$'.$precio;?>" disabled>
</div>
</div>
       

<!--botones -->
<div class="col-md-4">
            <div class="panel-body" align="center">                                                                                 
                <a href="ListaVentaCredito.php">
                    <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left fa-2x" title="Regresar"></i>
                    </button></a>
<?php

    
if ($xResta==$precio) {
   
    
}else{
echo '<button type="button" class="btn btn-success " data-toggle="modal" data-target="#abono"><i class="fa fa-plus fa-2x" title="Agregar Nuevo Abono"></i>
                                      </button>';

}
?>        
             
            </div>
        </div>

        <!--MODAL PARA AGREGAR LOS ABONOS-->
         <!--  Modals-->
        <div class="modal fade" id="abono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!--<div class="modal fade" id="abono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
        <form name="forms" method="post" action="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                            <h3 align="center" class="modal-title" id="myModalLabel">Registrar<br><?php echo 'Venta por Cobrar No. ' . $recibo; ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                       
                                <div class="col-md-6">                                          
                                    <label>Valor del Abono:</label>                                             
                                    <input type="text" name="valor"  min="1" max="<?php //echo $deuda - abonos_saldo($id); ?>" autocomplete="off" required class="form-control"><br><br>
                                </div>
                                <div class="col-md-6">                                          
                                    <label>Fecha pago:</label>                                             
                                    <input type="date" name="proximo" value="1" min="1" autocomplete="off" required class="form-control"><br><br>
                                </div>
                                 
                            </div> 
                        </div> 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>                                       
                    </div>
                </div>
            </form>
        </div>


        <!--FIN MODAL PARA ABONAR-->
<!---->
</div>
</div>


                       <div class="table-responsive">

                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <?php 
                      $conexion=mysqli_connect('localhost','root', '', 'funesi');
                    $queryP = "SELECT * FROM abono WHERE recibo='$recibo'";
                    $result = mysqli_query($conexion, $queryP);

                    ?>
                                    <tr>

                                        <th>N° Cuenta</th>
                                        <th>Pagado</th>
                                        <th>Fecha</th>
                                        <th>Restante</th>
                                         <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php While($y=mysqli_fetch_assoc($result)){
                       

                    ?>
                  <tr>

                    <td><?php echo $y['recibo'] ?></td>
                    <td><?php echo $y['valor'] ?></td>
                    <td><?php echo $y['fecha'] ?></td>
            <td><?php echo $y['restante'] ?>
             <td><?php echo $y['estado'] ?>
                
            </td>
                                         </tr>
            <?php }?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN TABLA-->

    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Derechos Reservados 2019 -- UES-FMP/DSI2
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
</body>

</html>
<?php
}else{
    ?>
    <!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="0;URL=/Funesi/notika/green-horizotal/Login.php">
</head>
<body>
</body>
</html>
    <?php
}
?>