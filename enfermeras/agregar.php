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
	else if (empty($_POST['esp1'])){
		$errors[] = "Especialidad 1 vacía";
	}

	else if (empty($_POST['otras'])){
		$errors[] = "Otras vacía";
	}
	else if (empty($_POST['ido'])){
		$errors[] = "Idoneidad vacía";
	}
	else if (empty($_POST['ced'])){
		$errors[] = "Cédula vacía";
	}
	else if (empty($_POST['gen'])){
		$errors[] = "Genero vacía";
	}
	else if (empty($_POST['tel'])){
		$errors[] = "Télefono vacía";
	}
	else if (empty($_POST['correo'])){
		$errors[] = "Correo vacío";
	} 
	 
		else if (
			!empty($_POST['ced']) && 
			!empty($_POST['nom1']) &&
		//	!empty($_POST['nom2']) &&
			!empty($_POST['apel1']) && 
		//	!empty($_POST['apel2']) &&
		    !empty($_POST['ido']) && 
		    !empty($_POST['esp1']) && 

			!empty($_POST['otras']) && 
			!empty($_POST['gen']) && 
			!empty($_POST['tel']) && 
			!empty($_POST['correo'])

			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		
		$n1=mysqli_real_escape_string($con,(strip_tags($_POST["nom1"],ENT_QUOTES)));
		$n2=mysqli_real_escape_string($con,(strip_tags($_POST["nom2"],ENT_QUOTES)));
		$a1=mysqli_real_escape_string($con,(strip_tags($_POST["apel1"],ENT_QUOTES)));
		$a2=mysqli_real_escape_string($con,(strip_tags($_POST["apel2"],ENT_QUOTES)));
		$ido=mysqli_real_escape_string($con,(strip_tags($_POST["ido"],ENT_QUOTES)));
		$e1=mysqli_real_escape_string($con,(strip_tags($_POST["esp1"],ENT_QUOTES)));
		$otras=mysqli_real_escape_string($con,(strip_tags($_POST["otras"],ENT_QUOTES)));
		$ced=mysqli_real_escape_string($con,(strip_tags($_POST["ced"],ENT_QUOTES)));
		$gen=mysqli_real_escape_string($con,(strip_tags($_POST["gen"],ENT_QUOTES)));
		$tel=mysqli_real_escape_string($con,(strip_tags($_POST["tel"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));


		$sql="INSERT INTO ENFERMERAS ( NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, ESPECIALIDAD, OTRAS, IDONEIDAD,CEDULA, SEXO, TELEFONO, CORREO )  
		VALUES ('".$n1."','".$n2."','".$a1."','".$a2."','".$e1."','".$otras."','".$ido."','".$ced."','".$gen."','".$tel."','".$correo."')";
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