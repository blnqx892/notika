<?php
include("../Confi/Conexion.php");
//$conexion = conectarMysql();
$conexion = conectarMysql();
session_start();

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $contra = (isset($_POST['password'])) ? $_POST['password'] : '';

    $sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND id_tipo=1";
    $consulta= mysqli_query($conexion,$sql)or die ("Error a Conectar en la BD ".mysqli_connect_error());
    if ($row= mysqli_fetch_assoc($consulta)) {
        $hash=$row['password'];
        //echo $hash;
	if (password_verify($contra, $hash)) {
        $_SESSION['usuarioActivo']=$row;
        echo"
        <script language='javascript'>
        alert('EXITO!! Bienvenido')
        type: 'danger'
        window.location='/Funesi/notika/green-horizotal/Principal.php'
        </script>";

        //////////CAPTURA DATOS PARA BITACORA
$usuari=$_SESSION['usuarioActivo']['usuario'];
$sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Inicio Sesión')";
mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
///////////////////////////////////////////////
       // header("location: /Funesi/notika/green-horizotal/Principal.php");
        
	//	$data = 'ok';
		//echo json_encode($data);//en codigo.js se mostrará exito por tanto ingresará a Principal.php
	} else {
        echo"
            <script language='javascript'>
            alert('ERROR!! Usuario y/o Contraseña Son Invalidos')
            window.location='/Funesi/notika/green-horizotal/Login.php'
            </script>";
        //header("location: /Funesi/notika/green-horizotal/Login.php");
        
	//	$data = null;
		//echo json_encode($data);//en codigo.js se mostrará null
    }
}else {
    echo"
    <script language='javascript'>
    alert('ERROR!! Usuario y/o Contraseña Son Invalidos')
    window.location='/Funesi/notika/green-horizotal/Login.php'
    </script>";
 // header("location: /Funesi/notika/green-horizotal/Login.php");
 // $data = null;
//echo json_encode($data);
}
?>