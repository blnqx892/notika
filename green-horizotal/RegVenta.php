<?php

session_start();
if (isset($_SESSION['usuarioActivo'])) {

    ######### SACAMOS EL VALOR MAXIMO DE LA FACTURA Y LE SUMAMOS UNO ##########
    
    $conexion=mysqli_connect('localhost','root', '', 'funesi');
        $pa=mysqli_query($conexion,"SELECT MAX(numero_ven)as maximo FROM venta");               
        if($row=mysqli_fetch_array($pa)){
            if($row['maximo']==NULL){
                $numero='20101';
            }else{
                $numero=$row['maximo']+1;
            }
        }

?>

<!doctype html>
<html class="no-js" lang="">
<!--IMPORTE head desde Menu/apertura-->
<?php include("Menu/apertura.php"); ?>
<!--IMPORTE head desde Menu/apertura-->
<body>
    <!-- Importe menu desde Menu/menu-->
    <?php include("Menu/menu.php"); ?>
    <!-- End Header Top Area -->
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
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
                                        <h2>REGISTRAR VENTAS</h2>
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
    <!-- Inbox area Start-->
    
        <form id="detalle">
        <div class="inbox-area">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="typography-hd-cr-4">
                            <h4>Detalles</h4>
                        </div>
                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                        <div class="cmp-tb-hd bcs-hd">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <?php
                                                                   date_default_timezone_set('america/el_salvador');
                                                                   $hora1 = date("A");
                                                                   $hoy = getdate();
                                                                   $hora = date("g");
                                                                   $dia = date("d");
                                                                   $fech = $dia.'/'.$hoy['mon'].'/'.$hoy['year'];                                           
                                                                ?>
                                    <h5>Fecha de Venta</h5>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" value="<?php echo $fech?>"
                                            name="fechaec" id="fecha" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <?php 
                                 $conexion=mysqli_connect('localhost','root', '', 'funesi');
                                                $sql="SELECT * from cliente order by nombre_cli ASC";
                                  $clientes = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 

                                ?>
                                <div class="nk-int-mk sl-dp-mn">
                                    <h5>Seleccionar Cliente</h5>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                <select class="chosen" data-placeholder="Cliente..." name="cliente" id="cliente">
                                        <option value=""></option>
                                        <?php
                                                While($cliente=mysqli_fetch_array($clientes)){
                                                     echo '<option value="'.$cliente['idCliente'].'">'.$cliente['nombre_cli'].'</option>';
                                                }
                                    ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <span class="fas fa-file-invoice-dollar"></span>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" value="<?php echo $numero?>" placeholder="# Factura Compra"
                                        name="facturaec" id="recibo" aria-hidden="true">
                                </div>
                            </div>
                        </div><br><br><br><br>
                        
                        <div class="typography-hd-cr-4">
                            <h4>Producto</h4>
                        </div>
                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                        <!--para guardar en detalle compra temporamente con ajax-->
                        
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="chosen-select-act fm-cmp-mg">
                            <?php 
                                 $conexion=mysqli_connect('localhost','root', '', 'funesi');
                                 $sql="SELECT * from paquete order by nombre_paq ASC";
                                  $paquetes = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 

                                ?>
                                <div class="nk-int-mk sl-dp-mn">
                                    <h5>Servicio Funebre</h5>
                                </div>

                               <select class="chosen" data-placeholder="Seleccione paquete" name="paquete" id="paquete">
                                        <option value=""></option>
                                        <?php
                                                While($paquete=mysqli_fetch_array($paquetes)){
                                                     echo '<option value="'.$paquete['idPaquete'].'">'.$paquete['nombre_paq'].'</option>';
                                                }
                                    ?>
                                    </select>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <span class="icon-sort-numeric-asc"></span>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                            <select class="chosen" data-placeholder="Forma de pago" name="pago" id="pago">
                                        <option value="">Forma de pago</option>
                                        <option value="contado"> CONTADO</option>
                                        <option value="credito"> CREDITO</option>
                            </select>

                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- <div><button class="btn btn-success notika-btn-primary">Agregar <span
                                    class="fas fa-cart-plus"></span></button></div><br><br>
                        <center>
                            <div class="data-table-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                            <div class="data-table-list">
                                                <div class="basic-tb-hd">
                                                    <h2>Compras</h2>
                                                </div>
                                                <div class="table-responsive">
                                                    <table id="data-table-basic" class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Producto</th>
                                                                <th>Categoria</th>
                                                                <th>Cantidad</th>
                                                                <th>Precio Unitario</th>
                                                                <th>Sub-Total</th>
                                                                <th>Eliminar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Sillas Magna Azul</td>
                                                                <td>Equipo</td>
                                                                <td>45</td>
                                                                <th>12.50</th>
                                                                <th>562.5</th>
                                                                <td>
                                                                    <center> <button
                                                                            class="btn btn-danger danger-icon-notika waves-effect"
                                                                            data-toggle="modal"
                                                                            data-target="#modalVer"><span
                                                                                class="fas fa-trash-alt"></span></button>
                                                                    </center>
                                                                </td>
                                                            </tr>
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
                            </div> -->
                        <div class="dialog-pro dialog">
                            <button class="btn btn-success notika-btn-success" type="submit">ok <i
                                    class="notika-icon notika-checked"></i></button>

                           
                            <button class="btn btn-danger notika-btn-danger">Cancelar <i
                                    class="notika-icon notika-close"></i></button>
                        
                           
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
    <br/> <br/>
    <div class="inbox-area">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="typography-hd-cr-4">
                            <table class="table table-bordered table-sm">
            <thead>
              <tr>
                
                <td>Nombre Servicio</td>
                <td>Féretro</td>
                <td>Existencia</td>
                <td>Servicio</td>
                <td>Precio</td>
              </tr>
            </thead>
            <tbody id="tabla-ok"></tbody>
          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
 
    <!-- Inbox area End-->
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
    <!-- Input Mask JS
    ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
    ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
    ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
    ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
    ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
    ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
    ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
    ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
    ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
    ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>

    <!--  todo JS
    ============================================ -->
    <!--<script src="js/todo/jquery.todo.js"></script>-->
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
    ============================================ -->
    <script src="Reg_ventas.js"></script>
    <!--<script src="jquery-3.3.1.min.js"></script>-->
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