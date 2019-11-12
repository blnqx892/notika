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
                                        <h2>USUARIOS</h2>
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
    <?php 
        $conexion=mysqli_connect('localhost','root', '', 'funesi');
        $sql="SELECT * from usuario order by nombre_Usu ASC";
        $usuarios= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
                        <hr>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <button  class="btn btn-success notika-btn-success" data-toggle="modal"
                                    data-target="#modalNuevoUsu">Nuevo <span class="fas fa-plus-circle"></span>
                                </button><br><br>
                                <button class="btn btn-success notika-btn-success">Dar Altas <i
                                        class="fas fa-arrow-alt-circle-up"></i></button><br><br>
                                <button class="btn btn-success notika-btn-success">Reporte <i class="fas fa-print"></i>
                                </button><br><br>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Usuarios Registrados</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Usuario</th>
                                        <th>Ver</th>
                                        <th>Modificar</th>
                                        <th>Dar Baja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php While($mostrar=mysqli_fetch_assoc($usuarios)){?>
                                        <td><?php echo $mostrar['nombre_Usu'] ?></td>
                                        <td><?php echo $mostrar['apellido_Usu'] ?></td>
                                        <td><?php echo $mostrar['usuario_Usu'] ?></td>
                                        <td>
                                            <center><button
                                                    class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg"
                                                    data-toggle="modal" data-target="#modalVer" title="Ver"
                                                    onclick="mostraUsuario('<?php echo $mostrar['Dui_Usu']?>','<?php echo $mostrar['nombre_Usu']?>','<?php echo $mostrar['apellido_Usu']?>','<?php echo $mostrar['correo_Usu']?>','<?php echo $mostrar['usuario_Usu']?>','<?php echo $mostrar['contrasena_Usu']?>')"><i
                                                        class="fas fa-eye"></i></button></center>
                                        </td>
                                        <th>
                                            <center><button
                                                    class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                                                    data-toggle="modal" data-target="#modalEditar"><i
                                                        class="fas fa-edit"></i></button></center>
                                        </th>
                                        <th>
                                            <center><button
                                                    class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"><i
                                                        class="fas fa-arrow-alt-circle-down"></i></button></center>
                                        </th>
                                    </tr>
                                    <!--INICIO MODAL EDITAR-->
                                    <div class="modal fade" id="modalEditar" role="dialog">
                                        <div class="modal-dialog modal-large">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <div class="typography-hd-cr-4">
                                                            <h3>Editar Datos del Usuario</h3>
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
                                                                    <input type="text" class="form-control"
                                                                        placeholder="DUI: 99999999-9"
                                                                        disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Nombre" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Apellido" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div><br><br><br>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-at"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Correo">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Usuario" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-key"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Contraseña">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br><br><br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Guardar Cambios</button>
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FIN  MODAL EDITAR-->

                                    <!--INICIO MODAL VER-->
                                    <div class="modal fade" id="modalVer" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-large">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <div class="typography-hd-cr-4">
                                                            <h3>Información del Usuario</h3>
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
                                                                    <input type="text" class="form-control" id="duiv"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" id="nombrev"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="" id="apellidov">
                                                                </div>
                                                            </div>
                                                        </div><br><br><br>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-at"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" id="correov"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="" id="usuariov">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-key"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="password" class="form-control"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="" id="contra1v">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <center>
                                                                <image src="img/logo/usuario.png" />
                                                            </center>
                                                        </div>
                                                    </div><br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FIN MODAL VER-->

                                    <!--INICIO MODAL NUEVO-->
                                    <div class="modal fade" id="modalNuevoUsu"  tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-large">
                                            <div class="modal-content">
                                                <form action="Controladores/UsuarioC.php" method="POST" >
                                                    <input type="hidden" value="GuardarUsuario" name="bandera">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <center>
                                                            <div class="typography-hd-cr-4">
                                                                <h3>Registrar Nuevo Usuario</h3>
                                                            </div>
                                                        </center>
                                                        <div class="typography-hd-cr-4">
                                                            <h2>Datos Personales</h2>
                                                        </div>
                                                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                        <div class="cmp-tb-hd bcs-hd">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="fas fa-id-card"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="DUI: 99999999-9" name="dui">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-user"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Nombre" name="nombre">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-user"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Apellido" name="apellido">
                                                                    </div>
                                                                </div>
                                                            </div><br><br><br><br>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="fas fa-at"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Correo" name="correo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-user"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Usuario" name="usuario">
                                                                    </div>
                                                                </div>
                                                            </div><br><br><br>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-key"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="password" class="form-control"
                                                                            placeholder="Contraseña" name="contra1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-key"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="password" class="form-control"
                                                                            placeholder="Repetir Contraseña"
                                                                            name="contra2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="chosen-select-act fm-cmp-mg">
                                                                    <select class="chosen" name="rol"
                                                                        data-placeholder="Elegir Rol"
                                                                        aria-hidden="true">
                                                                        <option value=""></option>
                                                                        <option value="1">Administrador</option>
                                                                        <option value="2">Empleado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><br><br><br><br>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Guardar
                                                                Cambios</button>
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--DIN MODAL NUEVO-->
                                    <?php } ?>
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
        <script src="js/Validaciones/jsUsuario.js"></script>
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
    <!--  chosen JS
    ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!-- bootstrap select JS
    ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!-- datapicker JS
    ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
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
</body>

</html>