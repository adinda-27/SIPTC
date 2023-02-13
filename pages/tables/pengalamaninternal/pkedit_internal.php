<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$section_sebelum= $_POST['section_sebelum'];
$proses_sebelum = $_POST['proses_sebelum'];
$section_sekarang = $_POST['section_sekarang'];
$proses_sekarang = $_POST['proses_sekarang'];
$start_date = $_POST['start_date'];
$end_date= $_POST['end_date'];
$surat_tfmember = $_POST['surat_tfmember'];
 
// update data ke database
mysqli_query($db,"update pk_internal set NIK='$NIK', nama='$nama', section_sebelum='$section_sebelum', proses_sebelum='$proses_sebelum', section_sekarang='$section_sekarang', proses_sekarang='$proses_sekarang', start_date='$start_date', end_date='$end_date', surat_tfmember='$surat_tfmember' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:pk_internal.php");
 
?>