<?php
#Include the connect.php file
require_once("conn/conexion.php");
// Connect to the database
//$mysqli = new mysqli($hostname, $username, $password, $database);
$mysqli = new mysqli('localhost', 'root', '', 'minsa');

// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT a.ID_PACIENTE, b.AREA,c.CUARTO, d.CAMA, concat( a.NOMBRE1,' ',a.APELLIDO1) as NOMBRE, a.CEDULA, a.DIAGNOSTICO, a.PROCEDENCIA FROM PACIENTES a, AREAS b, CUARTOS c, CAMAS d WHERE a.ID_AREA=b.ID_AREA AND a.ID_CUARTO = c.ID_CUARTO AND a.ID_CAMA= d.ID_CAMA AND a.ESTADO =0 order by a.ID_PACIENTE DESC LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($id,$area,$cuarto, $cama, $nombre, $cedula, $diagnostico, $procedencia);
 
$i=0;
while ($result->fetch())
	{
		$i++;
		echo $i;
	$customers[] = array(
	
        'id' => $id,
		'nombre' => $nombre,
		'area' => $area,
		'cuarto' => $cuarto,
		'cama' => $cama,
		'cedula' => $cedula,
		'diagnostico' => $diagnostico,
		'procedencia' => $procedencia
	);

    }
    
echo json_encode($customers);

/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>
