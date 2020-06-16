<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      

    <div class="modal-header">
                    <h5 class="modal-title">Formulario para agregar Cuartos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


      <div class="modal-body">
      <div id="datos_ajax_register"></div>

      <div class="form-group">
                							
                              <?php require_once("conn/conexion.php");
                                 $query = mysqli_query($con,"SELECT ID_AREA,AREA FROM AREAS WHERE ESTADO =1");
                              ?>
                     
                             <select class="form-control" id="area" name="area" required>
                             <option value="">Seleccione área</option>
                     
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                             <?php     echo "<option value=".$row['ID_AREA'].">".$row['AREA']."</option>";
                             }
                             mysqli_close($con);
                             ?>
                  
                     
                             </select>
                      
                     
       </div>


      <div class="form-group">
            <label for="perfa" class="control-label">Nombre del cuarto:</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Nombre" required autocomplete="off" >
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