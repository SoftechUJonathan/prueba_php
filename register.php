<?php
include("config.php");
include("session.php");

$id_usuario = $_POST['id_usuario'];
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios(id_usuario, nombre_completo, correo, username, password) 
VALUES('$id_usuario', '$nombre_completo', '$correo', '$username', '$password')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>