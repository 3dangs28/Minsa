


<?php include("inc/librerias.php"); ?>
<head>
<link rel="stylesheet" href="js2/styles/jqx.base.css" type="text/css" />
<link rel="stylesheet" href="js2/styles/jqx.classic.css" type="text/css" />
<script type="text/javascript" src="js2/scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js2/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="js2/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="js2/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="js2/jqwidgets/jqxmenu.js"></script>
<script type="text/javascript" src="js2/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="js2/jqwidgets/jqxgrid.js"></script>
</head>

<body>
  <?php include("inc/header.php"); ?>
<?php include("inc/menu.php"); ?>




<?php
#Include the connect.php file
require_once("conn/conexion.php");
// Connect to the database
//$mysqli = new mysqli($hostname, $username, $password, $database);
$mysqli = new mysqli('localhost', 'root', '', 'minsa');

// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT NOMBRE1, APELLIDO1, EDAD, DIAGNOSTICO, CEDULA FROM PACIENTES LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($CompanyName, $ContactName, $ContactTitle, $Address, $City);
/* fetch values */
while ($result->fetch())
	{
	$customers[] = array(
		'CompanyName' => $CompanyName,
		'ContactName' => $ContactName,
		'ContactTitle' => $ContactTitle,
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



<script type="text/javascript" language="javascript">

$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [{ name: 'CompanyName' },{ name: 'ContactName' },{ name: 'ContactTitle' },{ name: 'Address' },{ name: 'City' },],
        url: 'data.php'
    };
    $("#jqxgrid").jqxGrid({
        source: source,
        theme: 'classic',
        columns: [{ text: 'Company Name', datafield: 'CompanyName', width: 250 },{ text: 'ContactName', datafield: 'ContactName', width: 150 },{ text: 'Contact Title', datafield: 'ContactTitle', width: 180 },{ text: 'Address', datafield: 'Address', width: 200 },{ text: 'City', datafield: 'City', width: 120 }]
    });
});
</script> 


<div id="jqxgrid"></div>


<?php include("inc/scripts.php"); ?>



</body>
</html>