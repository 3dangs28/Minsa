<?php 
	require_once("../conn/conexion.php");
         
   $query = mysqli_query($con,"SELECT ID_AREA,AREA FROM AREAS WHERE ESTADO =1");

$users_arr = array();

while( $row = mysqli_fetch_array($query) ){
    $userid = $row['ID_AREA'];
    $name = $row['AREA'];
    $users_arr[] = array("id" => $userid, "area" => $name);
}

// encoding array to json format
echo json_encode($users_arr);



?>
