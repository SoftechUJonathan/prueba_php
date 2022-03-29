<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM usuarios WHERE nombre_completo LIKE '%".$valueToSearh."%' OR correo LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM usuarios";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 

</head>
<body>

<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a class="active" href="users.php"><i class="fa fa-user"></i></a> 
  <a href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Usuarios</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
</form>
<br />
<?php


echo "<table border='1'>
<tr>
<th>Nombre Completo</th>
<th>Correo</th>
<th>Usuario</th>
<th>Identificacion</th>
<th>Actualizar</th>
<th>Eliminar</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nombre_completo'] . "</td>";
echo "<td>" . $row['correo'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['id_usuario'] . "</td>";
echo "<td><a href='edit.php?id=".$row['username']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?id=".$row['username']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 