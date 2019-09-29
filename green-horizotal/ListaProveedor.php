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
                    <h2>LISTADO DE PROVEEDORES</h2>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="data-table-list">
            <div class="pull-right">
              <button class="btn btn-success notika-btn-success">Dar Altas <i
                  class="fas fa-arrow-alt-circle-up"></i></button>
              <button class="btn btn-teal teal-icon-notika btn-reco-mg btn-button-mg">Reporte <i class="fas fa-print"></i></button>
            </div>
            <div class="basic-tb-hd">
              <h2>Proveedores</h2>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Empresa</th>
                    <th>Dirección</th>
                    <th>Ver</th>
                    <th>Modificar</th>
                    <th>Dar Baja</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Daniela Cecilia</td>
                    <td>7856-9585</td>
                    <td>Panaderia Tamayo</td>
                    <td>10 Calle Oriente, Av. Lourdes #2, San Salvador</td>
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
                    <td>Esteban Xavier</td>
                    <td>7898-8751</td>
                    <td>El Taller</td>
                    <td>10 Calle Oriente, Av. Lourdes #2, San Salvador</td>
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

                    <!-- INICIO MODALES-->
                    <div class="modal fade" id="modalEditar" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <h3>Editar Datos del Proveedor</h3><br><br>
                            <div class="typography-hd-cr-4">
                              <h2>Datos Personales del Responsable</h2>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="cmp-tb-hd bcs-hd">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Nombre Completo">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Telefono 9999-9999">
                                  </div>
                                </div>
                              </div><br><br><br><br><br>
                              <div class="typography-hd-cr-4">
                                <h2>Datos de la Empresa</h2>
                              </div>
                              <hr style="width:100%;border-color:light-gray 25px;"><br>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Empresa" disabled="disabled">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-map-marker"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Dirección">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Teléfono 9999-9999">
                                  </div>
                                </div>
                              </div>
                              <br><br><br>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar
                                Cambios</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="modalVer" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <h3>Datos del Proveedor</h3><br><br>
                            <div class="typography-hd-cr-4">
                              <h2>Datos Personales del Responsable</h2>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="cmp-tb-hd bcs-hd">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Nombre Completo"
                                      disabled="disabled">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Telefono 9999-9999"
                                      disabled="disabled">
                                  </div>
                                </div>
                              </div><br><br><br><br><br>
                              <div class="typography-hd-cr-4">
                                <h2>Datos de la Empresa</h2>
                              </div>
                              <hr style="width:100%;border-color:light-gray 25px;"><br>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Empresa" disabled="disabled">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-map-marker"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Dirección" disabled="disabled">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Teléfono 9999-9999"
                                      disabled="disabled">
                                  </div>
                                </div>
                              </div>
                              <br><br><br>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- FIN MODALES-->
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
</body>

</html>