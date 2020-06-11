<?php include("inc/librerias.php"); ?>


  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>




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


$id = $_GET['id'];

require_once("conn/conexion.php");
$sql ="SELECT NOMBRE1, APELLIDO1, EDAD, DIAGNOSTICO, CEDULA, FECHA_NAC, DIAGNOSTICO FROM PACIENTES WHERE ID_PACIENTE=$id";
$query = mysqli_query($con,$sql);

$datos = array();

  while($row = mysqli_fetch_array($query))
  {
    $datos =$row;
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
            <h1><?php echo $datos[0]." ".$datos[1]; ?></h1>
             
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


<!-- salida  -->



  
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <?php include("inc/scripts.php"); ?>



 </body>
</html>