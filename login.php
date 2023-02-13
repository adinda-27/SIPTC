<!DOCTYPE html>
<html>
<head>
<link rel="icon" 
type="image/png" 
href="tc2.png" /> 
 <title>SIP Training Center SBI | Login</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css"/>
 <link rel="stylesheet" href="style.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>Swal.fire('Login Gagal', 'Username atau Password Salah', 'error');</script>";
		}else if($_GET['pesan'] == "logout"){
			echo "<script>Swal.fire('Anda telah berhasil logout');</script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<script>Swal.fire('Anda harus login untuk mengakses halaman admin');</script>";
		}
	}
	?>

<form class="box" action="cek_login.php" method="post">
<div class="nprinsley-text-rainbowan">
   <h1><center><b> SIP Training Centre </b></center></h1>
</div>
<img src="tc5.png" style="width:250px;height:80px;" align="middle">
<br>
<div id="text">
</div>
<div class="nprinsley-text nprinsley-rainbow">
  <h2><b>Training Centre Login</b></h2>
</div>


<input type="text" name="username"  placeholder="Username .."required>
<input type="password" name="pass" placeholder="Password .."required>
<input type="submit"value="LOGIN">
</form>
<script>
  var i=0,text;
  text = "PT.Sumitomo Wiring Systems Batam Indonesia"

  function ketik() {
    if(i<text.length){
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(ketik,80);
    }
  }
  ketik();
</script>
<script type='text/javascript' src='https://cdn.prinsh.com/NathanPrinsley-effect/efek-salju.js'></script>
</body>
</html>