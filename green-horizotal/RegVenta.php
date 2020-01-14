<?php
session_start();
if (isset($_SESSION['usuarioActivo'])) {
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
                                        <h2>REGISTRAR VENTA</h2>
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
    <form action="Controladores/VentaC.php" method="POST" autocomplete="off">
        <input type="hidden" value="GuardarVenta" name="bandera">
        <div class="inbox-area">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="typography-hd-cr-4">
                        </div>
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
                                        <input type="text" class="form-control" value="<?php echo $fech?>" name="fecha"
                                            id="fechae" aria-required="true">
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <span class="fas fa-id-card"></span>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control" placeholder="N° Venta" name="numeroV">
                                    </div>
                                </div>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <?php 
                                 $conexion=mysqli_connect('localhost','root', '', 'funesi');
                                 $sql="SELECT * from cliente order by nombre_cli ASC";
                                  $clientes = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 
                                ?>
                                <div class="nk-int-mk sl-dp-mn">
                                    <h5>Cliente</h5>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Cliente..." name="cliente" id="">
                                        <option value=""></option>
                                        <?php
                                                While($cliente=mysqli_fetch_array($clientes)){
                                                     echo '<option value="'.$cliente['idCliente'].'">'.$cliente['nombre_cli'].'</option>';
                                                }
                                    ?>
                                    </select>
                                </div><br>
                                <button class="btn btn-success notika-btn-success" data-toggle="modal"
                                    data-target="#modalNuevo">Nuevo <i class="fas fa-user-plus"></i>
                                </button>
                            </div>
                            <!--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <span class="fas fa-id-card"></span>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="DUI: 99999999-9"
                                            name="dui" data-mask="99999999-9">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <span class="fas fa-id-card"></span>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Nombres" name="nombres">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <span class="fas fa-id-card"></span>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Apellidos"
                                            name="apellidos">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Dirección"
                                            name="direccion">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Telf:9999-9999"
                                            name="telefono" data-mask="9999-9999">
                                    </div>
                                </div>
                            </div><br><br><br><br><br><br>-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <?php 
                                 $conexion=mysqli_connect('localhost','root', '', 'funesi');
                                 $sql="SELECT * from paquete order by nombre_paq ASC";
                                  $paquetes = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 
                                ?>
                                <div class="nk-int-mk sl-dp-mn">
                                    <h5>Servicio Funebre</h5>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Seleccione paquete" name="paquete">
                                        <option value=""></option>
                                        <?php
                                                While($paquete=mysqli_fetch_array($paquetes)){
                                                     echo '<option value="'.$paquete['idPaquete'].'">'.$paquete['nombre_paq']. ' - $'.$paquete['precio_paq'].'</option>';
                                                }
                                    ?>
                                    </select>
                                </div>
                            </div><br><br><br><br>
                            <center><div class="form-element-list col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="fm-checkbox">
                                <label>
                                    <input type="radio" name="color" value="azul" class="i-checks"> CREDITO
                                </label>
                                <label>
                                    <input type="radio" name="color" value="negro" class="i-checks"> CONTADO
                                </label>
                                </div>
                            </div></center>
                        </div><br><br><br><br><br>
                        <div class="cmp-tb-hd bcs-hd">
                            <center>
                                <div class="dialog-pro dialog">
                                    <button class="btn btn-success notika-btn-success" type="submit">Facturar <i
                                            class="fas fa-receipt"></i></button>
                                    <button class="btn btn-danger notika-btn-danger">Cancelar <i
                                            class="notika-icon notika-close"></i></button>
                                </div>
                            </center>
                        </div><br><br><br>
                    </div>

                </div>

                
                <div class="modal fade" id="modalNuevo" role="dialog">
                    <div class="modal-dialog modal-large">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <div class="typography-hd-cr-4">
                                        <h3>Editar Datos del Cliente</h3>
                                    </div>
                                </center>
                                <div class="typography-hd-cr-4">
                                    <h2>Datos Personales</h2>
                                </div>
                                <hr style="width:100%;border-color:light-gray 25px;"><br>
                                <div class="cmp-tb-hd bcs-hd">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <span class="fas fa-id-card"></span>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="DUI: 99999999-9">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <span class="icon-user"></span>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Nombres">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <span class="icon-user"></span>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Apellidos">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Dirección">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <span class="fas fa-phone-alt"></span>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Telf: 9999-9999" name="telefono">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br><br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Registrar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
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
    <?php 
    if (isset($_GET['opcion'])) {
        
    }
    $conexion=mysqli_connect('localhost','root', '', 'funesi');
    $sql="SELECT idCliente, nombre_cli FROM cliente";
     $clientes = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 
   ?>

    <script type="text/javascript">
        function buscar() {
            var opcion = document.getElementById('cliente').value;
            window.location.href = 'http://localhost/Funesi/notika/green-horizotal/RegVenta.php?opcion=' + opcion;
        }
    </script>

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
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
    ============================================ -->

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