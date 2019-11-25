<?php 
    include("../Confi/Conexion.php");
    $conexion = conectarMysql();
    
    $bandera = $_POST["bandera"];

    if ($bandera=="GuardarUsuario") {
       $usuario=$_POST["usuario"];
        ///ALGORITMO DE ENCRIPTACION BLOWFISH, METODO PASSWORD_HASH
       $contrasenia=password_hash($_POST["contra1"],PASSWORD_BCRYPT, ['cost' => 11]);
       /////////////////////////////////////////////////////////
       $nombre=$_POST["nombre"];
       $apellido=$_POST["apellido"];
       $correo=$_POST["correo"];
       $dui=$_POST["dui"];
       $rol=$_POST["rol"];
       
       $sql = "INSERT INTO usuario (usuario_Usu,contrasena_Usu,nombre_Usu,apellido_Usu,correo_Usu,Dui_Usu,tipo_Usu,estado_Usu) VALUES 
       ('$usuario','$contrasenia','$nombre','$apellido','$correo','$dui','$rol',1)";
   
       mysqli_query($conexion,$sql) or die ("Error no conectaa".mysqli_connect_error());
       header("location: /Funesi/notika/green-horizotal/RegUsuario.php");
    }
?>