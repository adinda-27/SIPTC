<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$image = $_POST['image'];
$NIK = $_POST['NIK'];
$nama = $_POST['nama'];
$join_date = $_POST['join_date'];
$stand= $_POST['stand'];
$line = $_POST['line'];

// menginput data ke database
mysqli_query($db,"insert into line values('$id','$image','$NIK','$nama','$join_date','$stand','$line')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:perpindahanstand.php?NIK=$NIK");
 
?>