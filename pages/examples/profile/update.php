<?php 
 
include '../../../config/koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$join_date = $_POST['join_date'];
$finish_kontrak = $_POST['finish_kontrak'];
 
mysqli_query($db, "UPDATE user SET username='$username', password='$password', join_date='$join_date' , finish_kontrak='$finish_kontrak' WHERE id='$id'");
 
header("location:profile.php?pesan=update");
?>