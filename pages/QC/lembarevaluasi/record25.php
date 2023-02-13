<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_line = $_POST['id_line'];
$NIK = $_POST['NIK'];
$cb1 = $_POST['cb1'];
$cb2 = $_POST['cb2'];
$cb3 = $_POST['cb3'];
$cb4 = $_POST['cb4'];


// menginput data ke database
mysqli_query($db,"insert into item25 values('$id_line','$NIK','$cb1','$cb2','$cb3','$cb4')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:lembareval.php?id=$id_line");
 
?>