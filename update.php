<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$id_usuario = $_POST['id_usuario'];
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE usuarios SET nombre_completo='$nombre_completo', correo='$correo', id_usuario='$id_usuario', username='$username', password='$password' 
WHERE username='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>