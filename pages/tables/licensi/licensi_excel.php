<?php
include('../../../config/koneksi.php');
require '../../../excel/vendor/autoload.php';
 
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
        $id                 = $sheetData[$i]['0'];
        $kode_section		= $sheetData[$i]['5'];
        $exp_date			= date("Y-m-d", strtotime($sheetData[$i]['9']));
		
        mysqli_query($db, "UPDATE `licensi` SET 
        `exp_date`='$exp_date'
        WHERE `id`='$id'");
    }
    session_start();
    $_SESSION['success'] = "Data has been successfully updated";
    header("Location:datalicensi_section.php?kode_section=$kode_section"); 
}
?>