<?php
 
require_once("conn/conexion.php");



		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM CAMAS");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos

 

$sql = 'SELECT a.ID_CAMA, a.CAMA, a.ID_CUARTO, b.CUARTO, a.ESTADO, c.AREA FROM CAMAS a, CUARTOS b, AREAS c
where
a.ID_CUARTO = b.ID_CUARTO and c.ID_AREA = b.ID_AREA';

		$query = mysqli_query($con,$sql);
		
		if ($numrows>0){
		
			?>
			<script>

$.ajax({
	url: "cuartos/consulta.php",
	type: 'get',
	dataType: "json",
	success: function(data){

		//Log para saber que me llego la información de la consulta a la base de datos
		//you can get a better view of what the script is returning.
		console.log(data);

      var $select = $('#area2'); 
        $select.find('option').remove();  
        $.each(data,function(key, value) 
          {
            $select.append('<option value=' + value['id'] + '>' + value['area'] + '</option>');
          });

		//Change the text of the default "loading" option.
	//	$('#loading').text('Gato');

	}
});

</script> 

		<table ID="example1" class="table table-bordered">
			  <thead>
				<tr>
				<th>Área</th>
				<th>Cuarto</th>
                <th>Cama</th>
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
			    	<td><?php echo $row['CUARTO'];?></td>
					<td><?php echo $row['CAMA'];?></td>
				
					<td>
										<?php  
										if ($row['ESTADO']=='a'){
											echo 'ACTIVO';
										}
										else{
											echo 'INACTIVO';
										}
										;?>
										</td>

					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['ID_CAMA']?>" data-cuarto="<?php echo $row['CUARTO']?>"  data-estado="<?php echo $row['ESTADO']?>"  ><i class='nav-icon fa fa-pencil'></i> </button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['ID_CAMA']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
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