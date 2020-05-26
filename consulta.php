<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>


    <?php

  echo $_SESSION['iduser'];
    ?>


  <script type="text/javascript" language="javascript">



function registra() {


function blanquear(){

document.getElementById('ced').value='';
document.getElementById('nom1').value='';
document.getElementById('nom2').value='';
document.getElementById('apel1').value='';
document.getElementById('apel2').value='';
document.getElementById('edad').value='';
document.getElementById('fecha').value='1995-01-01';
document.getElementById('gen').value='';
document.getElementById('tsangre').value='';
document.getElementById('tel').value='';
document.getElementById('diag').value='';
document.getElementById('proce').value='';
document.getElementById('seguro').value='';
document.getElementById('resp').value='';
document.getElementById('pro').value='';
document.getElementById('dis').value='';
document.getElementById('corre').value='';
document.getElementById('barrio').value='';
document.getElementById('calle').value='';
document.getElementById('casa').value='';
document.getElementById('unidad').value='';
}

var ced = document.getElementById('ced').value;
var nom1 = document.getElementById('nom1').value;
var nom2 = document.getElementById('nom2').value;
var apel1 = document.getElementById('apel1').value;
var apel2 = document.getElementById('apel2').value;
var edad = document.getElementById('edad').value;
var fecha = document.getElementById('fecha').value;
var gen = document.getElementById('gen').value;
var tsangre = document.getElementById('tsangre').value;
var tel = document.getElementById('tel').value;
var diag = document.getElementById('diag').value;
var proce = document.getElementById('proce').value;
var seguro = document.getElementById('seguro').value;
var resp = document.getElementById('resp').value;
var pro = document.getElementById('pro').value;
var dis = document.getElementById('dis').value;
var corre = document.getElementById('corre').value;
var barrio = document.getElementById('barrio').value;
var calle = document.getElementById('calle').value;
var casa = document.getElementById('casa').value;
var unidad = document.getElementById('unidad').value;

console.log('Éxito!');

$.post("pacientes/agregar.php", {
        ced: ced,
        nom1: nom1,
        nom2: nom2,
        apel1: apel1,
        apel2: apel2,
        edad: edad,
        fecha: fecha,
        gen: gen,
        tsangre: tsangre,
        tel: tel,
        diag: diag,
        proce: proce,
        seguro: seguro,
        resp: resp,
        pro: pro,
        dis: dis,
        corre: corre,
        barrio: barrio,
        calle: calle,
        casa: casa,
        unidad: unidad
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
     /*
        if(data2>0){
            $("#mensaje").html(msj);	
      //  busqueda();
        }else{
            $("#mensaje").html(msj2);	
        }
       */
    });

}

</script>
	
  <div class="content-wrapper">


	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario de Consulta</h1>
          </div>
      
   
        </div>
      </div><!-- /.container-fluid -->
    </section>


	    <!-- Main content -->
			<section class="content">
            <div class="container-fluid">

            <div id="mensaje"></div>

            <?php

echo $_SESSION['iduser'];

  ?>

      <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Datos personales</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">

         
   <div class="row">
 
           <div class="col-md-6">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="nom1" name="nom1" readonly >
              </div>
                <!-- /.form-group -->
                <div class="form-group">
         <label for="lalo"  class="control-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" readonly >
         </div>



            </div>
              <!-- /.col -->



<!-- /.col -->


<div class="col-md-6">


<div class="form-group">
       <label>Cédula</label>
       <input type="text" class="form-control" id="ced" name="ced" readonly >
   </div>
        
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" id="fecha" step="1" value="1995-01-01" class="fecha" readonly >
          </div>
 <!-- /.form-group -->
     
 </div>
<!-- /.row -->
 </div>
<!-- /.col -->






 <div class="row">


<div class="col-md-6">

<div class="form-group">
<label for="lalo"  class="control-label">Diagnostico</label>
<textarea class="form-control" id="diagnostico" name="diagnostico" rows="3" readonly></textarea>

</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->



</div>
 <!-- /.row -->


 <hr>
 <h5>Anamnesis del paciente</h5>
 
 <div class="row">

<div class="col-md-6">
     <div class="form-group">
       <label>Motivo de visita</label>
       <textarea class="form-control" id="mvisita" name="mvisita" rows="3" ></textarea>
   </div>
     <!-- /.form-group -->
   <div class="form-group">
       <label for="lalo"  class="control-label">Alergía</label>
       <textarea class="form-control" id="alergia" name="alergia" rows="3" ></textarea>

  </div>
     <!-- /.form-group -->
 </div>
   <!-- /.col -->


<div class="col-md-6">

<div class="form-group">
<label for="lalo"  class="control-label">APP</label>
<textarea class="form-control" id="app" name="app" rows="3" ></textarea>
</div>
<!-- /.form-group -->

<div class="form-group">
<label for="lalo"  class="control-label">AQX</label>
<textarea class="form-control" id="aqx" name="aqx" rows="3" ></textarea>
</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->

</div>
 <!-- /.row -->

 <div class="row">
 <div class="col-md-6">

<div class="form-group">
<label for="lalo"  class="control-label">AHF</label>
<textarea class="form-control" id="ahf" name="ahf" rows="3" ></textarea>
</div>
<!-- /.form-group -->

<div class="form-group">
<label for="lalo"  class="control-label">Indicaciones médicas</label>
<textarea class="form-control" id="indi" name="indi" rows="3" ></textarea>
</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->

</div>


 <hr>

            <h5>Diagnóstico</h5>
            <div class="row">

              <div class="col-12 col-sm-6">

                <div class="form-group">
  
                  <label for="nombre0" class="control-label">Examén Físico</label>
          
                  <textarea class="form-control" id="efisico" name="efisico" rows="3" ></textarea>
               </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->




              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Diagnóstico</label>
                  <div class="select2-purple">
                 
                     
                  <textarea class="form-control" id="diag" name="diag" rows="3" ></textarea>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->





                </div>
           


    
        </div>

       

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