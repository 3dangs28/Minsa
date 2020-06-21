<?php


require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['cuarto'])){
			$errors[] = "Cuarto vacío";

		} 
		else if (empty($_POST['area2'])){
			$errors[] = "Área vacío";

		} 
		else if (empty($_POST['estado'])){
			$errors[] = "Estado vacío";

		} 
		else if (
			!empty($_POST['id']) &&
			!empty($_POST['cuarto']) &&
			!empty($_POST['area2']) &&
			!empty($_POST['estado']) 
			
		){ 

		// escaping, additionally removing everything that could be (html/javascript-) code
	
		$id=intval($_POST['id']);
		$cuarto=mysqli_real_escape_string($con,(strip_tags($_POST["cuarto"],ENT_QUOTES)));
		$area=mysqli_real_escape_string($con,(strip_tags($_POST["area2"],ENT_QUOTES)));
		$estado=mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));



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
		$sql="UPDATE CUARTOS SET CUARTO='".$cuarto."',ID_AREA='".$area."',ESTADO='".$estado."'	WHERE ID_CUARTO='".$id."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}else{
			$errors []= "Ya existe ese cuarto en la unidad.";
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