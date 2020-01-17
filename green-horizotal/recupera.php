<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	session_start();
	
	$errors = array();
	
	if(!empty($_POST))
	{
		$email = $mysqli->real_escape_string($_POST['email']);
		
		if(!isEmail($email))
		{
			$errors[] = "Debe ingresar un correo electronico valido";
		}
		
		if(emailExiste($email))
		{			
			$user_id = getValor('id', 'correo', $email);
			$nombre = getValor('nombre', 'correo', $email);
			
			$token = generaTokenPass($user_id);
			
			$url = 'http://'.$_SERVER["SERVER_NAME"].'/FUNESI/notika/green-horizotal/cambia.php?user_id='.$user_id.'&token='.$token;
			
			$asunto = 'Recuperar Password - Sistema de Usuarios';
			$cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";
			
			if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
				echo "Hemos enviado un correo electronico a las direcion $email para restablecer tu password.<br />";
				echo "<a href='Login.php' >Iniciar Sesion</a>";
				exit;
			}
			} else {
			$errors[] = "La direccion de correo electronico no existe";
		}
	}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Reestablecer-Funesi</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="css/wave/waves.min.css">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/notika-custom-icon.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- Login Register area Start-->
  <div class="login-content">
    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
      <center>
        <image src="img/logo/funlogo.png" />
      </center>
      <div class="nk-form">
        <h4>Recuperar Contraseña</h4><br>
        <p class="text-left">Ingrese su correo electrónico, espere unos momentos y revise su bandeja de
          entrada.</p>
        <form id="loginform" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
          <div class="input-group">
            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
            <div class="nk-int-st">
              <input class="form-control" placeholder="Correo Electrónico" id="email" type="email" name="email"
                required>
            </div>
          </div><br><br>
          <div>
            <button id="btn-login" type="submit" class="btn btn-success" name="Submit">Enviar</button>
          </div>
        </form>
        <?php echo resultBlock($errors); ?>
      </div>
      
          <a href="Login.php"> <button type="submit" class="btn btn-success" name="Submit">Inicio</button></a>
        
    </div>
  </div>
  



  <!-- Login Register area End-->
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
  <!--  Chat JS
		============================================ -->
  <script src="js/chat/jquery.chat.js"></script>
  <!--  wave JS
		============================================ -->
  <script src="js/wave/waves.min.js"></script>
  <script src="js/wave/wave-active.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/icheck/icheck-active.js"></script>
  <!--  todo JS
		============================================ -->
  <script src="js/todo/jquery.todo.js"></script>
  <!-- Login JS
		============================================ -->
  <script src="js/login/login-action.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>

  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="js/Validaciones/codigo.js"></script>
</body>

</html>