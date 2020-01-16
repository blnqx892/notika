<?php
session_start();
if (isset($_SESSION['usuarioActivo'])) {
  if ($_SESSION['usuarioActivo']) {
?>
<?php 
$idusu = $_GET["idusuario"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script language="javascript">
	function imprimir(){
		if(!window.print){
			alert("El navegador no permite la impresion..");
			return;
			}
			else{
				document.frmTesis.IM.style.visibility="hidden";
				window.print();
				document.frmTesis.IM.style.visibility="visible";
			}
		}
</script>
</head>
<?php $material = array(1 => "Madera", 2 => "Metal"); ?>
<body>
<table width="685" border="0" align="center">
  <tr>
    <td width="5"><img src="../img/logo/funlogo_opt.png" ></td>
    <td  align="center"></td>
    <td width="5"><img src="../img/logo/funlogo_opt.png" ></td>
  </tr>
  </tr>
  <tr align="center">
  <td width="5"><img src="" ></td>
    <td  align="center">
    <span class="titulos"><p style="font-size: 20px; font-family: sans-serif">FUNERARIA MONTERROSA <br> Calle aaaaa, local #99, frente a Plazuela El Pilar, San Vicente   <br>   Teléfono: 9999-9999</p>
    <p></p>
    <p></p></span></td>
    <td width="5"><img src="" ></td>
  </tr>
  <tr align="center">
    <td colspan="2"><strong class="titulos">REPORTE DE USUARIOS</strong></td>
  </tr>
  <tr align="left">
  
  <td width="5"><img src="" ></td>
    <td>Fecha Impresión: <?php echo date("d/m/Y"); ?>
    <br>
    Hora Impresión: <?php
		date_default_timezone_set('America/El_Salvador');
		$date = new DateTime();
	     echo $date->format('h:i:s A');
		?></td>
  </tr>
</table><br>
<?php 
 include("../Confi/Conexion.php");
 $conexion = conectarMysql();
 $aux = $idusu;
 $sql1 = "SELECT * FROM usuarios where usuario = '$aux'";
 $usuario = mysqli_query($conexion, $sql1) or die("No se puedo ejecutar la consulta");
 $usuario = mysqli_fetch_assoc($usuario);
 $nusu = $usuario['usuario'];?>
  <table width="685" border="0" align="center">
    <tr align="center">
      
      <td ><strong class="titulos" align="center">USUARIO: </strong>
        <?php echo $usuario['usuario']?>
      </td>
    </tr>
    </table>
  <br>
<table width="700" border="1" align="center" rules="all">
  <tr bgcolor="#CCCCCC">
    <td width="29" align="center" bgcolor="#20CDBD" class=""><strong>N°</strong></td>
    <td width="87" align="center" bgcolor="#20CDBD" class="formatoTabla">Modelo</td>
    <td width="87" align="center" bgcolor="#20CDBD" class="formatoTabla">Material</td>
    <td width="87" align="center" bgcolor="#20CDBD" class="formatoTabla">Color</td>
    <td width="87" align="center" bgcolor="#20CDBD" class="formatoTabla">Características</td>
    </tr>
 
<?php
$contador=1;
//$sql = "select * from proveedor order by nombre_prov ASC";
  $consulta = mysqli_query($conexion,$sql1);

  while($fila=mysqli_fetch_array($consulta))

  {
  ?>
  <tr align="left" class="">
    <td bgcolor="" align="center"><?php echo $contador;?></td>
    <td bgcolor="" align="center"><?php echo $fila[1];?></td>
    <td bgcolor="" align="center"><?php echo $material[$fila[2]];?></td>
    <td bgcolor="" align="center"><?php echo $fila[3];?></td>
    <td bgcolor="" align="center"><?php echo $fila[4];?></td>
  </tr>
  <?php $contador++;
}
  ?>
</table>
<form name="frmTesis" method="get" action="" id="frmTesis">
  <p align="center"><input class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="font-size:17px;" type="button" name="IM" id="IM" value="IMPRIMIR" onClick="imprimir()"></p>
</form>
<p>&nbsp;</p>
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
