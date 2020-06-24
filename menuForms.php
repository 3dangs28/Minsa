
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Expediente</h3>

              <div class="card-tools">

                <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#regeMedico" aria-expanded="true" aria-controls="#regeMedico"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" id="regeMedico">
            <div class="card-body p-0" style="display: block;"  >
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                <?php	echo '<a href="regeEnf.php?id='.$_SESSION['idPaciente'].'" class="nav-link">'; ?>
               
                    <i class="fa fa-inbox"></i> Registro médico (Reges)
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope"></i> Admisión médica
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope"></i> Indicaciones médicas
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->

            </div>
           <!-- /.collapse -->

          </div>
          <!-- /.card -->

          
<!-- /.--------------------------------------------------------------------------->

<div class="card">
            <div class="card-header">
              <h3 class="card-title">Exp.enfermería</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#expEnfermeria" aria-expanded="false" aria-controls="#expEnfermeria"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="collapse multi-collapse" id="expEnfermeria">
            <div class="card-body p-0" style="display: block;">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                   <?php	echo '<a href="hojamedica.php" class="nav-link">'; ?>
                    <i class="fa fa-inbox"></i>Hoja de medicamento
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
             
                  <?php	echo '<a href="notaEnfermeria.php" class="nav-link">'; ?>
                    <i class="fa fa-envelope"></i> Nota de enfermería
                  </a>
                </li>
           
            

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope"></i> Signos Vitales
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope"></i> Tarjeta de medicamento
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope"></i> Plan cuido
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-envelope"></i> Glicemia capilar y presión arterial
                  </a>
                </li>


              </ul>
            </div>
            <!-- /.card-body -->


            </div>
           <!-- /.collapse -->


          </div>
          <!-- /.card -->


<!-- /.--------------------------------------------------------------------------->




<div class="card">
            <div class="card-header">
              <h3 class="card-title">Nota de admisión</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#notaAdmision" aria-expanded="false" aria-controls="#notaAdmision"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="collapse multi-collapse" id="notaAdmision">
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                <?php	echo '<a href="consultaEnf.php?id='.$_SESSION['idPaciente'].'" class="nav-link">'; ?>
         
                    <i class="fa fa-circle text-danger"></i>
                    Admisión
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-warning"></i> Respiración
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Circulación
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Mucosa oral
                  </a>
                </li>


                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Comunicación
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Eliminación Urinaria
                  </a>
                </li>


                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Eliminación instestinal
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Deambulación
                  </a>
                </li>



                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Dolor
                  </a>
                </li>


                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Estado de la piel
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Escala de riesgo de downton
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle text-primary"></i>
                    Escala de Norton riesgo de ulcera por presión
                  </a>
                </li>


              </ul>
            </div>
            <!-- /.card-body -->
            </div>
           <!-- /.collapse -->

          </div>
          <!-- /.card -->

      

<!-- /.--------------------------------------------------------------------------->


</div>

<!-- /.col -->
<div class="col-md-9">
