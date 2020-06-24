<?php include("inc/librerias.php"); ?>


  <body>
	<?php include("inc/header.php"); ?>
  <?php include("inc/menu.php"); ?>


<?php


$_SESSION['idPaciente'] = $_GET['id'];
$id =$_SESSION['idPaciente'];

require_once("conn/conexion.php");
$sql ="SELECT a.ID_PACIENTE, b.AREA,c.CUARTO, d.CAMA, 
concat( a.NOMBRE1,' ',a.APELLIDO1) as NOMBRE, a.CEDULA, a.SEXO, a.TIPAJE,
a.RESPONSABLES, a.RELIGION, a.SEGURO, a.TELEFONO, a.BARRIO, a.NUMCASA,a.CALLE,
a.DIAGNOSTICO, a.PROCEDENCIA, a.FECHA_NAC, a.EDAD
FROM PACIENTES a, AREAS b, CUARTOS c, CAMAS d
WHERE a.ID_AREA=b.ID_AREA AND a.ID_CUARTO = c.ID_CUARTO AND a.ID_CAMA= d.ID_CAMA AND ID_PACIENTE=$id";


$query = mysqli_query($con,$sql);

//$datos = array();

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
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h3 class="card-title">Registro médico</h3>
              </div>

   <!-- /.card-header -->
              <div class="card-body">
                <form role="form">

          


      
                  <div class="row">
                  <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Médico</label>
                        <input type="text" class="form-control" readonly>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Unidad</label>
                        <input type="text" class="form-control" value="<?php echo $area; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>cuarto</label>
                        <input type="text" class="form-control" value="<?php echo $cuarto; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>cama</label>
                        <input type="text" class="form-control" value="<?php echo $cama; ?>" readonly>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre completo</label>
                        <input type="text" class="form-control" value="<?php echo $nombre; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-4">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" class="form-control" value="<?php echo $cedula; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  

                  <div class="row">

                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <input type="text" class="form-control" value="<?php echo $fechaNac; ?>" readonly>
                      </div>

                    </div>

                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>sexo</label>
                        <input type="text" class="form-control" value="<?php echo $sexo; ?>" readonly>
                      </div>
                    </div>
            

                  <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="text" value="<?php echo $edad; ?>" class="form-control" readonly>
                      </div>
                    </div>

              
                  </div>
                


                  <div class="row">
             
             <div class="col-sm-3">
               <!-- text input -->
               <div class="form-group">
                 <label>Tipo de sangre</label>
                 <input type="text" value="<?php echo $tipaje; ?>" class="form-control"  readonly>
               </div>
             </div>
             <div class="col-sm-3">
              <!-- textarea -->
              <div class="form-group">
                 <label>Seguro social</label>
                 <input type="text" value="<?php echo $seguro; ?>" class="form-control" readonly>
               </div>
             </div>
             <div class="col-sm-3">
              <!-- textarea -->
              <div class="form-group">
                 <label>religion</label>
                 <input type="text" value="<?php echo $reli; ?>" class="form-control" readonly>
               </div>
             </div>

             <div class="col-sm-3">
              <!-- textarea -->
              <div class="form-group">
                 <label>Télefono</label>
                 <input type="text" value="<?php echo $telefono; ?>"  class="form-control" readonly >
               </div>
             </div>
           </div>
              

           <hr>
 <h5>Datos de procedencia</h5>
     

                  <div class="row">
             
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Diagnóstico</label>
                        <input type="text" class="form-control" value="<?php echo $diagnostico; ?>"  readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                        <label>Procedencia</label>
                        <input type="text" class="form-control" value="<?php echo $procedencia; ?>" readonly>
                      </div>
                    </div>
                  </div>
                  


                  <div class="row">
                
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Responsable</label>
                        <input type="text" value="<?php echo $res; ?>" class="form-control" readonly>
                      </div>
                    </div>
                 
                  </div>
                  <hr>
 <h5>Lugar de residencia</h5>
     
                  <div class="row">
                
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Provincia</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>Distrito</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-6">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>Corregimiento</label>
                    <input type="text" class="form-control" readonly>
                  </div>
                </div>

                <div class="col-sm-6">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>Barrio</label>
                    <input type="text" value="<?php echo $barrio; ?>" class="form-control" readonly>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                 <!-- textarea -->
                 <div class="form-group">
                    <label>Calle</label>
                    <input type="text" value="<?php echo $calle; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="col-sm-6">
                 <!-- textarea -->
                 <div class="form-group">
                    <label># de casa</label>
                    <input type="text" value="<?php echo $casa; ?>" class="form-control" readonly>
                  </div>
                </div>
              </div>

                </form>
              </div>
              <!-- /.card-body -->

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