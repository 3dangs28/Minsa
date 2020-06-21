<?php



require_once("../conn/conexion.php");
         
$cod = $_POST['cod'];
$t = $_POST['t'];
$c = $_POST['c'];

if($t=='1'){
    $query = mysqli_query($con,"SELECT ID_CUARTO,CUARTO FROM CUARTOS WHERE ID_AREA='".$cod."'");
            
    $json = '[';
    $first = true;
        while($row = mysqli_fetch_array($query))
        {
        if (!$first) { $json .=  ','; } else { $first = false; }
        $json .= '
                {"id":"'.$row['ID_CUARTO'].'",
                "cuarto":"'.$row['CUARTO'].'"}';
        }
    $json .= ']';
}

if($t=='2'){
   
    $query2 = mysqli_query($con,"SELECT ID_CAMA,CAMA FROM CAMAS WHERE ID_CUARTO='".$c."'");
            
    $json = '[';
    $first = true;
        while($row = mysqli_fetch_array($query2))
        {
        if (!$first) { $json .=  ','; } else { $first = false; }
        $json .= '
                {"id":"'.$row['ID_CAMA'].'",
                "cama":"'.$row['CAMA'].'"}';
        }
    $json .= ']';
}


//*/
echo $json;
        

?>