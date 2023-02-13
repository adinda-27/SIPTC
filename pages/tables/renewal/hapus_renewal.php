<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($db,"delete from renewal where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:renewal.php");
 
?>