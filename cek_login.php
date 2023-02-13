<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pass = $_POST['pass'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from user where username='$username' and pass='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$data_user = mysqli_fetch_assoc($data);
    $_SESSION['id'] = $data_user['id'];
	$_SESSION['pass'] = $data_user['pass'];
	$_SESSION['email'] = $data_user['email'];
	$_SESSION['about_me'] = $data_user['about_me'];
	$_SESSION['NIK'] = $data_user['NIK'];
	$_SESSION['join_date'] = $data_user['join_date'];
	$_SESSION['finish_kontrak'] = $data_user['finish_kontrak'];
	$_SESSION['nama'] = $data_user['nama'];
	$_SESSION['image'] = $data_user['image'];
	$_SESSION['username'] = $data_user['username'];
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>