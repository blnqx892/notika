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
                                        <h2>REGISTRAR COMPRAS</h2>
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
    <form action="Controladores/Compra.php" method="POST">
        <input type="hidden" value="GuardarCompra" name="bandera">
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
                                    <h5>Fecha de Compra</h5>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" value="<?php echo $fech?>"
                                            name="fechaec" id="fechae" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <?php 
                                 $conexion=mysqli_connect('localhost','root', '', 'funesi');
                                 $sql="SELECT * from proveedor order by nombre_prov ASC";
                                  $proveedores = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 
                                ?>
                                <div class="nk-int-mk sl-dp-mn">
                                    <h5>Seleccionar Proveedor</h5>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select class="chosen" data-placeholder="Elegir Proveedor..." name="id_Proveedor"
                                        id="proveedori" aria-hidden="true">
                                        <option value=""></option>
                                        <?php
                                                While($proveedor=mysqli_fetch_array($proveedores)){
                                                     echo '<option value="'.$proveedor['idProveedor'].'">'.$proveedor['nombre_prov'].'</option>';
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
                                    <input type="text" class="form-control" placeholder="# Factura Compra"
                                        name="facturaec" id="facturai" aria-hidden="true">
                                </div>
                            </div>
                        </div><br><br><br><br>
                        <div class="typography-hd-cr-4">
                            <h4>Producto</h4>
                        </div>
                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <span class="icon-barcode"></span>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Producto" name="productoec"
                                        id="productoi" aria-hidden="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="chosen-select-act fm-cmp-mg">
                                <select class="chosen" name="cateec" id="catei" data-placeholder="Seleccione Categoria" aria-hidden="true">
                                    <option value=""></option>
                                    <option value="1">Equipo</option>
                                    <option value="2">Feretro</option>
                                    <option value="3">Comestibles</option>
                                    <option value="4">Desechables</option>
                                </select>
                            </div>
                        </div><br><br><br><br>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <span class="fas fa-shapes"></span>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Tipo" name="tipoec" id="tipoi" aria-hidden="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <span class="icon-sort-numeric-asc"></span>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Cantidad" name="cantidadec"
                                        id="cantidadi" aria-hidden="true"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <span class="fas fa-dollar-sign"></span>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Precio Unitario"
                                        name="unitarioec" id="precioi" aria-hidden="true">
                                </div>
                            </div>
                        </div><br>
                        <div><button class="btn btn-success notika-btn-primary">Agregar <span
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
                            </div>
                        </center>
                        <center>
                        <div class="dialog-pro dialog">
                  <button class="btn btn-success notika-btn-success" type="submit" >Guardar <i
                      class="notika-icon notika-checked"></i></button>
                  <button class="btn btn-danger notika-btn-danger">Cancelar <i
                      class="notika-icon notika-close"></i></button>
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
</body>

</html>