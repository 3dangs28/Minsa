<?php
	# conectare la base de datos

	require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['id'])){
			$errors[] = "Nombre cama vacío";
		} 
		else if (empty($_POST['cuarto'])){
			$errors[] = "Cuarto vacio";
		} 
		
		else if (
			!empty($_POST['id'])   &&
			!empty($_POST['cuarto'])  
		){

		// escaping, additionally removing everything that could be (html/javascript-) code

		$id=$_POST["id"];
		$cuarto=$_POST["cuarto"];
//------------------------

$aux =0;

$sql2="select ID_CAMA from CAMAS  where CAMA='".$id."' and ID_CUARTO='".$cuarto."'";
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
	$sql="INSERT INTO CAMAS (CAMA,ID_CUARTO) VALUES ('".$id."','".$cuarto."')";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
}else{
	$errors []= "Ya existe la cama en unidad.";
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