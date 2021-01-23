<?php
ob_start();

include "../conexion.php";
include('fpdf.php');

$nombre =$_POST['nombre'];
$cantpasajeros =$_POST['cantpasajeros'];
$nhabitaciones =$_POST['nhabitaciones'];
$cab =$_POST['cab'];
$importe =$_POST['importe'];
$tipodepago =$_POST['tipodepago'];
$fechaingreso =$_POST['fechaingreso'];
$fechasalida =$_POST['fechasalida'];



class PDF extends FPDF{

	function Header(){
		$this->SetFont('Arial','B',15);
		
		$this->Cell(276,5,"Lista de Contratos",0,1,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		
		


	}
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,"Pagina ".$this->PageNo());

	}
	function headerTable(){
		$this->SetFont('Times','B',12);
		$this->Cell(40,5,'Nombre',1,0,'C',1);
		$this->Cell(40,5,'Pasajeros',1,0,'C',1);
		$this->Cell(40,5,'N Habitaciones',1,0,'C',1);
		$this -> Cell(40,5,'N Cabaña',1,0,'C',1);
$this -> Cell (40,5,'Importe',1,0,'C',1);
$this -> Cell (40,5,'Tipo de Pago',1,0,'C',1);


$this -> Cell (400,5, 'Fecha Ingreso',1,0,'C',1);
$this -> Cell (40,5, 'Fecha Salida',1,0,'C',1);
	$this->Ln();


}
}


$pdf= new PDF ('L','mm','legal');
$pdf -> AddPage();
$pdf -> SetFillColor(232,232,232);

$pdf -> Cell(40,5,'Nombre',1,0,'C',1);
$pdf -> Cell(40,5,'Pasajeros',1,0,'C',1);
$pdf -> Cell(40,5,'N Habitaciones',1,0,'C',1);

$pdf -> Cell(40,5,utf8_decode('N Cabaña'),1,0,'C',1);
$pdf -> Cell (40,5,'Importe',1,0,'C',1);
$pdf -> Cell (40,5,'Tipo de Pago',1,0,'C',1);


$pdf -> Cell (40,5, 'Fecha Ingreso',1,0,'C',1);
$pdf -> Cell (40,5, 'Fecha Salida',1,0,'C',1);



$pdf->SetFont('Times','',12);



$consulta=mysqli_query($conection, "SELECT c.codcontrato, cl.nombre, c.cantpasajeros, c.nhabitaciones,c.cab, c.importe, c.tipodepago, c.fechaingreso, c.fechasalida  FROM contrato c
														INNER JOIN cliente cl
														ON c.cliente = cl.idcliente
											 WHERE c.estatus = 1  AND c.codcontrato  ");

while ($resultado=mysqli_fetch_array($consulta)) {

$pdf -> Ln();
	$pdf -> Cell(40,5,utf8_decode($resultado['nombre']),1,0,'C');
	$pdf -> Cell(40,5,$resultado['cantpasajeros'],1,0,'C');
	$pdf -> Cell(40,5,$resultado['nhabitaciones'],1,0,'C');
	$pdf -> Cell(40,5,$resultado['cab'],1,0,'C');
	$pdf -> Cell (40,5,$resultado['importe'],1,0,'C');
	$pdf -> Cell (40,5,$resultado['tipodepago'],1,0,'C');
	$pdf -> Cell (40,5,$resultado[ 'fechaingreso'],1,0,'C');
	$pdf -> Cell (40,5, $resultado['fechasalida'],1,0,'C');

}

ob_end_clean();
$pdf->Output();



?>



