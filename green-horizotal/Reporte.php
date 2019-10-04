
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="../assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="../assets/package/dist/sweetalert2.css" rel="stylesheet">

<!-- Toastr style -->
<link href="../assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

<!-- Gritter -->
<link href="../assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="../assets/css/animate.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/pNotify/pnotify.custom.min.css" rel="stylesheet">
<script src="../assets/package/dist/sweetalert2.js"></script>

<link href="../assets/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="../assets/css/plugins/chosen/chosen.css" rel="stylesheet">
<link href="../assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="../assets/css/plugins/cropper/cropper.min.css" rel="stylesheet">
<link href="../assets/css/plugins/switchery/switchery.css" rel="stylesheet">
<link href="../assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
<link href="../assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="../assets/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
<link href="../assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<link href="../assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="../assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
<link href="../assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<link href="../assets/css/plugins/select2/select2.min.css" rel="stylesheet">
<link href="../assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
<link href="../assets/css/animate.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
<table width="685" border="0" align="center">
  <tr>
    <td width="5"><img src="" width="150" height="75"></td>
    <td  align="center"><br><br><br><br>
    <span class="titulos"><p style="font-size: 25px; font-family: sans-serif">FUNERARIA MONTERROSA</p>
    <p>2a Calle Poniente, Frente a Plazuela el Pilar, San Vicente.</p>
    <p>Teléfono: 2393-4392</p></span></td>
    <td width="5"><img src="" width="150" height="75"> </td>
  </tr>
  <tr align="center">
    <td colspan="2"><strong class="titulos">REPORTE DE BITACORA</strong></td>
  </tr>
  <tr align="right">
    <td>&nbsp;<br></td>
    <td> <br> FECHA IMPRESION:  <?php echo date("d-m-Y"); ?>
    <br>
    HORA  IMPRESION:   <?php
		date_default_timezone_set('America/El_Salvador');
		$date = new DateTime();
	     echo $date->format('h:i:s A');
		?></td>
  </tr>
</table>
<br>
<table width="700" border="1" align="center" rules="all">
  <tr bgcolor="#CCCCCC">
    <td width="29" bgcolor="#fcf3b3" class=""><strong>N°</strong></td>
    <td width="87" align="center" bgcolor="#fcf3b3" class="formatoTabla">Fecha y Hora</td>
    <td width="87" align="center" bgcolor="#fcf3b3" class="formatoTabla">Usuario</td>
    <td width="87" align="center" bgcolor="#fcf3b3" class="formatoTabla">Actividad</td>
  </tr>
    
  <tr align="left" class="">
    <td bgcolor="" align="center">9999</td>
    <td bgcolor="" align="center">99/99/9999 - 99:99(AM/PM)</td>
    <td bgcolor="" align="center">asdfghjkl</td>
    <td bgcolor="" align="center">asdfghjkl</td>
  </tr>
</table>
<form name="frmTesis" method="get" action="" id="frmTesis">
  <p align="center"><input class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="font-size:17px;" type="button" name="IM" id="IM" value="IMPRIMIR" onClick="imprimir()"></p>
</form>
</body>
</html>