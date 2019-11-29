<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	if(empty($_GET['user_id'])){
		header('Location: Login.php');
	}
	
	if(empty($_GET['token'])){
		header('Location: Login.php');
	}
	
	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	$token = $mysqli->real_escape_string($_GET['token']);
	
	if(!verificaTokenPass($user_id, $token))
	{
echo 'No se pudo verificar los Datos';
exit;
	}
	
	
?>
<!doctype html>
<html class="no-js" lang="">
<!--IMPORTE head desde Menu/apertura-->
<?php include("Menu/apertura.php"); ?>
<!--IMPORTE head desde Menu/apertura-->

<body>
  <!-- End Header Top Area -->
  <!-- Breadcomb area Start-->
  <br><br><br><br><br>
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
                    <h2>REESTABLECER CONTRASEÑA -- FUNESI</h2>
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
  <form id="loginform" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
    <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>" />

    <input type="hidden" id="token" name="token" value="<?php echo $token; ?>" />
    <div class="inbox-area">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-element-list">
            <div class="typography-hd-cr-4">
              <h3>Ingrese Contraseña</h3>
            </div>
            <hr style="width:100%;border-color:light-gray 25px;"><br><br><br><br>
            <div class="cmp-tb-hd bcs-hd">

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="form-group ic-cmp-int">
                  <div class="form-ic-cmp">
                    <span class="icon-key"></span>
                  </div>
                  <div class="nk-int-st">
                    <input type="password" required class="form-control" placeholder="Nueva Contraseña" name="password"
                      aria-hidden="true">
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="form-group ic-cmp-int">
                  <div class="form-ic-cmp">
                    <span class="icon-key"></span>
                  </div>
                  <div class="nk-int-st">
                    <input type="password" required class="form-control" placeholder="Repetir Contraseña"
                      name="con_password" aria-hidden="true">
                  </div>
                </div>
              </div>
              <center>
                <div class="dialog-pro dialog">
                  <button class="btn btn-success notika-btn-success" id="btn-login" type="submit">Modificar <i
                      class="notika-icon notika-checked"></i></button>
                </div>
              </center>
            </div>

          </div>
        </div>
      </div><br><br><br><br><br><br><br><br><br>
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
</body>

</html>