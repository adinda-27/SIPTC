<?php 
session_start();
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_line = $_POST['id_line'];
$NIK = $_POST['NIK'];
$cb1 = $_POST['cb1'];
$cb2 = $_POST['cb2'];
$model1 = $_POST['model1'];
$model2 = $_POST['model2'];
$conveyor1 = $_POST['conveyor1'];
$conveyor2 = $_POST['conveyor2'];
$operator1 = $_POST['operator1'];
$operator2 = $_POST['operator2'];
$jumlahpoin1 = $_POST['jumlahpoin1'];
$jumlahpoin2 = $_POST['jumlahpoin2'];
$poin1 = $_POST['poin1'];
$poin2 = $_POST['poin2'];
$persentase1 = $_POST['persentase1'];
$persentase2 = $_POST['persentase2'];
$cb3 = $_POST['cb3'];
$cb4 = $_POST['cb4'];


// menginput data ke database
mysqli_query($db,"insert into item75 values('$id_line','$NIK','$cb1','$cb2','$model1', '$model2','$conveyor1','$conveyor2', '$operator1','$operator2','$jumlahpoin1','$jumlahpoin2','$poin1','$poin2','$persentase1','$persentase2','$cb3','$cb4')");
 


    //set session sukses
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan halaman kembali ke index.php
header("location:lembareval.php?id=$id_line");
 
?>