<?php include("inc/librerias.php"); ?>

  <body>
	<?php include("inc/header.php"); ?>
	<?php include("inc/menu.php"); ?>

  <script type="text/javascript" language="javascript">



function registra() {
/*
var todoGrupo=$("#todoGrupo").is(":checked");
var x="";
if (todoGrupo == true){
    console.log("1");
    x ="1";
}
else{
    console.log("0");
    x="0";
}

*/


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
            <h1>Registro Médico</h1>
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
                  <label>Primer nombre</label>
                  <input type="text" class="form-control" id="nom1" name="nom1" placeholder="Nombre:" required autocomplete="off" >
              </div>
                <!-- /.form-group -->
              <div class="form-group">
                  <label for="lalo"  class="control-label">Segundo Nombre</label>
                  <input type="text" class="form-control" id="nom2" name="nom2" placeholder="Segundo nombre:"  autocomplete="off" >
             </div>
                <!-- /.form-group -->
            </div>
              <!-- /.col -->


   <div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Primer Apellido</label>
            <input type="text" class="form-control" id="apel1" name="apel1" placeholder="Apellido:" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="apel2" name="apel2" placeholder="Segundo apellido:"  autocomplete="off" >
         </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->


<div class="col-md-6">
         <div class="form-group">
         <label for="lalo"  class="control-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" required autocomplete="off" >
         </div>
 <!-- /.form-group -->
         <div class="form-group">
         <label for="lalo"  class="control-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" id="fecha" step="1" value="1995-01-01" class="fecha">
          </div>
 <!-- /.form-group -->
               
 </div>
<!-- /.col -->

<div class="col-md-6">
     <div class="form-group">
       <label>Cédula</label>
       <input type="text" class="form-control" id="ced" name="ced" placeholder="cedula" required autocomplete="off" >
   </div>
     <!-- /.form-group -->
   <div class="form-group">
       <label for="lalo"  class="control-label">Sexo</label>
       <select class="form-control" name="gen" id="gen" required>
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
<label for="lalo"  class="control-label">Tipo de sangre</label>
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
 <input type="text" class="form-control" id="tel" name="tel" placeholder="telefono" required autocomplete="off" >
</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->



</div>
 <!-- /.row -->


 <hr>
 <h5>Datos de procedencia</h5>
 
 <div class="row">

<div class="col-md-6">
     <div class="form-group">
       <label>Diagnóstico</label>
       <input type="text" class="form-control" id="diag" name="diag" placeholder="diagnóstico" required autocomplete="off" >
   </div>
     <!-- /.form-group -->
   <div class="form-group">
       <label for="lalo"  class="control-label">Procedencia</label>
       <input type="text" class="form-control" id="proce" name="proce" placeholder="procedencia" required autocomplete="off" >
  </div>
     <!-- /.form-group -->
 </div>
   <!-- /.col -->


<div class="col-md-6">
<div class="form-group">
<label for="lalo"  class="control-label">Seguro</label>
 <input type="text" class="form-control" id="seguro" name="seguro" placeholder="seguro" required autocomplete="off" >
</div>
<!-- /.form-group -->
<div class="form-group">
<label for="lalo"  class="control-label">Responsable</label>
 <input type="text" class="form-control" id="resp" name="resp" placeholder="Familiares responsables" required autocomplete="off" >
</div>
<!-- /.form-group -->
    
</div>
<!-- /.col -->



</div>
 <!-- /.row -->



 <hr>

            <h5>Lugar de residencia</h5>
            <div class="row">

              <div class="col-12 col-sm-6">

                <div class="form-group">
  
                  <label for="nombre0" class="control-label">Provincia</label>
                              <?php require_once("conn/conexion.php");
                                 $query = mysqli_query($con,"SELECT * FROM PROVINCIAS");
                              ?>
                     
                             <select class="form-control" id="pro" name="pro">
            
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                            <?php     echo "<option value=".$row['ID_PROVINCIA'].">".$row['PROVINCIA']."</option>";
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
                     
                             <select class="form-control" id="dis" name="dis" required>
            
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
                     
                             <select class="form-control" id="corre" name="corre" required>
            
                             <?php  while($row = mysqli_fetch_array($query)){  ?>    
                            <?php     echo "<option value=".$row['ID_CORREGIMIENTO'].">".$row['CORREGIMIENTO']."</option>";
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
                  <label>Barrio</label>
                  <input type="text" class="form-control" id="barrio" name="barrio" placeholder="barrio" autocomplete="off" >
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Calle</label>
                  <input type="text" class="form-control" id="calle" name="calle" placeholder="calle" required autocomplete="off" >
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Número de casa</label>
                  <input type="number" class="form-control" id="casa" name="casa" placeholder="Número de casa" required autocomplete="off" >
                </div>
            </div>


                </div>
           

                <hr>

            <h5>Unidad de destino</h5>
            <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Seleccione</label>
               
                  <div class="select2-purple">
                 
                 <?php require_once("conn/conexion.php");
                    $query = mysqli_query($con,"SELECT * FROM AREAS");
                 ?>
        
                <select class="form-control" id="unidad" name="unidad" required>

                <?php  while($row = mysqli_fetch_array($query)){  ?>    
               <?php     echo "<option value=".$row['ID_AREA'].">".$row['AREA']."</option>";
                }
                mysqli_close($con);
                ?>
        
           </select>

            </div>


            

            </div>


           

            </div>
            <!-- /.row -->

         
          </div>
          <!-- /.card-body -->

    
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