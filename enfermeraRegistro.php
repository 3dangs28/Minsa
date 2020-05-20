<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>

	
	
  <div class="content-wrapper">


	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario de registro de Enfermeras</h1>
          </div>
      
   
       
        </div>
      </div><!-- /.container-fluid -->
    </section>


	    <!-- Main content -->
			<section class="content">
            <div class="container-fluid">



      <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Datos personales</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">


   <div class="row">

           <div class="col-md-6">
                <div class="form-group">
                  <label>Primer nombre</label>
                  <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Nombre:" required autocomplete="off" >
              </div>
                <!-- /.form-group -->
              <div class="form-group">
                  <label for="lalo"  class="control-label">Segundo Nombre</label>
                  <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Segundo nombre:" required autocomplete="off" >
             </div>
                <!-- /.form-group -->
            </div>
              <!-- /.col -->


   <div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Primer Apellido</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Apellido:" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido:" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->


<div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Especialidad</label>
            <input type="text" class="form-control" id="esp" name="esp" placeholder="Especialidad" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
 <div class="form-group">
         <label for="lalo"  class="control-label">Otras especialidades</label>
         <input type="text" class="form-control" id="otras" name="otras" placeholder="Otra Especialidad" required autocomplete="off" >
          </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->



<div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Idoneidad</label>
            <input type="text" class="form-control" id="ido" name="ido" placeholder="Idoneidad" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
   
 </div>
<!-- /.col -->



<div class="col-md-6">
     <div class="form-group">
       <label>Cédula</label>
       <input type="text" class="form-control" id="cedula" name="cedula" placeholder="cedula" required autocomplete="off" >
   </div>
     <!-- /.form-group -->
   <div class="form-group">
       <label for="lalo"  class="control-label">Género</label>
       <select class="form-control" name="genero" id="genero" required>
                <option selected disabled></option>
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>

            </select>
  </div>
     <!-- /.form-group -->

     <div class="form-group">
       <label>Télefono</label>
       <input type="text" class="form-control" id="tel" name="tel" placeholder="Télefono" required autocomplete="off" >
   </div>

   <div class="form-group">
       <label>Correo</label>
       <input type="text" class="form-control" id="correo" name="correo" placeholder="correo" required autocomplete="off" >
   </div>




 </div>
   <!-- /.col -->



</div>
<!-- /.row -->
 </div>
      <!-- /.row -->


      <div class="card-footer">
                  <button type="submit" class="btn btn-default">Cancelar</button>
                  <button type="submit" class="btn btn-success float-right">Guardar</button>
       </div>

      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("inc/scripts.php"); ?>



 </body>
</html>