<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();

$sql="SELECT DISTINCT (usuario_Usu) FROM bitacora";
$result = mysql_query($conexion,$sql) or die("No se puedo ejecutar la consulta");

while (($fila = mysql_fetch_array($result))) {
    echo '<option value="'.$fila["usuario_Usu"].'">'.$fila["usuario_Usu"].'</option>';
}
?>
