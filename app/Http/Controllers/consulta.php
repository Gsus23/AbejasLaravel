<?php

$host="127.0.0.1";
$username="BeeLab";
$password="abejas12345";
$database="beelab";

$conexion = new mysqli($host, $username, $password, $database);
if ($conexion -> connect_errno) {
    die("Falló la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_error());
}





$sql="SELECT c.id,c.temperatura,a.id,a.entrada,c.apiario_id,a.apiario_id
    FROM clima_ambiente c 
    INNER JOIN actividad a ON a.apiario_id=c.apiario_id
    WHERE c.temperatura=16";    
$result=mysqli_query($conexion,$sql);	

$consulta1=mysqli_fetch_array($result);   
echo json_encode($consulta1);


?>