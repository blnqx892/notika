<?php
include("../Confi/Conexion.php");
echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<script  src = "https://cdn.jsdelivr.net/npm/sweetalert2@9"> </script>';
//$conexion = conectarMysql();
$conexion = conectarMysql();
session_start();

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $contra = (isset($_POST['password'])) ? $_POST['password'] : '';

    //$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND id_tipo=1";
    $sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
    $consulta= mysqli_query($conexion,$sql)or die ("Error a Conectar en la BD ".mysqli_connect_error());
    if ($row= mysqli_fetch_assoc($consulta)) {
        $hash=$row['password'];
        //echo $hash;
	if (password_verify($contra, $hash)) {
        $_SESSION['usuarioActivo']=$row;

       /* echo"
        <script language='javascript'>
        alert('EXITO!! Bienvenido')
        type: 'danger'
        window.location='/Funesi/notika/green-horizotal/Principal.php'
        </script>";*/

        echo "<script language='javascript'>
            $(document).ready(function () {
                setTimeout(function () {
                    Swal.fire({
                        title: 'Excelente',
                        text: '¡¡¡Bienvenido!!!',
                        icon: 'success',
                        showCancelButton: true,
                        confirmButtonText: 'Aceptar'
                      }).then((result) => {
                        if (result.value) {
                            window.location='/Funesi/notika/green-horizotal/Principal.php';
                        }
                      })
                }, 1000);
            });
            
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
        echo "<script language='javascript'>
            $(document).ready(function () {
                setTimeout(function () {
                    Swal.fire({
                        title: 'ERROR',
                        text: 'Usuario y/o Contraseña son incorrectas, vuelve a intentar',
                        icon: 'error',
                        showCancelButton: true,
                        confirmButtonText: 'Aceptar'
                      }).then((result) => {
                        if (result.value) {
                            window.location='/Funesi/notika/green-horizotal/Login.php';
                        }
                      })
                }, 1000);
            });
            
            </script>";
        /*echo"
            <script language='javascript'>
            alert('ERROR!! Usuario y/o Contraseña Son Invalidos')
            window.location='/Funesi/notika/green-horizotal/Login.php'
            </script>";*/
        //echo "<script language='javascript'>
        //Swal('Error');
        //</script>";
        //header("location: /Funesi/notika/green-horizotal/Login.php");
        
	//	$data = null;
		//echo json_encode($data);//en codigo.js se mostrará null
    }
}else {
    /*echo"
            <script language='javascript'>
            alert('ERROR!! Usuario y/o Contraseña Son Invalidos')
            window.location='/Funesi/notika/green-horizotal/Login.php'
            </script>";*/
            echo "<script language='javascript'>
            $(document).ready(function () {
                setTimeout(function () {
                    Swal.fire({
                        title: 'Error',
                        text: 'Usuario o contraseña incorrecto',
                        icon: 'error',
                        showCancelButton: true,
                        confirmButtonText: 'Aceptar'
                      }).then((result) => {
                        if (result.value) {
                            window.location='/Funesi/notika/green-horizotal/Login.php';
                        }
                      })
                }, 1000);
            });
            
            </script>";
 // header("location: /Funesi/notika/green-horizotal/Login.php");
 // $data = null;
//echo json_encode($data);
}
?>