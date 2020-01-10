<?php
session_start();
include("../Confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];

if ($bandera=="GuardarEmpleado") {
    
        $fechaE = $_POST["fecha"];
        $fechaE =explode("/",$fechaE);
        $fechaE=$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0];
        $duiE = $_POST["dui"];
        $nombresE = $_POST["nombres"];
        $apellidosE = $_POST["apellidos"];
        $direccionE = $_POST["direccion"];
        $telefonoE = $_POST["telefono"];
        $cargoE = $_POST["cargo"];
       
        $sql = "INSERT INTO empleado (fecha_Emple, Dui_Emple, nombres_Emple, apellidos_Emple, telefono_Emple, direccion_Emple, cargo_Emple,estado_Emple) VALUES 
        ('$fechaE','$duiE','$nombresE','$apellidosE','$telefonoE','$direccionE','$cargoE',1)";
    
        mysqli_query($conexion,$sql) or die ("Error no conectaaa".mysqli_connect_error());
    
        #$_SESSION['mensaje'] ="Registro guardado exitosamente";
            //  header("location: /Funesi/notika/green-horizotal/RegEmpleado.php");
            echo"
            <script language='javascript'>
            alert('Registro de Empleado Exitoso!!')
            window.location='/Funesi/notika/green-horizotal/RegEmpleado.php'
            </script>";
    //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Registró un empleado')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
}

        if ($bandera=="EditarEmpleado") {
                $nombresE = $_POST["nombresb"];
                $apellidosE = $_POST["apellidosb"];
                $direccionE = $_POST["direccionb"];
                $telefonoE = $_POST["telefonob"];
                $cargoE = $_POST["cargob"];
                $idempleado = $_POST["idempleado"];
                $sql = "UPDATE empleado set nombres_Emple='$nombresE',apellidos_Emple='$apellidosE',direccion_Emple='$direccionE',telefono_Emple='$telefonoE',cargo_Emple='$cargoE' where idEmpleado ='$idempleado'";
        
                mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
                
                //header("location: /Funesi/notika/green-horizotal/ListaEmpleado.php");
                echo"
            <script language='javascript'>
            alert('Registro Editar Empleado Exitoso!!')
            window.location='/Funesi/notika/green-horizotal/ListaEmpleado.php'
            </script>";
    //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Edito un empleado')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
        }

        if ($bandera=="cambio") {

                $sql = "UPDATE empleado set estado_Emple='".$_POST["valor"]."' where idEmpleado = '".$_POST["id"]."'";
                $mostrar = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
                if ($_POST["valor"]==1) {
                $aux = 0;
    //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un empleado')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
                //	$_SESSION['mensaje'] ="Cliente dado de alta exitosamente";
        
            //////////CAPTURA DATOS PARA BITACORA
           // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
           // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de alta a un cliente')";
           // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
            ///////////////////////////////////////////////
                }else{
                        $aux = 1;
                        //////////CAPTURA DATOS PARA BITACORA
    $usuari=$_SESSION['usuarioActivo']['usuario'];
    $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un empleado')";
    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
    ///////////////////////////////////////////////
                //	$_SESSION['mensaje'] ="Cliente dado de baja exitosamente";
        
            //////////CAPTURA DATOS PARA BITACORA
           // $usuari=$_SESSION['usuarioActivo']['usuario_Usu'];
           // $sql = "INSERT INTO bitacora (usuario_Usu,sesionInicio,actividad) VALUES ('$usuari',now(),'Dio de baja a un cliente')";
           // mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD guardo bita".mysqli_connect_error());
                }
                header("location: /Funesi/notika/green-horizotal/ListaEmpleado.php?tipo=".$aux."");
                
         }
?>