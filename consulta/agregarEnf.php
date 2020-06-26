<?php
	# conectare la base de datos

	require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['id'])){
			$errors[] = " vacío";
		} 
		else if (empty($_POST['medico'])){
			$errors[] = "Médico vacío";
		} 
		else if (empty($_POST['diagnostico'])){
			$errors[] = "Diagnóstico vacía";
		}
		else if (empty($_POST['procedencia'])){
			$errors[] = "Procedencia vacía";
		}
		else if (empty($_POST['seguro'])){
			$errors[] = "Seguro vacía";
		}
		else if (empty($_POST['idioma'])){
			$errors[] = "Idioma vacía";
		} 
		else if (empty($_POST['responsables'])){
			$errors[] = "Responsables  vacío";
		}
		else if (empty($_POST['t'])){
			$errors[] = "Signos vitales t vacío";
		} 
		else if (empty($_POST['p'])){
			$errors[] = "Signos vitales p vacío";
        } 
        else if (empty($_POST['pa'])){
			$errors[] = "Signos vitales pa vacío";
        } 
        else if (empty($_POST['so2'])){
			$errors[] = "Signos vitales so2 vacío";
		} 
        else if (empty($_POST['condicion'])){
			$errors[] = "Condición vacío";
        } 
        else if (empty($_POST['fllegada'])){
			$errors[] = "Forma de llegada vacío";
        } 
        else if (empty($_POST['verbal'])){
			$errors[] = "Verbal vacío";
		} 
    
        else if (empty($_POST['ojos'])){
			$errors[] = "Motor vacío";
		} 
    
        else if (empty($_POST['motor'])){
			$errors[] = "Motor vacío";
		} 
	

		else if (
			!empty($_POST['id']) && 
			!empty($_POST['medico']) &&
			!empty($_POST['diagnostico']) && 
			!empty($_POST['procedencia']) && 
			!empty($_POST['seguro']) &&
			!empty($_POST['idioma']) &&  
			!empty($_POST['responsables']) && 
			!empty($_POST['t']) && 
            !empty($_POST['p'])  &&
            !empty($_POST['r'])  &&
            !empty($_POST['pa'])  &&
            !empty($_POST['so2'])  &&
            !empty($_POST['condicion'])  &&
            !empty($_POST['fllegada'])  &&
            !empty($_POST['verbal'])  &&
            !empty($_POST['ojos'])  &&
            !empty($_POST['motor']) 

			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code

		$id = $_POST['id'];
		$medico = $_POST['medico'];
		$diag=mysqli_real_escape_string($con,(strip_tags($_POST["diagnostico"],ENT_QUOTES)));
		$proce=mysqli_real_escape_string($con,(strip_tags($_POST["procedencia"],ENT_QUOTES)));
		$seguro=mysqli_real_escape_string($con,(strip_tags($_POST["seguro"],ENT_QUOTES)));
		$idioma=mysqli_real_escape_string($con,(strip_tags($_POST["idioma"],ENT_QUOTES)));
		$res=mysqli_real_escape_string($con,(strip_tags($_POST["responsables"],ENT_QUOTES)));
		$t=mysqli_real_escape_string($con,(strip_tags($_POST["t"],ENT_QUOTES)));
		$p=mysqli_real_escape_string($con,(strip_tags($_POST["p"],ENT_QUOTES)));
		$r=mysqli_real_escape_string($con,(strip_tags($_POST["r"],ENT_QUOTES)));
        $pa=mysqli_real_escape_string($con,(strip_tags($_POST["pa"],ENT_QUOTES)));
        $so2=mysqli_real_escape_string($con,(strip_tags($_POST["so2"],ENT_QUOTES)));
        $condicion=mysqli_real_escape_string($con,(strip_tags($_POST["condicion"],ENT_QUOTES)));
        $fllegada=mysqli_real_escape_string($con,(strip_tags($_POST["fllegada"],ENT_QUOTES)));
        $verbal=mysqli_real_escape_string($con,(strip_tags($_POST["verbal"],ENT_QUOTES)));
        $ojos=mysqli_real_escape_string($con,(strip_tags($_POST["ojos"],ENT_QUOTES)));
        $motor=mysqli_real_escape_string($con,(strip_tags($_POST["motor"],ENT_QUOTES)));



		$sql="INSERT INTO ENFERMERIAS ( ID_PACIENTE, ID_MEDICO, DIAGNOSTICO, PROCEDENCIA,IDIOMA, SEGURO, RESPONSABLES, SVITAT, SVITAP, SVITAR, SVITAPA, SVITASO2, FLLEGADA, CONDICION,GLASGOWVERVAL,GLASGOWVOJOS, GLASGOWMOTOR, FECHA)
		 VALUES ('".$id."','".$medico."','".$diag."','".$proce."','".$idioma."','".$seguro."','".$res."','".$t."','".$p."','".$r."','".$pa."','".$so2."','".$fllegada."','".$condicion."','".$verbal."','".$ojos."','".$motor."',SYSDATE())";
		$query_update = mysqli_query($con,$sql);

// cambia a estado hospitalizado
		$sql2="UPDATE PACIENTES SET ESTADO='2' WHERE ID_PACIENTE='".$id."'";
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

