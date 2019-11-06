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
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
          <div class="inbox-left-sd">
            <hr>
            <div class="inbox-status">
              <ul class="inbox-st-nav inbox-ft">
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
              <h2>Proveedores</h2>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                  <tr>
                    <th>Empresa</th>
                    <th>Dirección</th>
                    <th>Responsable</th>
                    <th>Ver</th>
                    <th>Modificar</th>
                    <th>Dar Baja</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                                $conexion=mysqli_connect('localhost','root', '', 'funesi');
                                $sql="SELECT * from proveedor order by nombre_prov ASC";
                                $proveedor= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 
                              ?>
                  <?php While($mostrar=mysqli_fetch_assoc($proveedor)){?>
                  <tr>
                    <td><?php echo $mostrar['nombre_prov'] ?></td>
                    <td><?php echo $mostrar['direccion_Prov'] ?></td>
                    <td><?php echo $mostrar['nombreEmpr'] ?></td>

                    <td>
                      <center> <button class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalVerProveedor"
                          onclick="mostraProveedor('<?php echo $mostrar['nombre_prov']?>','<?php echo $mostrar['direccion_Prov']?>','<?php echo $mostrar['telefonoResp_Prov']?>','<?php echo $mostrar['nombreEmpr']?>','<?php echo $mostrar['telefEmp']?>')"><i
                            class="fas fa-eye"></i></button>
                      </center>
                    </td>
                    <th>
                      <center><button type="button" class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalEditarProveedor" onclick="editarProveedor('<?php echo $mostrar['nombre_prov']?>','<?php echo $mostrar['direccion_Prov']?>','<?php echo $mostrar['telefonoResp_Prov']?>','<?php echo $mostrar['nombreEmpr']?>','<?php echo $mostrar['telefEmp']?>','<?php echo $mostrar['idProveedor']?>')"><i class="fas fa-edit"></i></button>
                      </center>
                    </th>
                    <th>
                      <center><button class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"><i
                            class="fas fa-arrow-alt-circle-down"></i></button></center>
                    </th>

                    <!-- INICIO MODAL EDITAR-->
                    <div class="modal fade" id="modalEditarProveedor" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <form action="Controladores/ProveedorC.php" method="POST">
                            <input type="hidden" value="EditarProveedor" name="bandera">
                            <input type="hidden" value="" name="idproveedor" id="idproveedor" />
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <center>
                                <div class="typography-hd-cr-4">
                                  <h3>Editar Datos del Proveedor</h3>
                                </div>
                              </center><br>
                              <div class="typography-hd-cr-4">
                                <h2>Datos de la Empresa</h2>
                              </div>
                              <hr style="width:100%;border-color:light-gray 25px;"><br>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-building"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" id="nombreEmpreE"
                                      name="nombreEmpreC"  aria-required="true" value="">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-map-marker-alt"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" id="direccionEmpreE"
                                      name="direccionEmpreC" aria-required="true" value="">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-phone-alt"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control"  id="telEmpreE" aria-required="true" value="" name="telEmpreC">
                                  </div>
                                </div>
                              </div><br><br><br><br><br>
                              <div class="typography-hd-cr-4">
                                <h2>Datos Personales del Responsable</h2>
                              </div>
                              <hr style="width:100%;border-color:light-gray 25px;"><br>
                              <div class="cmp-tb-hd bcs-hd">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                      <span class="icon-user"></span>
                                    </div>
                                    <div class="nk-int-st">
                                      <input type="text" class="form-control" id="nombreResE" name="nombreResC" aria-required="true" value="">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                      <span class="fas fa-phone-alt"></span>
                                    </div>
                                    <div class="nk-int-st">
                                      <input type="text" class="form-control" aria-required="true" value="" id="telResE"
                                        name="telResC">
                                    </div>
                                  </div>
                                </div><br><br><br><br><br>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Guardar
                                  Cambios</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- FIN MODAL EDITAR-->

                    <!-- INICIO MODAL VER-->
                    <div class="modal fade" id="modalVerProveedor" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <center>
                              <div class="typography-hd-cr-4">
                                <h3>Información del Proveedor</h3>
                              </div>
                            </center><br>
                            <div class="typography-hd-cr-4">
                              <h2>Datos de la Empresa</h2>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-building"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" readonly="readonly" aria-required="true"
                                    value="" id="nombreEmpre">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-map-marker-alt"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" readonly="readonly" aria-required="true"
                                    id="direccionEmpre">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-phone-alt"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" readonly="readonly" aria-required="true"
                                    id="telEmpre" disabled="disabled">
                                </div>
                              </div>
                            </div><br><br><br><br><br><br><br><br>
                            <div class="typography-hd-cr-4">
                              <h2>Datos Personales del Responsable</h2>
                            </div>
                            <hr style="width:100%;border-color:light-gray 25px;"><br>
                            <div class="cmp-tb-hd bcs-hd">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="icon-user"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" readonly="readonly" aria-required="true"
                                      value="" id="nombreRes">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-phone-alt"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" readonly="readonly" aria-required="true"
                                      value="" id="telRes">
                                  </div>
                                </div>
                              </div><br><br><br><br><br>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- FIN MODAL VER-->
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
    <script src="js/Validaciones/jsProveedor.js"></script>
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