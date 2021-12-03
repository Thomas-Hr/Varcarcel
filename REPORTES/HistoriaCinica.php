<?php
require('fpdf.php');

class PDF extends FPDF{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../assets/images/logob.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10, utf8_decode('HISTORIA CLÍNICA'),0,0,'C');
    // Salto de línea
    $this->Ln(40);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page').$this->PageNo().'/{nb}',0,0,'C');
}
}

require('../metodos.php');
$Modelo=new metodos();

$HC=$Modelo-> getPacientesHis();

$id=$_GET['id'];
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
// $pdf->SetLeftMargin(1);

$pdf->SetFont('Arial','B',16);
if ($HC !=null) {
    foreach ($HC as $hi) {
        // $pdf->cell(50,10,$hi['idPacienteFk'],1,0,'LR',0);
        // $pdf->cell(90,10,$hi['Nombre'],1,0,'LR',0);
        // $pdf->cell(50,10,$hi['peso'],1,1,'LR',0);
        // $pdf->cell(40,10,$hi['estatura'],1,0,'LR',0);
        // $pdf->cell(50,10,$hi['tipoDocumento'],1,0,'LR',0);
        // $pdf->cell(50,10,$hi['FechaNacimiento'],1,0,'LR',0);
        // $pdf->cell(50,10,$hi['NumDocumento'],1,1,'LR',0);
        // $pdf->cell(190,30,$hi['antecedentesFamiliares'],1,1,'LR',0);


        $pdf->cell (15,15,"ID: ".$hi['idPaciente'],0,1,'C',0);
        $pdf->cell(15,15, "Nombre completo: ".utf8_decode($hi['Nombre'])." - ".$hi['estadoPaciente'] ,0,1,'LR',0);
        $pdf->cell(15,15,"Peso (Kg): ".$hi['peso'],0,1,'LR',0);
        // $pdf->cell(50,10,$hi['Nombre'],1,0,'LR',0);
        
        $pdf->cell(15,15,"Tipo Documento: ".$hi['tipoDocumento']."   
             ".utf8_decode('N°documento:').$hi['NumDocumento'],0,1,'LR',0);
        $pdf->Ln();
        $pdf->cell(15,15,'Antecedentes familiares',0,1);
        $pdf->write(8,$hi['anteFam']);
        $pdf->Ln();


        $pdf->cell(15,15,'Enfermedades',0,1);
        $idP=$hi['idPaciente'];
        $USEREG=$Modelo->getPacienteenfermedad($idP);
        if($USEREG !=null){
            foreach ($USEREG as $datos) {
          
                $pdf->cell (13,10,utf8_decode('- '.$datos["nombreEnfermedad"]),0,1);
        
    }
}
    }
}

$pdf->Output();