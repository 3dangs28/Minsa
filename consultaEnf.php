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


$_SESSION['idPaciente'] = $_GET['id'];
$id =$_SESSION['idPaciente'];

require_once("conn/conexion.php");
$sql ="SELECT NOMBRE1, APELLIDO1, EDAD, DIAGNOSTICO, CEDULA, FECHA_NAC FROM PACIENTES WHERE ID_PACIENTE=$id";
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
            <h1><?php echo "Paciente: ".$datos[0]." ".$datos[1]." ".$datos[4]; ?></h1>
             
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
                <h3 class="card-title"> Admisión</h3>
              </div>

   <!-- /.card-header -->
              <div class="card-body">
                <form role="form">

          


      
                  <div class="row">
                  <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Médico</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Procedencia</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Diagnostico</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  

                  <div class="row">
             
             <div class="col-sm-4">
               <!-- text input -->
               <div class="form-group">
                 <label>Fecha Nacimiento</label>
                 <input type="text" class="form-control"  readonly>
               </div>
             </div>
             <div class="col-sm-4">
              <!-- textarea -->
              <div class="form-group">
                 <label>Seguro social</label>
                 <input type="text" class="form-control" >
               </div>
             </div>
             <div class="col-sm-4">
              <!-- textarea -->
              <div class="form-group">
                 <label>Idioma</label>
                 <input type="text" class="form-control" >
               </div>
             </div>
           </div>
              
                  
                  <div class="row">
             
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" value="<?php echo $datos[2]; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Religión</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  


                  <div class="row">
                
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Responsable</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Télefono</label>
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                  </div>
<hr>
<h4>Signos Vitales</h4>
                  <div class="row">
                
                <div class="col-sm-2">
                  <!-- text input -->
                  <div class="form-group">
                    <label>T</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>P</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>

                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>R</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>

                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>P/A</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>

                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>SO2</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>

              </div>

              <hr>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Condición Especial</label>
                        <select class="form-control">
                          <option>Ciego</option>
                          <option>Sordo</option>
                          <option>Mudo</option>
                          <option>Ciego/sordo</option>
                          <option>Ciego/Mudo</option>
                          <option>Mudo/sordo</option>
                          <option>Ciego/Mudo/sordo</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Forma de lladada</label>
                        <select class="form-control">
                          <option>Silla de Rueda</option>
                          <option>En Camilla</option>
                          <option>Muleta</option>
                          <option>Bastón</option>
                        
                        </select>
                      </div>
                    </div>
                 
                  </div>
<hr>
                  <h4>GLASGOW</h4>
                  <div class="row">
                    <div class="col-sm-4">
                      
                      <!-- select -->
                      <div class="form-group">
                        <label>Verbal</label>
                        <select class="form-control">
                          <option>5</option>
                          <option>4</option>
                          <option>3</option>
                          <option>2</option>
                          <option>1</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Ojos</label>
                        <select class="form-control">
                          <option>4</option>
                          <option>3</option>
                          <option>2</option>
                          <option>1</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Motor</label>
                        <select class="form-control" >
                          <option>6</option>
                          <option>5</option>
                           <option>4</option>
                          <option>3</option>
                          <option>2</option>
                          <option>1</option>
                        </select>
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