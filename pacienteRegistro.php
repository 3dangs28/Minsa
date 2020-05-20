<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>

	
	
  <div class="content-wrapper">


	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro Médico</h1>
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
         <label for="lalo"  class="control-label">Edad</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Edad" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" step="1" min="1970-01-01" max="2002-01-01" value="1995-01-01" class="fecha">
          </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->

<div class="col-md-6">
     <div class="form-group">
       <label>Cédula</label>
       <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="cedula" required autocomplete="off" >
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
 </div>
   <!-- /.col -->




</div>
<!-- /.row -->




 <div class="row">




<div class="col-md-6">

<div class="form-group">
<label for="lalo"  class="control-label">Tipaje</label>
<select class="form-control" name="tsangre" id="tsangre"  required>
                    <option selected disabled></option>
                    <option value="A NEG.">A NEG.</option>
                    <option value="B NEG.">B NEG.</option>
                    <option value="O NEG.">O NEG.</option>
                    <option value="AB NEG.">AB NEG.</option>
                    <option value="A POS.">A POS.</option>
                    <option value="B POS.">B POS.</option>
                    <option value="O POS.">O POS.</option>
                    <option value="AB POS.">AB POS.</option>
</select>

</div>
<!-- /.form-group -->

<div class="form-group">
<label for="lalo"  class="control-label">Teléfono</label>
 <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="telefono" required autocomplete="off" >
</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->



</div>
 <!-- /.row -->



 <h5>Datos de procedencia</h5>

 <div class="row">

<div class="col-md-6">
     <div class="form-group">
       <label>Diagnóstico</label>
       <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="diagnóstico" required autocomplete="off" >
   </div>
     <!-- /.form-group -->
   <div class="form-group">
       <label for="lalo"  class="control-label">Procedencia</label>
       <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="procedencia" required autocomplete="off" >
  </div>
     <!-- /.form-group -->
 </div>
   <!-- /.col -->


<div class="col-md-6">
<div class="form-group">
<label for="lalo"  class="control-label">Seguro</label>
 <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="seguro" required autocomplete="off" >
</div>
<!-- /.form-group -->
<div class="form-group">
<label for="lalo"  class="control-label">Responsable</label>
 <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Familiares responsables" required autocomplete="off" >
</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->



</div>
 <!-- /.row -->





            <h5>Lugar de residencia</h5>
            <div class="row">

              <div class="col-12 col-sm-6">

                <div class="form-group">
  
                  <label for="nombre0" class="control-label">Provincia</label>
                              <?php require_once("conn/conexion.php");
                                 $query = mysqli_query($con,"SELECT * FROM PROVINCIAS");
                              ?>
                     
                             <select class="form-control" id="provincia" name="provincia" required>
            
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                            <?php     echo "<option value=".$row['ID_PROVINCIAS'].">".$row['PROVINCIA']."</option>";
                             }
                           
                             ?>
                     
                        </select>

          </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->




              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Distrito</label>
                  <div class="select2-purple">
                 
                              <?php require_once("conn/conexion.php");
                                 $query = mysqli_query($con,"SELECT * FROM DISTRITOS");
                              ?>
                     
                             <select class="form-control" id="distrito" name="distrito" required>
            
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                            <?php     echo "<option value=".$row['ID_DISTRITO'].">".$row['DISTRITO']."</option>";
                             }
                             
                             ?>
                     
                        </select>

                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->




              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Corregimiento</label>
                  <div class="select2-purple">
                 
                              <?php require_once("conn/conexion.php");
                                 $query = mysqli_query($con,"SELECT * FROM CORREGIMIENTOS");
                              ?>
                     
                             <select class="form-control" id="corregimiento" name="corregimiento" required>
            
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                            <?php     echo "<option value=".$row['ID_CORREGIMIENTO'].">".$row['CORREGIMIENTO']."</option>";
                             }
                             mysqli_close($con);
                             ?>
                     
                        </select>

                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Barrio</label>
                  <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="barrio" required autocomplete="off" >
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Calle</label>
                  <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="calle" required autocomplete="off" >
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Número de casa</label>
                  <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Número de casa" required autocomplete="off" >
                </div>
            </div>



            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
                  <button type="submit" class="btn btn-default">Cancelar</button>
                  <button type="submit" class="btn btn-success float-right">Guardar</button>
                </div>
    
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