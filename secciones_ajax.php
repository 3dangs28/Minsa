<?php
 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM SECCIONES");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT ID_SECCION,SECCION FROM SECCIONES  order by ID_SECCION");
		
		if ($numrows>0){
		
			?>
		<table ID="example1" class="table table-bordered">
			  <thead>
				<tr>
				<th>Código</th>
                <th>Nombre</th>
		        <th>Acción</th>
			
				</tr>
			</thead>
			<tbody>

			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['ID_SECCION'];?></td>
					<td><?php echo $row['SECCION'];?></td>
					<td>

					<a href=""  data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['ID_SECCION']?>" data-aplicacion="<?php echo $row['SECCION']?>"  >
					<i class='nav-icon fa fa-pencil'></i> </a>
					
					<a href=""   data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['ID_SECCION']?>"  >
					<i class='nav-icon fa fa-trash' ></i> </a>
					
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