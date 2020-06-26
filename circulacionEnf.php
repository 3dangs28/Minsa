<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
  <?php include("inc/menu.php");
       ?>


<script type="text/javascript" language="javascript">


function registra() {

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
	
<?php

$id =$_SESSION['idPaciente'];


require_once("conn/conexion.php");

$sql2="SELECT b.ID_MEDICO, concat( b.NOMBRE1,' ',b.APELLIDO1) as MEDICO FROM CONSULTAS a, MEDICOS b WHERE a.ID_MEDICO=b.ID_MEDICO AND a.ID_PACIENTE=$id";
$query2 = mysqli_query($con,$sql2);


while($row1 = mysqli_fetch_array($query2))
{
  $medico =$row1['MEDICO'];
  $idmedico =$row1['ID_MEDICO'];
}


$sql ="SELECT a.ID_PACIENTE, b.AREA,c.CUARTO, d.CAMA, concat( a.NOMBRE1,' ',a.APELLIDO1) as NOMBRE, 
a.CEDULA, a.SEXO, a.TIPAJE, a.RESPONSABLES, a.RELIGION, a.SEGURO, a.TELEFONO, a.BARRIO, a.NUMCASA,a.CALLE,
a.DIAGNOSTICO, a.PROCEDENCIA, a.FECHA_NAC, a.EDAD
FROM PACIENTES a, AREAS b, CUARTOS c, CAMAS d
WHERE a.ID_AREA=b.ID_AREA AND a.ID_CUARTO = c.ID_CUARTO AND a.ID_CAMA= d.ID_CAMA
AND ID_PACIENTE=$id";

//$datos = array();
  $query = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($query))
  {
    $area =$row['AREA'];
    $cuarto =$row['CUARTO'];
    $cama =$row['CAMA'];
    $nombre =$row['NOMBRE'];
    $cedula =$row['CEDULA'];
    $diagnostico =$row['DIAGNOSTICO'];
    $procedencia =$row['PROCEDENCIA'];
    $fechaNac =$row['FECHA_NAC'];
    $edad =$row['EDAD'];
    $sexo =$row['SEXO'];
    $tipaje =$row['TIPAJE'];
    $res =$row['RESPONSABLES'];
    $reli =$row['RELIGION'];
    $seguro =$row['SEGURO'];
    $telefono =$row['TELEFONO'];
    $barrio =$row['BARRIO'];
    $casa =$row['NUMCASA'];
    $calle =$row['CALLE'];

  }

  ?>




<div class="content-wrapper" style="min-height: 1157.69px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <h5><?php echo "Paciente: ".$nombre." ".$cedula; ?></h5>
             
            </ol>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="pacientes.php" class="btn btn-primary btn-block mb-3">Finalizar</a>



    <!-- /.inicio menú form -->

    <?php include("menuForms.php"); ?>
          
    <!-- /.fin menú form -->




<!-- entrada  -->
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Circulación</h3>
              </div>

   <!-- /.card-header -->
              <div class="card-body">
                <form role="form">

          

                  <div class="row">
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label>Dosis</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Vía</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Intervalo</label>
                        <select class="form-control" >
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>




      
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Medicamento</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Observación</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  
              

      
                </form>
              </div>
              <!-- /.card-body -->
<!-- salida  -->


       <div class="card-footer">
          <button type="submit" class="btn btn-default">Cancelar</button>
          <button onclick="registra()" class="btn btn-success float-right">Guardar</button>
       </div>
  

        <!-- /.col -->
      </div>
     
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <?php include("inc/scripts.php"); ?>



 </body>
</html>