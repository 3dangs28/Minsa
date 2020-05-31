<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>




<script type="text/javascript" language="javascript">



function registra() {

var gato = 'gato';
var id = document.getElementById('id').value;
var idmedico = document.getElementById('idmedico').value;
var mvisita = document.getElementById('mvisita').value;
var alergia = document.getElementById('alergia').value;
var app = document.getElementById('app').value;
var aqx = document.getElementById('aqx').value;
var ahf = document.getElementById('ahf').value;
var indi = document.getElementById('indi').value;
var efisico = document.getElementById('efisico').value;
var diag = document.getElementById('diag').value;
document.getElementById('diag').value = gato;

console.log('Éxito!');

$.post("consulta/agregar.php", {
        id: id,
        idmedico: idmedico,
        mvisita: mvisita,
        alergia: alergia,
        app: app,
        aqx: aqx,
        ahf: ahf,
        indi: indi,
        efisico: efisico,
        diag: diag
    },
    function(data2) {
      $("#mensaje").html(data2);
      $('html,body').animate({ scrollTop: 0 }, 600);
       window.location.replace("pacientes.php");
    });
      /*
   var n = data2.includes("Bien");
   console.log(data2);
   console.log(n);
    
      if (n==true){
       // blanquear();
      }
 */
 

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
$usr = $_SESSION['iduser'];
echo '<br>';
$id = $_GET['id'];

require_once("conn/conexion.php");
$sql ="SELECT NOMBRE1, APELLIDO1, EDAD, DIAGNOSTICO, CEDULA, FECHA_NAC, DIAGNOSTICO FROM PACIENTES WHERE ID_PACIENTE=$id";
$query = mysqli_query($con,$sql);

$datos = array();

  while($row = mysqli_fetch_array($query))
  {
    $datos =$row;
  }

//-----------------------------------------------------
$cedula ='';

$sql2 ="SELECT NICK  FROM USUARIOS WHERE ID_USUARIO=$usr";
$query2 = mysqli_query($con,$sql2);

while($row2 = mysqli_fetch_array($query2))
{
  $cedula =$row2['NICK'];
}

echo '<br>';
echo 'cedula: '.$cedula;

//-----------------------------------------------------
$medico = '';
$sql3 ="SELECT ID_MEDICO  FROM MEDICOS WHERE CEDULA='".$cedula."';";
$query3 = mysqli_query($con,$sql3);

while($row3 = mysqli_fetch_array($query3))
{
  $medico =$row3['ID_MEDICO'];
}

echo '<br>';
echo 'Id médico: '.$medico;





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
                  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>"  >
                  <input type="hidden" class="form-control" id="idmedico" name="idmedico" value="<?php echo $medico; ?>"  >
                  <input type="text" class="form-control" value="<?php echo $datos[0]." ".$datos[1]; ?>" readonly >
              </div>
                <!-- /.form-group -->
                <div class="form-group">
         <label for="lalo"  class="control-label">Edad</label>
            <input type="number" class="form-control"  value="<?php echo $datos[2];?>" readonly >
         </div>



            </div>
              <!-- /.col -->



<!-- /.col -->


<div class="col-md-6">


<div class="form-group">
       <label>Cédula</label>
       <input type="text" class="form-control"  value="<?php echo $datos[4];?>" readonly >
   </div>
        
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" step="1" value="<?php echo $datos[5];?>"  readonly >
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
<input type="text" class="form-control"   value="<?php echo $datos[3];?>" readonly >


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
       <label>Historia actual</label>
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
                  <button onclick="registra()" class="btn btn-success float-right">gato</button>
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