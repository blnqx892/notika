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
                    <h2>LISTADO DE EQUIPO</h2>
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
                            <button class="btn btn-success notika-btn-success">Dar Altas <i class="fas fa-arrow-alt-circle-up"></i></button><br><br>
                            <button class="btn btn-success notika-btn-success">Reporte   <i class="fas fa-print"></i> </button><br><br>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <div class="data-table-list">
            <div class="basic-tb-hd">
              <h2>Equipo</h2>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Ver</th>
                    <th>Modificar</th>
                    <th>Dar Baja</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sillas Magna Azul</td>
                    <td>Sillas</td>
                    <td>Sillas de plastico color azul</td>
                    <td>20</td>
                    <td>
                      <center> <button class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalVer"><i class="fas fa-eye"></i></button></center>
                    </td>
                    <th>
                      <center><button type="button" class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalEditar"><i class="fas fa-edit"></i></button></center>
                    </th>
                    <th>
                      <center><button class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"><i
                            class="fas fa-arrow-alt-circle-down"></i></button></center>
                    </th>
                  </tr>
                  <tr>
                    <td>Crusifijos</td>
                    <td>Crusifijo</td>
                    <td>Crusifijo de madera</td>
                    <td>5</td>
                    <td>
                      <center> <button class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalVer"><i class="fas fa-eye"></i></button></center>
                    </td>
                    <th>
                      <center><button type="button" class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalEditar"><i class="fas fa-edit"></i></button></center>
                    </th>
                    <th>
                      <center><button class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"><i
                            class="fas fa-arrow-alt-circle-down"></i></button></center>
                    </th>

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
                                <h3>Editar Datos del Equipo</h3>
                              </div>
                            </center>
                            <div class="typography-hd-cr-4">
                              <h4>Equipo</h4>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-tag"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control">
                                  <label class="nk-label" disabled="disabled" disabled="disabled">Nombre</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="chosen-select-act fm-cmp-mg">
                                <select class="chosen" data-placeholder="Categoria ..." disabled="disabled">
                                  <option value="">Equipo</option>
                                  <option value="value">Feretro</option>
                                  <option value="">Comestibles</option>
                                  <option value="">Desechables</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="chosen-select-act fm-cmp-mg">
                                <select class="chosen" data-placeholder="Tipo ..." disabled="disabled">
                                  <option value="">sillas</option>
                                  <option value="">Cortinas</option>
                                  <option value="">Candelabros</option>
                                  <option value="">Candelas</option>
                                  <option value="">Crucifijos</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-route"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Stock">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-phone-square-alt"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="$ Precio Unitario">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-phone-square-alt"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="$ Precio total">
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
                                <h3>Información del Equipo</h3>
                              </div>
                            </center>
                            <div class="typography-hd-cr-4">
                              <h4>Equipo</h4>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-tag"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control">
                                  <label class="nk-label" disabled="disabled" disabled="disabled">Nombre</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="chosen-select-act fm-cmp-mg">
                                <select class="chosen" data-placeholder="Categoria ..." disabled="disabled">
                                  <option value="">Equipo</option>
                                  <option value="value">Feretro</option>
                                  <option value="">Comestibles</option>
                                  <option value="">Desechables</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="chosen-select-act fm-cmp-mg">
                                <select class="chosen" data-placeholder="Tipo ..." disabled="disabled">
                                  <option value="">sillas</option>
                                  <option value="">Cortinas</option>
                                  <option value="">Candelabros</option>
                                  <option value="">Candelas</option>
                                  <option value="">Crucifijos</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-route"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Stock" disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-phone-square-alt"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="$ Precio Unitario" disabled="disabled">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <i class="fas fa-phone-square-alt"></i>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="$ Precio total" disabled="disabled">
                                </div>
                              </div>
                            </div><br><br><br><br><br><br><br>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                              <div class="form-group">
                                <div class="nk-int-st">
                                  <textarea class="form-control auto-size" rows="2"
                                    placeholder="Descripción..." disabled="disabled"></textarea>
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