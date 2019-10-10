<?php 

$host="127.0.0.1";
$username="BeeLab";
$pw="abejas12345";
$db="beelab";

$con = new mysql_connect($host, $username, $password, $database);

$resultado = $con-> query("SELECT * FROM APIARIO");

echo '<table class="table">
    <tr class="active">
		<th>Nombre</th>
		<th>Usuario</th>
		<th>Ubicacion</th>
	</tr>';

	while ($apiario = $resultado->fetch_array(MYSQLI_BOTH))
	{
		echo'<tr>
			    <td>'.$apiario['nombre'].'</td>
			    <td>'.$apiario['user_id'].'</td>
			    <td>'.$apiario['ubicacion_id'].'</td>
			</tr>';
	}
	echo '</table>';
				
?>
