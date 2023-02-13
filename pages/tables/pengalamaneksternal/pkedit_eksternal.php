<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$jabatan = $_POST['jabatan'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$surat_pk = $_POST['surat_pk'];
 
// update data ke database
mysqli_query($db,"update pk_eksternal set NIK='$NIK', nama='$nama', nama_perusahaan='$nama_perusahaan', jabatan='$jabatan', start_date='$start_date', end_date='$end_date', surat_pk='$surat_pk' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:datapengalamankerja.php");
 
?>