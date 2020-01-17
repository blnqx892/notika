<?php
session_start();
include("../Confi/Conexion.php");
$conexion=conectarMysql();

$bandera=$_POST["bandera"];

if ($bandera=="GuardarPaquete") {
    $nombre=$_POST["nombrePaq"];
    $feretro=$_POST["feretro"];
    $servicios=$_POST["servicios"];
    $precio=$_POST["precio"];
    $sql="INSERT INTO paquete (nombre_paq, idProducto,servicios,precio_paq,) VALUES 
    ('$nombre', '$feretro', '$servicios', '$precio')";

    mysqli_query($conexion, $sql) or die ("Error no conectai".mysqli_connect_error());
    echo"
<script language='javascript'>alert('Registro de Paquete Exitoso!!')
 window.location='/Funesi/notika/green-horizotal/Catalogo.php'
    </script>";
 //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql="INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró un paquete')";
    mysqli_query($conexion, $sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
}
?>