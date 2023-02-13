<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$jabatan = $_POST['jabatan'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$surat_pk = $_POST['surat_pk'];
 
// menginput data ke database
mysqli_query($db,"insert into pk_eksternal values('','$NIK','$NIK','$nama_perusahaan','$jabatan','$start_date','$end_date','$surat_pk')");
 
// mengalihkan halaman kembali ke index.php
header("location:datapengalamankerja.php");
 
?>