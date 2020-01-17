<?php 
session_start();
include("../Confi/Conexion.php");
$conexion=conectarMysql();

$bandera=$_POST["bandera"];

if ($bandera=="GuardarFeretro") {
    $nombre=$_POST["modelo"];
    $color=$_POST["color"];
    $material=$_POST["material"];
    $stock=$_POST["stock"];
    $precio=$_POST["precio"];
    $caracte=$_POST["caracte"];

    $sql="INSERT INTO producto (nombre_Pro, color_Pro, material_Pro, caracteristicas, estado_Pro) VALUES 
('$nombre', '$color', '$material', '$caracte', 1)";

    mysqli_query($conexion, $sql) or die ("Error no conectai".mysqli_connect_error());
    //mi codigo para agregar el producto en el inventario 
    $sacar = mysqli_query($conexion, "SELECT * from invetario");
            while ($fila = mysqli_fetch_array($sacar)) {  
                 $id=$fila['precioVenta'];  
                } 
    $inventatiroAgg="INSERT INTO compras(unitario_Com)VALUES
    ('$precio')";
    mysqli_query($conexion, $inventatiroAgg) or die ("Error no conectae".mysqli_connect_error());
    //******************    
    $sacar = mysqli_query($conexion, "SELECT * from producto");
    while ($fila = mysqli_fetch_array($sacar)) {  
         $id=$fila['idProducto'];  
        } 
$inventatiroAgg="INSERT INTO invetario(idProducto,stockMinimo,precioVenta)VALUES
('$id','$stock','$precio')";
mysqli_query($conexion, $inventatiroAgg) or die ("Error no conectae".mysqli_connect_error());

    echo"
<script language='javascript'>alert('Registro de Feretro Exitoso!!')
 window.location='/Funesi/notika/green-horizotal/RegFeretro.php'
    </script>";
 //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql="INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró un feretro')";
    mysqli_query($conexion, $sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
}

if ($bandera=="EditarEquipo") {
    $nombre=$_POST["nombre"];
    $categoria=$_POST["categoria"];
    $stock=$_POST["stock"];
    $caracte=$_POST["caracte"];
    $idEquipo=$_POST["idEquipo"];
    $sql="UPDATE producto set nombre_Pro='$nombre', stock_Pro='$stock', caracteristicas='$caracte' where idProducto ='$idEquipo'";

    mysqli_query($conexion, $sql) or die ("Error no conectai".mysqli_connect_error());
    echo"
<script language='javascript'>alert('Registro Editado de Equipo Exitoso!!')
 window.location='/Funesi/notika/green-horizotal/ListaEquipo.php'
    </script>";
 //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql="INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Edito un equipo')";
    mysqli_query($conexion, $sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
}

if ($bandera=="cambio") {

	$sql = "UPDATE producto set tipo_Prod='".$_POST["valor"]."' where idProducto = '".$_POST["id"]."'";
	$mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
	$aux = 0;
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un equipo')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	}else{
		$aux = 1;
	//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un equipo')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
	}
	header("location: /Funesi/notika/green-horizotal/ListaEquipo.php?tipo=".$aux."");
	
 }
?>