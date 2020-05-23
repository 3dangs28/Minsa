<?php
	# conectare la base de datos

	require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['nom1'])){
			$errors[] = "Primer Nombre vacío";
		} 
	/*
		else if (empty($_POST['nom2'])){
		$errors[] = "Segundo Nombre vacío";
		} */
		else if (empty($_POST['apel1'])){
			$errors[] = "Primer Apellido vacío";
		} /*
		else if (empty($_POST['apel2'])){
		$errors[] = "Segundo Apellido vacío";
		} */
		else if (empty($_POST['edad'])){
			$errors[] = "Edad vacía";
		}
		else if (empty($_POST['fecha'])){
			$errors[] = "Fecha de nacimiento vacía";
		}
		else if (empty($_POST['ced'])){
			$errors[] = "Cédula vacía";
		}
		else if (empty($_POST['gen'])){
			$errors[] = "Género vacío";
		}
		else if (empty($_POST['tsangre'])){
			$errors[] = "Tipo de sangre vacío";
		} 
		else if (empty($_POST['tel'])){
			$errors[] = "Teléfono vacío";
		} 
		else if (empty($_POST['diag'])){
			$errors[] = "Diagnóstico vacío";
		} 
		else if (empty($_POST['proce'])){
			$errors[] = "Procedencia vacío";
		} 
		else if (empty($_POST['seguro'])){
			$errors[] = "Seguro vacío";
		} 
		else if (empty($_POST['resp'])){
			$errors[] = "Responsable vacío";
		} 
		else if (empty($_POST['pro'])){
			$errors[] = "Provincia vacío";
		} 
		else if (empty($_POST['dis'])){
			$errors[] = "Distrito vacío";
		} 
		else if (empty($_POST['corre'])){
			$errors[] = "Corregimiento vacío";
		} 
		else if (empty($_POST['barrio'])){
			$errors[] = "Barrio vacío";
		} 
		else if (empty($_POST['calle'])){
			$errors[] = "Calle vacío";
		} 
		else if (empty($_POST['casa'])){
			$errors[] = "Casa vacío";
		} 

		else if (empty($_POST['unidad'])){
			$errors[] = "Unidad vacío";
		} 


		else if (
			!empty($_POST['ced']) && 
			!empty($_POST['nom1']) &&
		//	!empty($_POST['nom2']) &&
			!empty($_POST['apel1']) && 
		//	!empty($_POST['apel2']) &&
			!empty($_POST['edad']) && 
			!empty($_POST['fecha']) && 
			!empty($_POST['gen']) && 
			!empty($_POST['tsangre']) && 
			!empty($_POST['tel']) && 
			!empty($_POST['diag']) && 
			!empty($_POST['proce']) && 
			!empty($_POST['seguro']) && 
			!empty($_POST['resp']) && 
			!empty($_POST['pro']) && 
			!empty($_POST['dis']) && 
			!empty($_POST['corre']) && 
			!empty($_POST['barrio']) && 
			!empty($_POST['calle']) &&  
			!empty($_POST['casa']) &&  
			!empty($_POST['unidad'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code

	
		$n1=mysqli_real_escape_string($con,(strip_tags($_POST["nom1"],ENT_QUOTES)));
		$n2=mysqli_real_escape_string($con,(strip_tags($_POST["nom2"],ENT_QUOTES)));
		$a1=mysqli_real_escape_string($con,(strip_tags($_POST["apel1"],ENT_QUOTES)));
		$a2=mysqli_real_escape_string($con,(strip_tags($_POST["apel2"],ENT_QUOTES)));
		$diag=mysqli_real_escape_string($con,(strip_tags($_POST["diag"],ENT_QUOTES)));
		$proce=mysqli_real_escape_string($con,(strip_tags($_POST["proce"],ENT_QUOTES)));
		$seguro=mysqli_real_escape_string($con,(strip_tags($_POST["seguro"],ENT_QUOTES)));
		$resp=mysqli_real_escape_string($con,(strip_tags($_POST["resp"],ENT_QUOTES)));
		$edad=mysqli_real_escape_string($con,(strip_tags($_POST["edad"],ENT_QUOTES)));
		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
		$ced=mysqli_real_escape_string($con,(strip_tags($_POST["ced"],ENT_QUOTES)));
		$gen=mysqli_real_escape_string($con,(strip_tags($_POST["gen"],ENT_QUOTES)));
		$ts=mysqli_real_escape_string($con,(strip_tags($_POST["tsangre"],ENT_QUOTES)));
		$tel=mysqli_real_escape_string($con,(strip_tags($_POST["tel"],ENT_QUOTES)));
		$pro=mysqli_real_escape_string($con,(strip_tags($_POST["pro"],ENT_QUOTES)));
		$dis=mysqli_real_escape_string($con,(strip_tags($_POST["dis"],ENT_QUOTES)));
		$corre=mysqli_real_escape_string($con,(strip_tags($_POST["corre"],ENT_QUOTES)));
		$barrio=mysqli_real_escape_string($con,(strip_tags($_POST["barrio"],ENT_QUOTES)));
		$calle=mysqli_real_escape_string($con,(strip_tags($_POST["calle"],ENT_QUOTES)));
		$casa=mysqli_real_escape_string($con,(strip_tags($_POST["casa"],ENT_QUOTES)));
		$u=mysqli_real_escape_string($con,(strip_tags($_POST["unidad"],ENT_QUOTES)));


		$sql="INSERT INTO PACIENTES  (ID_AREA, ID_PROVINCIA, ID_DISTRITO, ID_CORREGIMIENTO, NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, DIAGNOSTICO, PROCEDENCIA,SEGURO, RESPONSABLES, EDAD, FECHA_NAC, CEDULA, SEXO, TIPAJE, TELEFONO,BARRIO, CALLE, NUMCASA, FECHA)
		 VALUES ('".$u."','".$pro."','".$dis."','".$corre."','".$n1."','".$n2."','".$a1."','".$a2."','".$diag."','".$proce."','".$seguro."','".$resp."','".$edad."','".$fecha."','".$ced."','".$gen."','".$ts."','".$tel."','".$barrio."','".$calle."','".$casa."',SYSDATE())";
		$query_update = mysqli_query($con,$sql);
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

