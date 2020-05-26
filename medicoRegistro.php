<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>

	
  <script type="text/javascript" language="javascript">



function registra() {


function blanquear(){

document.getElementById('nom1').value='';
document.getElementById('nom2').value='';
document.getElementById('apel1').value='';
document.getElementById('apel2').value='';
document.getElementById('esp1').value='';
document.getElementById('esp2').value='';
document.getElementById('esp3').value='';
document.getElementById('otras').value='';
document.getElementById('ido').value='';
document.getElementById('ced').value='';
document.getElementById('gen').value='';
document.getElementById('tel').value='';
document.getElementById('correo').value='';


}


var nom1 = document.getElementById('nom1').value;
var nom2 = document.getElementById('nom2').value;
var apel1 = document.getElementById('apel1').value;
var apel2 = document.getElementById('apel2').value;
var esp1 = document.getElementById('esp1').value;
var esp2 = document.getElementById('esp2').value;
var esp3 = document.getElementById('esp3').value;
var otras = document.getElementById('otras').value;
var ido = document.getElementById('ido').value;
var ced = document.getElementById('ced').value;
var gen = document.getElementById('gen').value;
var tel = document.getElementById('tel').value;
var correo = document.getElementById('correo').value;

console.log('Éxito!');

$.post("medicos/agregar.php", {
        nom1: nom1,
        nom2: nom2,
        apel1: apel1,
        apel2: apel2,
        esp1: esp1,
        esp2: esp2,
        esp3: esp3,
        ido: ido,
        otras: otras,
        ced: ced,
        gen: gen,
        tel: tel,
        correo: correo
    },
    function(data2) {
      $("#mensaje").html(data2);
      $('html,body').animate({ scrollTop: 0 }, 600);
   var n = data2.includes("Bien")
   console.log(data2);
   console.log(n);
    
      if (n==true){
        blanquear();
      }

    });

}

</script>
	
  <div class="content-wrapper">


	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario de registro de Médicos</h1>
          </div>
      
   
       
        </div>
      </div><!-- /.container-fluid -->
    </section>


	    <!-- Main content -->
			<section class="content">
            <div class="container-fluid">

            <div id="mensaje"></div>

      <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Datos personales</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">


   <div class="row">

           <div class="col-md-6">
                <div class="form-group">
           
                  <label for="lalo"  class="control-label">Primer nombre</label>
                  <input type="text" class="form-control" id="nom1" name="nom1" placeholder="Primer nombre:" required autocomplete="off" >
              </div>
                <!-- /.form-group -->
              <div class="form-group">
                  <label for="lalo"  class="control-label">Segundo Nombre</label>
                  <input type="text" class="form-control" id="nom2" name="nom2" placeholder="Segundo nombre:" required autocomplete="off" >
             </div>
                <!-- /.form-group -->
            </div>
              <!-- /.col -->


   <div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Primer Apellido</label>
            <input type="text" class="form-control" id="apel1" name="apellido1" placeholder="Apellido:" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="apel2" name="apellido2" placeholder="Segundo apellido:" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->


<div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Especialidad 1</label>
            <input type="text" class="form-control" id="esp1" name="esp1" placeholder="Especialidad 1" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Especialidad 2</label>
         <input type="text" class="form-control" id="esp2" name="esp2" placeholder="Especialidad 2" required autocomplete="off" >
          </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->



<div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Especialidad 3</label>
            <input type="text" class="form-control" id="esp3" name="esp3" placeholder="Especialidad 3" required autocomplete="off" >
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
 
     <div class="form-group">
       <label>Cédula</label>
       <input type="text" class="form-control" id="ced" name="ced" placeholder="cedula" required autocomplete="off" >
   </div>
     <!-- /.form-group -->
   <div class="form-group">
       <label for="lalo"  class="control-label">Género</label>
       <select class="form-control" name="gen" id="gen" required>
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
                  <button onclick="registra()" class="btn btn-success float-right">Guardar</button>
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