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
        ?>
          <a href="#" class="d-block"><?php echo "Bienvenido ".$_SESSION['userName']; ?> </a>
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
                  Antecedentes médicos
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
                    <p>Permisos</p>
                  </a>
                </li>
            
                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Áreas</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                    <p>Médicos</p>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-github-alt"></i>
              <p>
                Pacientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pacientes.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Recepción General</p>
                </a>
              </li>
            </ul>
          </li>




      
            <ul class="nav ">
            <a href="index.php" class="nav-link">
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