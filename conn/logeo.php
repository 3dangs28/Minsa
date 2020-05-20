<?php

session_start();    
include '../conn/conexion.php';
/*
if(isset($_GET['cerrar_sesion'])){
    session_unset();
    session_destroy();
    }
    */
    /*
    if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
        header('location: index.php');
      break;
    
      case 2:
        header('location: venta.php');
      break;
    
      default;
      }
    }
    */


    

if(isset($_POST['usuario']) && isset($_POST['password'])){
   
    $user    = $_POST['usuario'];
    $password= $_POST['password'];
    
  
function verificar_login($user,$password,$con,&$iduser,&$rol,&$nombre){


echo $user." ".$password."<br>";
 
$sql = "SELECT * FROM USUARIOS WHERE NICK='$user' AND PASS='$password'";
  
    $query = mysqli_query($con,$sql);

    $conteo =0;

while($row = mysqli_fetch_array($query)){
    $conteo++;
    $iduser= $row['ID_USUARIO'];
    $rol= $row['ID_ROL'];
    echo $rol;
    $nombre= $row['NOMBRE'];
}


if ($conteo==1){
    return 1;
}
else {
    return 0;
}
mysqli_close($con);

}


if(verificar_login($user,$password,$con,$a,$rol,$c) == 1)
        {
    
            $_SESSION['iduser']=$a; 
            $_SESSION['rol']=$rol; 
            $_SESSION['userName']=$c; 
           

            switch ($rol) {
                case "6":
                header('Location: ../index.php');
                    break;
                case "2":
                header('Location: ../login.html');
                    break;
           
            }
            
        }
        else
        {
            header('Location: ../login.html');
        }

    }
    ?>
