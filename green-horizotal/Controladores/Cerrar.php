<?php
include("../cCnfi/Conexion.php");
$conexion = conectarMysql();
session_start();

session_destroy();
session_unset();
header("location: /Funesi/notika/green-horizotal/Login.php");
?>