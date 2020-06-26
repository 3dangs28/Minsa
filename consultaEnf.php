<?php include("inc/librerias.php"); ?>


<body>
<?php include("inc/header.php"); ?>
<?php include("inc/menu.php"); ?>


<script type="text/javascript" language="javascript">

$( "#p" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});

$( "#t" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});

$( "#r" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});

$( "#pa" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});

$( "#so2" ).blur(function() {
    this.value = parseFloat(this.value).toFixed(2);
});


function registra() {

var id = document.getElementById('id').value;
var medico = document.getElementById('medico').value;
var diagnostico = document.getElementById('diagnostico').value;
var procedencia = document.getElementById('procedencia').value;
var seguro = document.getElementById('seguro').value;
var idioma = document.getElementById('idioma').value;
var responsables = document.getElementById('responsables').value;
var t = document.getElementById('t').value;
var p= document.getElementById('p').value;
var r = document.getElementById('r').value;
var pa = document.getElementById('pa').value;
var so2 = document.getElementById('so2').value;
var condicion = document.getElementById('condicion').value;
var fllegada = document.getElementById('fllegada').value;
var verbal = document.getElementById('verbal').value;
var ojos = document.getElementById('ojos').value;
var motor = document.getElementById('motor').value;

console.log('Éxito!');

$.post("consulta/agregarEnf.php", {
        id: id,
        medico: medico,
        diagnostico: diagnostico,
        procedencia: procedencia,
        seguro: seguro,
        idioma: idioma,
        responsables: responsables,
        t: t,
        p: p,
        r: r,
        pa: pa,
        so2: so2,
        condicion: condicion,
        fllegada: fllegada,
        verbal: verbal,
        ojos: ojos,
        motor: motor
    },
    function(data2) {
      $("#mensaje").html(data2);
      $('html,body').animate({ scrollTop: 0 }, 600);
     //  window.location.replace("pacientes.php");
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
            <h3>Registro</h3>
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
                <h3 class="card-title"> Admisión</h3>
              </div>
              <div id="mensaje"></div>
   <!-- /.card-header -->
              <div class="card-body">
                <form role="form">

    
                  <div class="row">
                  <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Médico</label>
                        <input type="hidden" name="id" id="id" value="<?php echo $idmedico; ?>" class="form-control" readonly>
                        <input type="hidden" name="medico" id="medico" value="<?php echo $idmedico; ?>" class="form-control" readonly>
                        <input type="text" value="<?php echo $medico; ?>" class="form-control" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Procedencia</label>
                        <input type="text" name="procedencia" id="procedencia" value="<?php echo $procedencia; ?>" class="form-control" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Diagnostico</label>
                        <textarea name="diagnostico" id="diagnostico" size="200" class="form-control"  rows="3" readonly><?php echo $diagnostico; ?></textarea>
                      
                      </div>
                    </div>
                  </div>
                  

                  <div class="row">
             
             <div class="col-sm-4">
               <!-- text input -->
               <div class="form-group">
                 <label>Fecha Nacimiento</label>
                 <input type="text"  value="<?php echo $fechaNac; ?>" class="form-control"  readonly>
               </div>
             </div>
             <div class="col-sm-4">
              <!-- textarea -->
              <div class="form-group">
                 <label>Seguro social</label>
                 <input type="text" value="<?php echo $seguro; ?>" class="form-control" name="seguro" id="seguro" readonly>
               </div>
             </div>
             <div class="col-sm-4">
              <!-- textarea -->
              <div class="form-group">
                 <label>Idioma</label>
                 <input type="text" class="form-control" name="idioma" id="idioma">
               </div>
             </div>
           </div>
              
                  
                  <div class="row">
             
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="text" value="<?php echo $edad; ?>" class="form-control"  readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Religión</label>
                        <input type="text" value="<?php echo $reli; ?>" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                  


                  <div class="row">
                
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Responsable</label>
                        <input id="responsables" name="responsables" type="text" value="<?php echo $res; ?>" class="form-control" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Télefono</label>
                        <input type="text" value="<?php echo $telefono; ?>" class="form-control" readonly>
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
                    <input id="t" name = "t" type="number" step="0.01" class="form-control"  />
                  </div>
                </div>
                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>P</label>
                    <input id="p" name = "p" type="number" step="0.01" class="form-control"  />
              
                  </div>
                </div>

                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>R</label>
                    <input id="r" name = "r" type="number" step="0.01" class="form-control"  />
        
                  </div>
                </div>

                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>P/A</label>
                    <input id="pa" name = "pa" type="number" step="0.01" class="form-control"  />
                
                  </div>
                </div>

                <div class="col-sm-2">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>SO2</label>
                    <input id="so2" name = "so2" type="number" step="0.01" class="form-control"  />
                
                  </div>
                </div>

              </div>

              <hr>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Condición Especial</label>
                        <select class="form-control" name="condicion" id="condicion">
                          <option>Ninguna</option>
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
                        <select class="form-control"  name="fllegada" id="fllegada">
                          <option>Caminando</option>
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
                        <select class="form-control" name="verbal" id="verbal">
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
                        <select class="form-control" name="ojos" id="ojos">
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
                        <select class="form-control"  name="motor" id="motor">
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