<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($db,"delete from pk_eksternal where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:datapengalamankerja.php");
 
?>