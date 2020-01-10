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
                    <h2>LISTADO DE FERETROS</h2>
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
        $sql="SELECT * FROM `producto` WHERE  distinto=1";
        //$sql="SELECT * FROM `producto` WHERE distinto = 0 order by tipo_Prod='$tipo' ASC";
        $productos= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>

  <!-- Data Table area Start-->
  <div class="data-table-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
          <div class="inbox-left-sd">
            <hr>
            <div class="inbox-status">
              <ul class="inbox-st-nav inbox-ft">
                <button data-toggle="modal" data-target="#modalNuevo" class="btn btn-success notika-btn-success">Nuevo
                  <span class="fas fa-plus-circle"></span></button><br><br>
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
              <h2>Feretros</h2>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                  <tr>
                    <th>Modelo</th>
                    <th>Stock</th>
                    <th><center>Acciones<center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php While($mostrar=mysqli_fetch_assoc($productos)){?>
                    <td><?php echo $mostrar['nombre_Pro'] ?></td>
                    <td><?php echo $mostrar['stock_Pro'] ?></td>
                    <td><center><button class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg" data-toggle="modal"
                        data-target="#modalVer"><i class="fas fa-eye"></i></button>
                      <button type="button" class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                        data-toggle="modal" data-target="#modalEditar"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"><i
                          class="fas fa-arrow-alt-circle-down"></i></button><center>
                    </td>

                    <!-- INICIO MODAL EDITAR-->
                    <div class="modal fade" id="modalEditar" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <center>
                              <div class="typography-hd-cr-4">
                                <h3>Editar Datos del Feretro</h3>
                              </div>
                            </center>
                            <div class="typography-hd-cr-4">
                              <h4>Feretro</h4>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  <span class="icon-barcode"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control">
                                  <label class="nk-label" disabled="disabled" disabled="disabled">Nombre</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-boxes"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" disabled="disabled">
                                  <label class="nk-label">Categoria</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-layer-group"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" disabled="disabled">
                                  <label class="nk-label">Tipo</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="icon-list-numbered"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Stock">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-dollar-sign"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Precio Unitario">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-dollar-sign"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Precio total">
                                </div>
                              </div>
                            </div><br><br><br><br><br><br><br>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                              <div class="form-group">
                                <div class="nk-int-st">
                                  <textarea class="form-control auto-size" rows="2"
                                    placeholder="Descripción..."></textarea>
                                </div>
                              </div>
                            </div>
                            <div>
                              <center>
                                <image src="img/logo/productoo.png" />
                              </center>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar
                              Cambios</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- FIN MODAL EDITAR-->

                    <!-- INICIO MODAL VER-->
                    <div class="modal fade" id="modalVer" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <center>
                              <div class="typography-hd-cr-4">
                                <h3>Información del Feretro</h3>
                              </div>
                            </center>
                            <div class="typography-hd-cr-4">
                              <h4>Feretro</h4>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="icon-barcode"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Nombre" disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-boxes"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Categoria" disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-layer-group"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Tipo" disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="icon-list-numbered"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Stock" disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-dollar-sign"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Precio Unitario"
                                    disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-dollar-sign"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Precio total"
                                    disabled="disabled">
                                </div>
                              </div>
                            </div><br><br><br><br><br><br><br>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                              <div class="form-group">
                                <div class="nk-int-st">
                                  <textarea class="form-control auto-size" rows="2" placeholder="Descripción..."
                                    disabled="disabled"></textarea>
                                </div>
                              </div>
                            </div>
                            <div>
                              <center>
                                <image src="img/logo/productoo.png" />
                              </center>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- FIN MODAL VER-->

                    <!-- INICIO MODAL NUEVO-->
                    <div class="modal fade" id="modalNuevo" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <form action="Controladores/FeretrosC.php" method="POST">
                            <input type="hidden" value="GuardarFeretro" name="bandera">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <center>
                                <div class="typography-hd-cr-4">
                                  <h3>Registrar Feretro</h3>
                                </div>
                              </center>
                              <div class="typography-hd-cr-4">
                              </div>
                              <hr style="width:100%;border-color:light-gray 25px;"><br>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="icon-barcode"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Codigo" name="codigo">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-tag"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Modelo" name="modelo">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="icon-list-numbered"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="number" class="form-control" placeholder="Stock minimo" name="stock">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="form-group">
                                  <div class="nk-int-st">
                                    <textarea class="form-control auto-size" rows="2" placeholder="Caracteristicas..."
                                      name="caracte"></textarea>
                                  </div>
                                </div>
                              </div>
                              <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="dropdone-nk mg-t-30">
                                  <div class="cmp-tb-hd">
                                    <span class="note needsclick"></span>
                                    <h2>Cargar Imagen</h2>
                                  </div>
                                  <div id="dropzone1" class="multi-uploader-cs">
                                    <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                                      <div class="dz-message needsclick download-custom">
                                        <i class="notika-icon notika-cloud"></i>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>--><br><br><br><br><br><br>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Guardar Cambios</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- FIN MODAL NUEVO-->
                  </tr>
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