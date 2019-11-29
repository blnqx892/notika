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
                    <h2>REGISTRAR PROVEEDOR</h2>
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
  <form action="Controladores/ProveedorC.php" method="POST" id="guardarProve" autocomplete="off"> 
  <input type="hidden" value="GuardarProveedor" name="bandera">
    <div class="inbox-area">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-element-list">
            <div class="typography-hd-cr-4">
              <h4>Datos de la Empresa</h4>
            </div>
            <hr style="width:100%;border-color:light-gray 25px;"><br>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                  <span class="fas fa-building"></span>
                </div>
                <div class="nk-int-st">
                  <input type="text"  class="form-control" placeholder="Nombre de la Empresa" name="nomEmp" required id="nomEmp" aria-hidden="true">
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
              <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                  <span class="fas fa-map-marker-alt"></span>
                </div>
                <div class="nk-int-st">
                  <input type="text" class="form-control" placeholder="Dirección" name="dirEmp" required id="dirEmp" aria-hidden="true">
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                  <span class="fas fa-phone-alt"></span>
                </div>
                <div class="nk-int-st">
                  <input type="text" class="form-control" placeholder="Telf: 9999-9999" name="telEmp"  id="telEmp" data-mask="9999-9999" aria-hidden="true" required>
                </div>
              </div>
            </div><br><br><br><br><br>
            <div class="typography-hd-cr-4">
              <h4>Datos Personales del Responsable</h4>
            </div>
            <hr style="width:100%;border-color:light-gray 25px;"><br>
            <div class="col-lg-4 col-md-4 col-sm- col-xs-12">
              <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                  <span class="icon-user"></span>
                </div>
                <div class="nk-int-st">
                  <input type="text" class="form-control" placeholder="Nombre Completo" name="nomRes" required id="nomRes" aria-hidden="true">
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                  <span class="fas fa-phone-alt"></span>
                </div>
                <div class="nk-int-st">
                  <input type="text" required class="form-control" placeholder="Telf: 9999-9999" name="telRes" id="telRes" data-mask="9999-9999" aria-hidden="true">
                </div>
              </div>
            </div><br><br><br><br><br>
            <center>
              <div class="dialog-pro dialog ">
              <button class="btn btn-success notika-btn-success" type="Submit">Guardar <i
                      class="notika-icon notika-checked"></i></button>
                <button class="btn btn-danger notika-btn-danger">Cancelar <i
                    class="notika-icon notika-close"></i></button>
              </div>
            </center>
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

     <!-- Input Mask JS
    ============================================ -->
  <script src="js/jasny-bootstrap.min.js"></script>

      <!--  notification JS
		============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>

    <script src="../green-horizotal/js/Validaciones/Mensajes.js"></script>

    <?php
if (isset($_SESSION['mensaje'])) {
   echo ("<script type='text/javascript'>
    noti('".$_SESSION['mensaje']."');
</script>");
   unset($_SESSION['mensaje']);
}
?>


  <script src="../green-horizotal/js/Validaciones/ValidaProveedor.js"></script>

    <script>
      $("#save-me").click(function(e){
        e.preventDefault();
        $.ajax({
          type: 'GET',
          url: '/Funesi/notika/green-horizotal/Controladores/Prove_val.php',
          data: {
            telefono: $("#telEmp").val()
          },
          success: function(r){
            console.log(r);
            if(r != 0){
              alert('El registro ya existe');
            }else{
              $("#fform").submit();
            }
          }
        });

      });
    </script>
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