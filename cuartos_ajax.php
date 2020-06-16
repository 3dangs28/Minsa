<?php
 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM CUARTOS");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos



$sql = 'SELECT a.ID_CUARTO, a.ID_AREA, b.AREA, a.ESTADO
from
CUARTOS a, AREAS b
where
a.ID_AREA = b.ID_AREA';

		$query = mysqli_query($con,$sql);
		
		if ($numrows>0){
		
			?>
		<table ID="example1" class="table table-bordered">
			  <thead>
				<tr>
				<th>Área</th>
                <th>Cuarto</th>
				<th>Estado</th>
		        <th>Acciones</th>
				</tr>
			</thead>
			<tbody>

			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
			    	<td><?php echo $row['AREA'];?></td>
					<td><?php echo $row['ID_CUARTO'];?></td>
					<td><?php echo $row['ESTADO'];?></td>
					
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['ID_CUARTO']?>" data-aplicacion="<?php echo $row['ESTADO']?>"  ><i class='nav-icon fa fa-pencil'></i> </button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['ID_CUARTO']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
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