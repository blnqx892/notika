<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();
session_start();

    $usuario = $_POST["usuario"];
    $contra=$_POST["contrasena"];
       ///ALGORITMO DE ENCRIPTACION BLOWFISH, METODO PASSWORD_HASH
      $contrasena=password_hash($contra, PASSWORD_DEFAULT);
       /////////////////////////////////////////////////////////
    //$contrasena = password_hash($_POST["contrasena"]);
    $sql="SELECT * FROM usuario WHERE usuario_Usu='$usuario' AND estado_Usu=2";
    $consulta= mysqli_query($conexion,$sql)or die ("Error a Conectar en la BD ".mysqli_connect_error());
    


    if ($row= mysqli_fetch_assoc($consulta)) {
    	if ($row['contrasena_Usu']== $contrasena) {
            header("location: /Funesi/notika/green-horizotal/Principal.php");
            
        
    	}else{
            header("location: /Funesi/notika/green-horizotal/Login.php");
            alert("¡noo entra!");
        return true;
    	}
    }else{
        header("location: /Funesi/notika/green-horizotal/Login.php");
        alert("¡noo entra da error!");
        return true;
    }
?>
