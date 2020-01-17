<?php
session_start();
if (isset($_SESSION['usuarioActivo'])) {
?>

<!doctype html>
<html class="no-js" lang="">
<!--IMPORTE head desde Menu/apertura-->
<?php include("Menu/apertura.php"); ?>
<!--IMPORTE head desde Menu/apertura-->
<?php $material = array(1 => "Madera", 2 => "Metal"); ?>

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
  <?php if (!isset($_GET['tipo'])) {
			$tipo=1;
		}else{
			$tipo = $_GET['tipo'];
		}?>

  <?php 
        $conexion=mysqli_connect('localhost','root', '', 'funesi');
        $sql="SELECT * from producto where estado_Pro='$tipo' order by nombre_Pro ASC";
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
                <?php  if ($tipo == 1) { ?>
                <a href="/Funesi/notika/green-horizotal/ListaFeretros.php?tipo=0"><button
                    class="btn btn-success notika-btn-success">Inactivos <i
                      class="fas fa-arrow-alt-circle-down"></i></button> &nbsp; </a>
                <?php  }else{ ?>
                <a href="/Funesi/notika/green-horizotal/ListaFeretros.php?tipo=1"><button
                    class="btn btn-success notika-btn-success">Activos <i
                      class="fas fa-arrow-alt-circle-up"></i></button>&nbsp;</a>
                <?php } ?><br><br>
                <?php  if ($tipo == 1) { ?>
                <a target="_blank" href="Reportes/ReporteProducto_Act.php?tipo=1"><button
                    class="btn btn-success notika-btn-success">Reporte A <i class="fas fa-print"></i>
                  </button></a><br><br>
                <?php  }else{ ?>
                <a target="_blank" href="Reportes/ReporteProducto_In.php?tipo=0"><button
                    class="btn btn-success notika-btn-success">Reporte I <i class="fas fa-print"></i>
                  </button></a><br><br><?php } ?>
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
                    <th>Material</th>
                    <th>Color</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php While($mostrar=mysqli_fetch_assoc($productos)){?>
                  <?php if($mostrar['idProducto'] != 28){ ?>
                  <tr>
                    <td><?php echo $mostrar['nombre_Pro'] ?></td>
                    <td><?php echo $material[$mostrar['material_Pro']] ?></td>
                    <td><?php echo $mostrar['color_Pro'] ?></td>
                    <td>
                      <center><button type="button" class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" title="Ver" data-target="#modalVerFeretro"
                          onclick="mostrarFeretro('<?php echo $mostrar['nombre_Pro']?>','<?php echo $material[$mostrar['material_Pro']]?>','<?php echo $mostrar['color_Pro']?>','<?php echo $mostrar['caracteristicas']?>')"><i
                            class="fas fa-eye"></i></button>
                            <?php  if ($tipo == 1) {?> 
                        <button type="button" class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                          data-toggle="modal" data-target="#modalEditarProducto" title="Modificar"
                          onclick="editarFeretro('<?php echo $mostrar['nombre_Pro']?>','<?php echo $material[$mostrar['material_Pro']]?>','<?php echo $mostrar['color_Pro']?>','<?php echo $mostrar['caracteristicas']?>','<?php echo $mostrar['idProducto']?>')"></i></button>
                          <?php  }else{ }?>
                      <?php  if($tipo == 1) { ?>

                        <button type="button" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"
                          title="Dar de baja"><span class="fas fa-arrow-alt-circle-down"
                            onclick="baja(<?php echo $mostrar['idProducto'] ?>)"></span></button>

                        <?php  }else{ ?>

                        <button type="button"
                          class="btn btn-teal teal-icon-notika btn-reco-mg btn-button-mg waves-effect"
                          title="Dar de alta"><i class="fas fa-arrow-alt-circle-up"
                            onclick="alta(<?php echo $mostrar['idProducto'] ?>)"></i></button>
                            <?php } ?>
                      <?php  }else{ if($tipo == 0){?>
                        <button type="button"
                          class="btn btn-teal teal-icon-notika btn-reco-mg btn-button-mg waves-effect"
                          title="Dar de alta"><i class="fas fa-arrow-alt-circle-up"
                            onclick="alta(<?php echo $mostrar['idProducto'] ?>)"></i></button>
                        <?php } }?>
                        <center>
                    </td>

                    <!-- INICIO MODAL EDITAR-->
                    <div class="modal fade" id="modalEditarProducto" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <form action="Controladores/FeretrosC.php" method="POST">
                            <input type="hidden" value="EditarFeretro" name="bandera">
                            <input type="hidden" value="" name="idferetro" id="idferetro" />
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
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="icon-barcode"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Modelo" name="modeloo"
                                      id="modeloo">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-boxes"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Material" aria-required="true"
                                      value="" name="materiall" id="materiall" disabled="disabled">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                    <span class="fas fa-palette"></span>
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Color" aria-required="true"
                                      value="" name="colorr" id="colorr">
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="form-group">
                                  <div class="nk-int-st">
                                    <textarea class="form-control auto-size" rows="2" placeholder="Características..."
                                      aria-required="true" value="" name="caractee" id="caractee"></textarea>
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
                              <button class="btn btn-default" type="submit">Guardar
                                Cambios</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                      </div>
                      </form>
                    </div>
                    <!-- FIN MODAL EDITAR-->

                    <!-- INICIO MODAL VER-->
                    <div class="modal fade" id="modalVerFeretro" role="dialog">
                      <div class="modal-dialog modal-large">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <a target="_blank"><button onclick="reporte()"><i
                                  class="fas fa-print"></i>&times;</button></a>
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
                                  <input type="text" class="form-control" placeholder="Modelo" disabled="disabled"
                                    id="modelo">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-boxes"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Material" disabled="disabled"
                                    aria-required="true" value="" id="material">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                  <span class="fas fa-palette"></span>
                                </div>
                                <div class="nk-int-st">
                                  <input type="text" class="form-control" placeholder="Color" aria-required="true"
                                    value="" disabled="disabled" id="color">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                              <div class="form-group">
                                <div class="nk-int-st">
                                  <textarea class="form-control auto-size" rows="4" placeholder="Características..."
                                    disabled="disabled" aria-required="true" value="" id="caracte"></textarea>
                                </div>
                              </div>
                            </div>
                            <center>
                              <image src="img/logo/productoo.png" />
                            </center>
                          </div>
                        </div>
                        <div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div><br><br><br><br>
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
    <script src="js/Validaciones/jsFeretro.js"></script>
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

  <script type="text/javascript">
    //REPORTE------------------------------------------------------
    function reporte() {

      idusuario = $('#modelo').val();
      var dominio = window.location.host;
      window.open('http://' + dominio + '/Funesi/notika/green-horizotal/Reportes/ReporteUnicoProducto.php?idusuario=' +
        idusuario, '_blank');


    }
  </script>

  <!-------------------------------------------------------------------------------------->
  <form method="POST" id="cambioCli">
    <input type="hidden" name="id" id="idCli" />
    <input type="hidden" name="bandera" id="banderaCli" />
    <input type="hidden" name="valor" id="valorCli" />
  </form>
  </div>
  <!-- DAR DE BAJA -->
  <script type="text/javascript">
    function baja(id) {
      swal({
        title: '¿Está seguro en dar de baja?',
        // text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No',

      }).then((result) => {
        if (result.value) {
          $('#idCli').val(id);
          $('#banderaCli').val('cambio');
          $('#valorCli').val('0');
          var dominio = window.location.host;
          $('#cambioCli').attr('action', 'http://' + dominio +
            '/Funesi/notika/green-horizotal/Controladores/FeretrosC.php');
          $('#cambioCli').submit();
        } else {

        }
      })
    }
    //DAR DE ALTA
    function alta(id) {
      swal({
        title: '¿Está seguro en dar de alta?',
        // text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No',

      }).then((result) => {
        if (result.value) {
          $('#idCli').val(id);
          $('#banderaCli').val('cambio');
          $('#valorCli').val('1');
          var dominio = window.location.host;
          $('#cambioCli').attr('action', 'http://' + dominio +
            '/Funesi/notika/green-horizotal/Controladores/FeretrosC.php');
          $('#cambioCli').submit();
        } else {

        }
      })
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