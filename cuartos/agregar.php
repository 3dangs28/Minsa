<?php
	# conectare la base de datos

	require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['id'])){
			$errors[] = "Nombre cuarto vacío";
		} 
		else if (empty($_POST['area'])){
			$errors[] = "area";
		} 
		
		else if (
			!empty($_POST['id'])   &&
			!empty($_POST['area'])  
		){

		// escaping, additionally removing everything that could be (html/javascript-) code

		$id=$_POST["id"];
		$area=$_POST["area"];
//------------------------

$aux =0;

$sql2="select CUARTO from CUARTOS  where CUARTO='".$id."' and ID_AREA='".$area."'";
$result = mysqli_query($con,$sql2);
if (mysqli_num_rows($result) > 0){
	//si ya existe ese cuarto
   $aux = 1;
}
else{
	//si no existe
	$aux =0;
}


//-----
if ($aux==0){
	$sql="INSERT INTO CUARTOS (CUARTO,ID_AREA) VALUES ('".$id."','".$area."')";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
}else{
	$errors []= "Ya existe cuarto en unidad.";
}
	


		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}


?>