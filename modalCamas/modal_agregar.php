<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      

    <div class="modal-header">
                    <h5 class="modal-title">Formulario para agregar Camas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


      <div class="modal-body">
      <div id="datos_ajax_register"></div>

      <div class="form-group">
      <label for="perfa" class="control-label">Cuarto:</label>       							
      <?php require_once("conn/conexion.php");
//$sql = "select * from CUARTOS";
    $sql = "SELECT a.ID_CUARTO, a.CUARTO, b.AREA 
    FROM CUARTOS a, AREAS b  
    where  a.ID_AREA = b.ID_AREA AND a.ESTADO = 'a'";
     
     
                                 $query = mysqli_query($con,$sql);
                              ?>
                     
                             <select class="form-control" id="cuarto" name="cuarto" required>
                             <option value="">Seleccione cuarto</option>
                     
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                             
                             <?php  // echo "<option value=".$row['ID_CUARTO'].">".$row['CUARTO']."</option>";
                              echo "<option value=".$row['ID_CUARTO'].">"."Cuarto: ".$row['CUARTO']." en ".$row['AREA']."</option>";
                             }
                             mysqli_close($con);
                             ?>
                  
                     
                             </select>
                                    
                     
       </div>


      <div class="form-group">
            <label for="perfa" class="control-label">Nombre de cama:</label>
           
            <input type="number" min="1" pattern="^[0-9]+" class="form-control" id="id" name="id" placeholder="número de cama" required autocomplete="off" >
		  </div>
	 

		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>

       
      </div>
    </div>
  </div>
</div>
</form>