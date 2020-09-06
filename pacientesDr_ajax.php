<?php
 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM PACIENTES a, AREAS b, CUARTOS c, CAMAS d WHERE a.ID_AREA=b.ID_AREA AND a.ID_CUARTO = c.ID_CUARTO AND a.ID_CAMA= d.ID_CAMA AND a.ESTADO =0");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

      $reload = 'index.php';
      
      $sql = "SELECT a.ID_PACIENTE, b.AREA,c.CUARTO, d.CAMA, concat( a.NOMBRE1,' ',a.APELLIDO1) as NOMBRE, a.CEDULA, a.DIAGNOSTICO, a.PROCEDENCIA FROM PACIENTES a, AREAS b, CUARTOS c, CAMAS d WHERE a.ID_AREA=b.ID_AREA AND a.ID_CUARTO = c.ID_CUARTO AND a.ID_CAMA= d.ID_CAMA AND a.ESTADO =0 order by a.ID_PACIENTE";
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,$sql);
		
		if ($numrows>0){
		
			?>
		<table ID="example1" class="table table-bordered">
			  <thead>
				<tr>


				<th>Código</th>
                <th>Nombre</th>
                <th>Área</th>
                <th>Cuarto</th>
                <th>Cama</th>
                <th>Cédula</th>
                <th>Diagnostico</th>
                <th>Procedencia</th>
		       <th>Acción</th>
				</tr>
			</thead>
			<tbody>


      <?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['ID_PACIENTE'];?></td>
					<td><?php echo $row['NOMBRE'];?></td>
               <td><?php echo $row['AREA'];?></td>
               <td><?php echo $row['CUARTO'];?></td>
               <td><?php echo $row['CAMA'];?></td>
               <td><?php echo $row['CEDULA'];?></td>
               <td><?php echo $row['DIAGNOSTICO'];?></td>
               <td><?php echo $row['PROCEDENCIA'];?></td>


					<td>
					<a href="consulta.php?id=<?php echo $row['ID_PACIENTE']; ?>">Atender</a>
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