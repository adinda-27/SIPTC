<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$kode_section = $_POST['kode_section'];
$no_licensi = $_POST['no_licensi'];
$join_date = $_POST['join_date'];
$start_date = $_POST['start_date'];
$exp_date = $_POST['exp_date'];

 
// update data ke database
mysqli_query($db,"update renewal set NIK='$NIK', nama='$nama',kode_section='$kode_section', no_licensi='$no_licensi', join_date='$join_date', start_date='$start_date', exp_date='$exp_date' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:renewal.php");
 
?>