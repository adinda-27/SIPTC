<?php
include('../config/koneksi.php');
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 

$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        $NIK	        	= $sheetData[$i]['0'];
        $nama 				= $sheetData[$i]['1'];
        $kode_section		= $sheetData[$i]['2'];
		$no_licensi			= $sheetData[$i]['3'];
        $join_date			= date("Y-m-d", strtotime($sheetData[$i]['4']));
        $start_date			= date("Y-m-d", strtotime($sheetData[$i]['5']));
        $exp_date			= date("Y-m-d", strtotime($sheetData[$i]['6']));
		
        mysqli_query($db, "INSERT INTO `renewal`( `NIK`, `nama`, `kode_section`, `no_licensi`, `join_date`, `start_date`, `exp_date`) 
        VALUES ('$NIK','$nama','$kode_section','$no_licensi','$join_date','$start_date','$exp_date')");
    }
    session_start();
    $_SESSION['success'] = "Data has been successfully uploaded";
    header("Location:upload.php"); 
}
?>