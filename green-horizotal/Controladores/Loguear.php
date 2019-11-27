

<?php
include("../Confi/Conexion.php");
//$conexion = conectarMysql();
$conexion = conectarMysql();
session_start();

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $contra = (isset($_POST['password'])) ? $_POST['password'] : '';

    $sql="SELECT * FROM usuario WHERE usuario_Usu='$usuario' AND tipo_Usu=1";
    $consulta= mysqli_query($conexion,$sql)or die ("Error a Conectar en la BD ".mysqli_connect_error());
    if ($row= mysqli_fetch_assoc($consulta)) {
        $hash=$row['contrasena_Usu'];
	if (password_verify($contra, $hash)) {
		// code...
		$data = 'exitoo';
		echo json_encode($data);//en codigo.js se mostrará exito por tanto ingresará a Principal.php
	} else {
		// code...
		$data = null;
		echo json_encode($data);//en codigo.js se mostrará null
    }
    $data = $sql;
echo json_encode($data);
}
?>
