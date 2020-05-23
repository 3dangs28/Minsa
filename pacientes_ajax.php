<?php
 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM PACIENTES");
		

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos
        $sql ='SELECT * FROM PACIENTES WHERE ESTADO=0 ORDER BY ID_PACIENTE ASC';
		$query = mysqli_query($con,$sql);


		if ($numrows>0){
			?>
		<table ID="example1" class="table table-bordered">
			  <thead>
				<tr>

        <th>Nombre</th>
		<th>Apellido</th>
        <th>Cédula</th>
        <th>Unidad</th>
        <th>Cuarto</th>
		<th>Cama</th>
		<th>Acciones</th>
				</tr>
			</thead>
			<tbody>

			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>

					<td><?php echo $row['NOMBRE1'];?></td>
					<td><?php echo $row['APELLIDO1'];?></td>
                    <td><?php echo $row['CEDULA'];?></td>
                    <td><?php echo $row['TELEFONO'];?></td>
               
           
										<td>
										<?php  
										if ($row['ESTADO']==1){
											echo 'ACTIVO';
										}
										else{
											echo 'INACTIVO';
										}
										;?>
										</td>
                    <td><?php echo $row['FECHA'];?></td>
					<td>
                        <button type="button" class="btn btn-info" data-toggle="modal" 
						data-target="#dataUpdate" 
					
                        data-usr="<?php echo $row['ID_PACIENTE']?>" 
                        data-cedula="<?php echo $row['CEDULA']?>"
                        data-nombre1="<?php echo $row['NOMBRE1']?>"
                        data-nombre2="<?php echo $row['NOMBRE2']?>" 
                        data-apellido1="<?php echo $row['APELLIDO1']?>"
                        data-apellido2="<?php echo $row['APELLIDO2']?>"
						data-gen="<?php echo $row['SEXO']?>"
              
					   data-estatus="<?php echo $row['ESTADO']?>"
                         
                         ><i class='nav-icon fa fa-pencil'></i></button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['ID_PACIENTE']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
					</td>
				</tr>
				<?php
            }
					
			?>
			</tbody>
		</table>
	

			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}

	}
	mysqli_close($con);
?>
  <script>
  $(function () {
    $("#example1").DataTable();
  });
</script>