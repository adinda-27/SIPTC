<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id              = $_POST['id'];
$username        = $_POST['username'];
$pass        = $_POST['pass'];
$email           = $_POST['email'];
$about_me        = $_POST['about_me'];
$join_date       = $_POST['join_date'];
$finish_kontrak  = $_POST['finish_kontrak'];
$nama        = $_POST['nama'];
 
// update data ke database
mysqli_query($db,"UPDATE  user SET username='$username',pass='$pass',email='$email',about_me='$about_me', about_me='$about_me', join_date='$join_date', finish_kontrak='$finish_kontrak', nama='$nama' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:profile.php?pesan=update");
 
?>