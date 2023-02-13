<?php 
include '../../../config/koneksi.php';
$id = $_POST['id'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION); 
 
if(!in_array($ext,$ekstensi) ) {
	header("location:profile.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 104407000){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../../../dist/img/'.$rand.'_'.$filename);
		$update = mysqli_query($db, "UPDATE user SET image='$xx' WHERE id='$id'");
		if ($update) {
			header("location:profile.php?alert=berhasil");
		} else {
			header("location:profile.php?alert=gagal");
		}
	}else{
		header("location:profile.php?alert=gagal_ukuran");
	}
}
