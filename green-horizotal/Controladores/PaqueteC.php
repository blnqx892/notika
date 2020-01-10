<?php
session_start();
include("../Confi/Conexion.php");
$conexion=conectarMysql();

$bandera=$_POST["bandera"];

if ($bandera=="GuardarPaquete") {
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $feretro=$_POST["feretro"];
    $sillas=$_POST["sillas"];
    $cortinas=$_POST["cortinas"];
    $crucifijos=$_POST["crucifijos"];
    $lamparas=$_POST["lamparas"];
    $cafeteras=$_POST["cafeteras"];
    $canopi=$_POST["canopi"];
    $candela=$_POST["candela"];
    $floreros=$_POST["floreros"];
    $sql="INSERT INTO paquete (nombre_paq, precio_paq,idProducto,sillas_paq,cortinas_paq,crucifijos_paq,lamparas_paq,cafetera_paq,canopies_paq,candelabros_paq,floreros_paq) VALUES 
    ('$nombre', '$precio','$feretro', '$sillas', '$cortinas', '$crucifijos', '$lamparas', '$cafeteras', '$canopi', '$candela', '$floreros')";

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