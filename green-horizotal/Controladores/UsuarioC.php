<?php 
session_start();
    include("../Confi/Conexion.php");
    $conexion = conectarMysql();
    
    $bandera = $_POST["bandera"];

    if ($bandera=="GuardarUsuario") {
       $usuario=$_POST["usuario"];
        ///ALGORITMO DE ENCRIPTACION BLOWFISH, METODO PASSWORD_HASH
       $contrasenia=password_hash($_POST["contra1"],PASSWORD_DEFAULT);
       /////////////////////////////////////////////////////////
       $nombre=$_POST["nombre"];
       $apellido=$_POST["apellido"];
       $correo=$_POST["correo"];
       $dui=$_POST["dui"];
       $rol=$_POST["rol"];
       
       $sql = "INSERT INTO usuarios (usuario,password,nombre,apellido_Usu,correo,Dui_Usu,id_tipo,estado_Usu) VALUES 
       ('$usuario','$contrasenia','$nombre','$apellido','$correo','$dui','$rol',1)";
   
       mysqli_query($conexion,$sql) or die ("Error no conectaa".mysqli_connect_error());
      // header("location: /Funesi/notika/green-horizotal/RegUsuario.php");
      echo"
	<script language='javascript'>
	alert('Registro de usuario Exitoso!!')
	window.location='/Funesi/notika/green-horizotal/RegUsuario.php'
	</script>";

//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registro a un usuario')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
    }
?>