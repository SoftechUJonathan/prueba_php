<?php
include("config.php");
include("session.php");

$id_cuenta = $_POST['id_cuenta'];
$numero_cuenta = $_POST['numero_cuenta'];
$saldo = $_POST['saldo'];
$id_usuario = $_POST['id_usuario'];


$sql1 = "INSERT INTO cuentas(id_cuenta, numero_cuenta, saldo, id_usuario) 
VALUES('$id_cuenta', '$numero_cuenta', '$saldo', '$id_usuario')";
if(mysqli_query($mysqli, $sql1)){
    echo '<script language="javascript">';
	echo 'alert("Nueva cuenta agregada");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>