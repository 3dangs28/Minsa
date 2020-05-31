<?php
	# conectare la base de datos

	require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['mvisita'])){
			$errors[] = "Historia actual vacío";
		} 
		else if (empty($_POST['alergia'])){
			$errors[] = "Alergía vacío";
		} 
		else if (empty($_POST['app'])){
			$errors[] = "App vacía";
		}
		else if (empty($_POST['aqx'])){
			$errors[] = "AQX vacía";
		}
		else if (empty($_POST['ahf'])){
			$errors[] = "AHF vacía";
		}
		else if (empty($_POST['indi'])){
			$errors[] = "Indicaciones médicas vacío";
		}
		else if (empty($_POST['efisico'])){
			$errors[] = "Examán Físico vacío";
		} 
		else if (empty($_POST['diag'])){
			$errors[] = "Diagnóstico vacío";
		} 
	

		else if (
			!empty($_POST['mvisita']) && 
			!empty($_POST['alergia']) &&
			!empty($_POST['app']) && 
			!empty($_POST['aqx']) && 
			!empty($_POST['ahf']) && 
			!empty($_POST['indi']) && 
			!empty($_POST['efisico']) && 
			!empty($_POST['diag'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code

		$id = $_POST['id'];
		$idmedico = $_POST['idmedico'];
		$mv=mysqli_real_escape_string($con,(strip_tags($_POST["mvisita"],ENT_QUOTES)));
		$alg=mysqli_real_escape_string($con,(strip_tags($_POST["alergia"],ENT_QUOTES)));
		$app=mysqli_real_escape_string($con,(strip_tags($_POST["app"],ENT_QUOTES)));
		$aqx=mysqli_real_escape_string($con,(strip_tags($_POST["aqx"],ENT_QUOTES)));
		$ahf=mysqli_real_escape_string($con,(strip_tags($_POST["ahf"],ENT_QUOTES)));
		$indi=mysqli_real_escape_string($con,(strip_tags($_POST["indi"],ENT_QUOTES)));
		$efisico=mysqli_real_escape_string($con,(strip_tags($_POST["efisico"],ENT_QUOTES)));
		$diag=mysqli_real_escape_string($con,(strip_tags($_POST["diag"],ENT_QUOTES)));


		$sql="INSERT INTO CONSULTAS  ( ID_PACIENTE, ID_MEDICO, MVISITA, ALERGIA, APP, AHF, AQX, INDICACIONES, EXAFISICO, DIAGNOSTICO, FECHA_HORA)
		 VALUES ('".$id."','".$idmedico."','".$mv."','".$alg."','".$app."','".$ahf."','".$aqx."','".$indi."','".$efisico."','".$diag."',SYSDATE())";
		$query_update = mysqli_query($con,$sql);


		$sql2="UPDATE PACIENTES SET ESTADO='1' WHERE ID_PACIENTE='".$id."'";
		$query_update2 = mysqli_query($con,$sql2);

			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
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

			mysqli_close($con);
?>

