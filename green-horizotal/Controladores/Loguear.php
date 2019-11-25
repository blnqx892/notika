<?php
include("../Confi/Conexion.php");
$conexion = conectarMysql();
session_start();

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $contra = (isset($_POST['password'])) ? $_POST['password'] : '';
   /// $contra=$_POST["contrasenaa"];
       ///ALGORITMO DE ENCRIPTACION BLOWFISH, METODO PASSWORD_HASH
      //$contrasena=password_hash($contra, PASSWORD_BCRYPT, ['cost' => 11]);
       /////////////////////////////////////////////////////////
    $sql="SELECT * FROM usuario WHERE usuario_Usu='$usuario' AND tipo_Usu=1";
    $consulta= mysqli_query($conexion,$sql)or die ("Error a Conectar en la BD ".mysqli_connect_error());
    if ($row= mysqli_fetch_assoc($consulta)) {
        $hash=$row['contrasena_Usu'];
        ///ALGORITMO DE CESINCRIPTACION METODO PASSWORD_VERIFY
    	if (password_verify($contra, $hash)) {
            $data=$consulta->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['usuarioActivo']=$usuario;
            //header("location: /Funesi/notika/green-horizotal/Principal.php");
    	}else{
            $_SESSION['usuarioActivo']=null;
            $data=null;
            //header("location: /Funesi/notika/green-horizotal/Login.php");
        }
        print json_encode($data);
        $conexion=null;
   // }else{
     //   header("location: /Funesi/notika/green-horizotal/Login.php");
    //}
?>
