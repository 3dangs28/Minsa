<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
                    <h5 class="modal-title">Modificar Cuarto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>




          <div class="form-group">
            <label for="cu" class="control-label">Cuarto:</label>
            <input type="text" class="form-control" id="cuarto" name="cuarto" placeholder="Nombre del cuarto" required >
		      	<input type="hidden" class="form-control" id="id" name="id">
          </div>

          
          <div class="form-group">
            <label for="es" class="control-label">Área:</label>
            <select class="form-control" id="area2" name="area2" required>
            <option value="">Seleccione área</option>
            </select>
          </div>
                      
         
          
          <div class="form-group">
            <label for="es" class="control-label">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
            <option value="a">ACTIVO</option>
            <option value="i">INACTIVO</option>
            </select>
          </div>


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>