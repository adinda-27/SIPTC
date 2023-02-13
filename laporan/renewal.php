<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	// Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Reminder Renewal 1 Bulan Kedepan',0,1,'C');
	$this->Ln(10);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','db_trainingcentre');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'SELECT NIK, nama, kode_section, no_licensi, join_date, start_date, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)');
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('NIK',20,'','C');
$pdf->AddCol('Nama',40,'Country');
$pdf->AddCol('Kode Section',40,'Pop (2001)','R');
$pdf->AddCol('No Licensi',20,'','C');
$pdf->AddCol('JOD',20,'','C');
$pdf->AddCol('Start Date',20,'','C');
$pdf->AddCol('Exp Date',20,'','C');
$prop = array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table($link,'SELECT NIK, nama, kode_section, no_licensi, join_date, start_date, exp_date FROM renewal WHERE exp_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)',$prop);
$pdf->Output('F', 'renewalpdf/renewal.pdf');
?>