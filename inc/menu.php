  <!-- Main Sidebar Container -->
  
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">

     
      <img src="img/minsa.jpg" alt="" width="70%" height="70%" >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--
        <img src="img/3kaviation.jpg" class="img-circle elevation-2" alt="User Image"> 
 -->
        </div>
        <div class="info">
        <?php
        session_start();    
       if($_SESSION['rol']==3){
         $dr="Dr. ";
       }
       else{
        $dr="";
       }
        ?>
          <a href="#" class="d-block"><?php echo "Bienvenido ".$dr."".$_SESSION['userName']; ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  

               <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Administrar
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="secciones.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Secciones</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="roles.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Roles</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Permisos(Desab.)</p>
                  </a>
                </li>
            
                <li class="nav-item">
                  <a href="areas.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Áreas</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="medicos.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Médicos</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="enfermeras.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Enfermeras</p>
                  </a>
                </li>
            
            

                <li class="nav-item">
                  <a href="usuarios.php" class="nav-link">
                    <i class="fa fa-user nav-icon"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
                
            
              </ul>
            </li>  

            <li class="nav-item has-treeview">
            <a href="pacienteRegistro.php" class="nav-link">
              <i class="nav-icon fa fa-medkit"></i>
              <p>
                Registro médico
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

       
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-medkit"></i>
              <p>
                Unidad de atención
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pacientes.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Pacientes</p>
                </a>
              </li>
            </ul>
          </li>




            <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fa fa-bar-chart"></i>
                <p>
                  Estadísticas
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
           
            </li>

      
            <ul class="nav ">
            <a href="login.html" class="nav-link">
                    <i class="fa fa-sign-out nav-icon"></i>
                    <p>Salir</p>
                  </a>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>