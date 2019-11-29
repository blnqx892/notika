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
       
       $sql = "INSERT INTO usuarios (usuario,password,nombre,apellido_Usu,correo,Dui_Usu,id_tipo,estado_Usu,activacion) VALUES 
       ('$usuario','$contrasenia','$nombre','$apellido','$correo','$dui','$rol',1,1)";
   
       mysqli_query($conexion,$sql) or die ("Error no conectaa".mysqli_connect_error());
      // header("location: /Funesi/notika/green-horizotal/RegUsuario.php");
      echo"
	<script language='javascript'>
	alert('Registro de usuario Exitoso!!')
	window.location='/Funesi/notika/green-horizotal/RegUsuario.php'
	</script>";

//////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registro a un usuario')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
    }

    if ($bandera=="EditarUsuario") {
        $Duiu = $_POST["duius"];
        $nombreu = $_POST["nombreus"];
        $apellidou = $_POST["apellidous"];
        $correou = $_POST["correous"];
        $usuariou = $_POST["usuarious"];
        $idusu = $_POST["idcliente"];
        $sql = "UPDATE usuarios set nombre='$nombresu',apellidos_Usu='$apellidosu',correo='$correou',Usuario='$usuariou' where id ='$idusu'";
    
        mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
        echo"
        <script language='javascript'>
        alert('Registro Editado de Usuario Exitoso!!')
        window.location='/Funesi/notika/green-horizotal/RegUsuario.php'
        </script>";
        //header("location: /Funesi/notika/green-horizotal/.php");
        //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Edito un usuario')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
    }
    
    if ($bandera=="cambio") {
    
        $sql = "UPDATE usuarios set estado_Usu='".$_POST["valor"]."' where id = '".$_POST["id"]."'";
        $mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
        if ($_POST["valor"]==1) {
        $aux = 0;
        //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un usuario')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
        }else{
            $aux = 1;
        //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un usuario')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
        }
        header("location: /Funesi/notika/green-horizotal/RegUsuario.php?tipo=".$aux."");
        
     }
    
?>