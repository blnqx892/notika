<?php
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
       
        $sql = "INSERT INTO empleado (fecha_Emple, Dui_Emple, nombres_Emple, apellidos_Emple, telefono_Emple, direccion_Emple, cargo_Emple) VALUES 
        ('$fechaE','$duiE','$nombresE','$apellidosE','$telefonoE','$direccionE','$cargoE')";
    
        mysqli_query($conexion,$sql) or die ("Error no conectaaa".mysqli_connect_error());
    
        #$_SESSION['mensaje'] ="Registro guardado exitosamente";
              header("location: /Funesi/notika/green-horizotal/RegEmpleado.php");
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
                
                header("location: /Funesi/notika/green-horizotal/ListaEmpleado.php");
        }
?>