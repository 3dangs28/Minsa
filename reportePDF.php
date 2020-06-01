<?php
//include '../conexion/config.php';
require('fpdf.php');

//$codigo =$_GET["codigo"];
$codigo =utf8_decode('Código de registro o id paciente');

$pais_p = utf8_decode('PAÍS: ');
$pasaP_p =utf8_decode('PASAPORTE / CÉDULA:   ');
$correo_p =utf8_decode('CORREO ELECTRÓNICO: ');
$nRepre ='Nombre del Representante ';
$firma ='Firma';
$sello = 'SELLO';


  /*  $sql = "SELECT * FROM comisiones WHERE codigo='$codigo'";
    
    mysqli_select_db($conexion,$db_name);
    $rec= mysqli_query($conexion,$sql);
     
    while ($row = mysqli_fetch_object($rec)){
        
        $idu = $row->idUniversidad;
        $labor = $row->labor;
        $espi =  $row->labor_especifica;   
        $nombre = $row->pnombre;
        $nombre2= $row->snombre;
        $apellido= $row->papellido;
        $apellido2= $row->sapellido;   
        $foto =$row->fotoid;
        $cid = $row->nic;
        $correo =  $row->correo;
   */ 
        $idu = '';
        $labor ='';
        $espi = '';   
        $nombre = '';
        $nombre2= '';
        $apellido='';
        $apellido2= '';   
        $foto ='';
        $cid = '';
        $correo = '';

/*
    }

    $sqlUni = "SELECT * FROM universidades WHERE idUniversidad='$idu'";
    
    mysqli_select_db($conexion,$db_name);
    $recU= mysqli_query($conexion,$sqlUni);
     
    while ($row = mysqli_fetch_object($recU)){
        $uni = $row->universidad;
        $pais = $row->pais;
     */
        $uni = 'Gato de prueba';
        $pais = 'Namekusei';
        /*
    }

    mysqli_close($conexion);
    */

    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        $tit_a = utf8_decode('sistema');
        $tit_b = utf8_decode('de prueba');
        $tit_c = utf8_decode('ejemplo');
        $tit_d = utf8_decode('reporte');
        $tit_e = utf8_decode('INSCRIPCIÓN DE PACIENTE');
        // Logo
       $this->Image('img/minsaCH.png',17,25);
        // Arial bold 15
        $this->SetFont('Arial','B',12);
    
       $this->SetXY(50, 20);
       $this->Cell(110,7,''.$tit_a.'',0,1,'C');
        // Mueve a la derecha 5.5 centimetros
       $this->Cell(55);
       $this->Cell(80,7,''.$tit_b.'',0,1,'C');
       $this->Cell(55);
       $this->Cell(80,7,''.$tit_c.'',0,1,'C');
       $this->SetXY(62, 45);
       $this->Cell(85,7,''.$tit_d.'',0,1,'C');
       $this->SetXY(65, 55);
       $this->Cell(80,7,''.$tit_e.'',0,1,'C');
    
      // Logo 
      //último parámetro ajusta el tamaño de la imagen
      $this->Image('img/minsaCH.png',165,28,30);
    
        // Line break
        $this->Ln(20);
    
    }

    }

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//Marco de la pagina
$pdf->Rect(10, 10, 190, 260 );


$pdf->SetFont('Arial','',12);
//el segundo numero despues del cell, significa la distancia del salto de linea
//La C mayuscula representa el centro, del string

//marco de la imagen
//$pdf->Rect(140,115, 45, 55);

//Viewport de salida

//posición de código
$pdf->SetXY(15, 10);
$pdf->Cell(0,10,''.$codigo.'',0,1);


//posición universidad
$pdf->SetXY(20,65);
$pdf->Cell(0,10,'Nomobre de la prueba: Gato de prueba',0,1);

//posición país
$pdf->SetXY(20, 75);
$pdf->Cell(0,10,''.$pais_p.' '.$pais.'',0,1);


//Posición de labores
$pdf->SetXY(145, 73);
$pdf->Cell(0,8,'LABOR: '.$labor.'',0,1);


$pdf->SetXY(145, 79);
$pdf->Cell(0,8,''.$espi.'',0,1);

//Posición nombre
$pdf->SetXY(20, 90);
$pdf->Cell(0,10,'DATOS PERSONALES:',0,1);


//Lineas de datos personales
$pdf->Line(20, 98, 65, 98);

$pdf->SetXY(20, 102);
$pdf->Cell(0,10,'PRIMER NOMBRE:        '.$nombre.'',0,1);

$pdf->SetXY(20, 108);
$pdf->Cell(0,10,'PRIMER APELLIDO:      '.$apellido.'',0,1);

$pdf->SetXY(20, 114);
$pdf->Cell(0,10,'SEGUNDO NOMBRE:    '.$nombre2.'',0,1);

$pdf->SetXY(20, 120);
$pdf->Cell(0,10,'SEGUNDO APELLIDO:  '.$apellido2.'',0,1);


//Posición de pasaporte 
$pdf->SetXY(20, 130);
$pdf->Cell(0,8,''.$pasaP_p.''.$cid.'',0,1);


//Posición de Correo eléctronico
$pdf->SetXY(50, 150);
$pdf->Cell(0,8,''.$correo_p.''.$correo.'',0,1);

//posición y tamaño de la foto
//$pdf->Image(''.$foto.'',145,88,35);


$pdf->SetXY(30, 230);
$pdf->Cell(0,8,''.$nRepre.'',0,1);

//Lineas de firma del representante legal
$pdf->Line(40, 230, 95, 230);


//Posición del representante legal
$pdf->SetXY(30, 230);
$pdf->Cell(0,8,''.$nRepre.'',0,1);

//Posición de la firma
$pdf->SetXY(138, 230);
$pdf->Cell(0,8,''.$firma.'',0,1);

//Posición de sello
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(98, 260);
$pdf->Cell(0,8,''.$sello.'',0,1);


//Firma del participante
$pdf->Line(120, 230, 170, 230);

$pdf->Output();

?>