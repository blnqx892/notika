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
                    <h2>BITACORA</h2>
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
  <?php 
        $conexion=mysqli_connect('localhost','root', '', 'funesi');
        $sql="SELECT * from bitacora order by idBitacora DESC";
        $bitacoras= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>
  <!-- Data Table area Start-->
  <div class="data-table-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
          <div class="inbox-left-sd">
            <div class="inbox-status">
              <ul class="inbox-st-nav inbox-ft">
                <li><button class="btn btn-teal teal-icon-notika btn-reco-mg btn-button-mg" data-toggle="modal"
                    data-target="#modalReporte">Reporte
                    <i class="fas fa-print"></i></button></li>
              </ul>
            </div>
            <hr>
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <div class="data-table-list">
            <div class="basic-tb-hd">
              <h2>BITACORA</h2>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Usuario</th>
                    <th>Actividad</th>
                  </tr>
                </thead>
                <tbody>
                  <?php While ($bitacora = mysqli_fetch_assoc($bitacoras)) {
                         date_default_timezone_set('America/El_Salvador');
                         ?>
                  <tr>
                    <td><?php echo date('d/m/Y',strtotime($bitacora['sesionInicio'])) ?></td>
                    <td><?php echo date('H:i:s A',strtotime($bitacora['sesionInicio'])) ?></td>
                    <td><?php echo $bitacora['usuario_Usu'] ?></td>
                    <td><?php echo $bitacora['actividad'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- INICIO MODAL REPORTE-->
            <div class="modal fade" id="modalReporte" tabindex="-1" role="dialog" aria-hidden="true"
              >
              <div class="modal-dialog modal-large">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <center>
                      <div class="typography-hd-cr-4">
                        <h3>REPORTE DE BITACORA</h3>
                      </div>
                    </center>
                    <div class="typography-hd-cr-4">
                    </div>
                    <hr style="width:100%;border-color:light-gray 25px;">
                    <div class="cmp-tb-hd bcs-hd">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list">
                          <h4>Por:</h4>
                            <label>
                              <input type="button" id="r1" value="  " name="a" onclick="radioSeleccionado(1);"> Usuario
                            </label>
                            <label>
                              <input type="button" id="r2" value="  " name="a" onclick="radioSeleccionado(2);"> Fecha
                            </label>
                        </div>
                      </div>
                      <hr style="width:100%;border-color:light-gray 25px;">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <?php 
                            $sql="SELECT * from usuarios where estado_Usu = 1 order by nombre ASC";
                            $usuarios = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); 
                        ?>
                        <div class="nk-int-mk sl-dp-mn">
                          <h5>Usuario</h5>
                        </div>
                        <div class="chosen-select-act fm-cmp-mg">
                          <select class="chosen" data-placeholder="Seleccione" id="clientesID" name="id_Usuario">
                            <option value=""></option>
                            <?php
                                   While($usuario=mysqli_fetch_array($usuarios)){
                                     echo '<option value="'.$usuario['id'].'">'.$usuario['usuario'].'</option>';
                                     }?>
                          </select>
                        </div><br>
                      </div>
                      <!--<button type="button" name="button" onclick="reporte()">Generar Reporte</button>-->
                    </div><br><br><br><br>
                    <hr style="width:100%;border-color:light-gray 25px;">
                    <div class="i-checks" align="center">
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
                          <h5>Desde</h5>
                          <div class="input-group date nk-int-st">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" value="<?php echo $fech?>" name="fecha" id="fecha1"
                              aria-required="true">
                          </div>
                        </div>
                      </div>
                      <input type="hidden" id="tiporeporte" value="1" />
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_2">
                          <h5>Hasta</h5>
                          <div class="input-group date nk-int-st">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" value="<?php echo $fech?>" id="fecha2"
                              aria-required="true">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><br><br><br><br><br>
                  <button class="btn btn-success notika-btn-success" type="button" name="button"
                    onclick="reporte()">Generar <i class="fas fa-receipt"></i></button>
                </div>
              </div>
            </div>
            <!-- FIN MODAL REPORTE-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--FIN TABLA-->

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

  <script src="js/Validaciones/codigo.js"></script>

  <script type="text/javascript">
    //REPORTE------------------------------------------------------
    function reporte() {
      desde = $('#fecha1').val();
      hasta = $('#fecha2').val();

      idusuario = $('#clientesID').val();
      tipor = $('#tiporeporte').val();

      desde = desde.split('/').reverse().join('-');
      hasta = hasta.split('/').reverse().join('-');

      if (tipor == '1' && idusuario == "") {
        notaError("Debe seleccionar un usuario");

      } else if (desde > hasta) {
        notaError("Verifique las fecha");
      } else {
        var dominio = window.location.host;
        window.open('http://' + dominio + '/Funesi/notika/green-horizotal/Reportes/ReporteBitacora.php?desde=' + desde +
          '&hasta=' +
          hasta + '&idusuario=' + idusuario + '&tipor=' + tipor, '_blank');
      }

    }
  </script>


  <!--  chosen JS
		============================================ -->
  <script src="js/chosen/chosen.jquery.js"></script>
  <!-- bootstrap select JS
    ============================================ -->
  <script src="js/bootstrap-select/bootstrap-select.js"></script>
  <!-- bootstrap select JS
		============================================ -->
  <script src="js/bootstrap-select/bootstrap-select.js"></script>
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