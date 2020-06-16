<?php
#Include the connect.php file
require_once("conn/conexion.php");
// Connect to the database
//$mysqli = new mysqli($hostname, $username, $password, $database);
$mysqli = new mysqli('localhost', 'root', '', 'minsa');

// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT ID_PACIENTE, NOMBRE1, APELLIDO1, CEDULA, DIAGNOSTICO,BARRIO FROM PACIENTES order by ID_PACIENTE DESC LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($id,$CompanyName, $ContactName, $ContactTitle, $Address, $City);


while ($result->fetch())
	{
	$customers[] = array(
        'id' => $id,
		'Nombre' => $CompanyName,
		'Apellido' => $ContactName,
		'Cedula' => $ContactTitle,
		'Address' => $Address,
		'City' => $City
	);
    }
    
echo json_encode($customers);

/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>
