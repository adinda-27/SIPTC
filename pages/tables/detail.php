<!-- cek apakah sudah login -->
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
  
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" 
type="image/png" 
href="../../dist/img/tc2.png" /> 
<style>
  .card-profile-image img {
  position: absolute;
  left: 50%;
  max-width: 180px;
  transition: all .15s ease;
  transform: translate(-50%, -30%);
  border-radius: .375rem;
}
 @media print
 {
  .noprint {display:none;}
 }

 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP Training Center | Detail</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
<div class="noprint">
<button onclick="topFunction()" id="myBtn" title="Go to top">Kembali ke atas</button>
</div>

<div class="modal-content">
<?php 
		include '../../config/koneksi.php';
		$no = 1;
        $NIK = $_GET['NIK'];
		$data = mysqli_query($db,"select * from pegawai where NIK='$NIK'");
		while($d = mysqli_fetch_array($data)){
			?>
       <div class="modal-header">
         <h5>Data Pegawai Training a/n <?php echo $d['nama']; ?>,<?php echo $d['NIK']; ?> </h5>
       </div>
       <div class="modal-body">
       <div class="card card-info">
       <div class="card-header">
          <h3 class="card-title"><center>Profile</center></h3>
        </div>
        <div class="card-body">
     <div class="media">
        <div class="media-body">
          <body>
          <div class="noprint">
          <a href="data.php" class="btn btn-success btn-sm text-white tombolback"> <i class="fa fa-arrow-left"></i> Back</a><br></br>
          </div>
                <table cellspacing="0" cellpadding="1" align="left" width="700">
                <center><img src="../../dist/img/stm1.jpg" style="width: 1200px;border: 1px solid blue;"/></center>
          <div class="card-profile-image">
                  <a href="#">
                    <center><img src="../../dist/img/<?php echo isset($d['image']) && !empty($d['image']) ? $d['image'] : '7309681.jpg'; ?>" class="rounded-circle"></center>
                  </a>
                </div>
                </tr>
                <br></br>
                <br></br>
                <br></br>
                <div class="noprint">
                <a href="detail.php?NIK=<?php echo $d['NIK']; ?>">
    <center><button class="btn btn-success" onClick="window.print();"><i class="fas fa-print"></i>Print</button></center><br>
    </a></div>
                <font size="5" color="blue"><strong><center>BIODATA PEGAWAI</center></strong></font>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $d['nama']; ?></td> 
                </tr>
                <tr>
                  <td>NIK</td>
                  <td><?php echo $d['NIK']; ?></td>
              </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td><?php echo $d['ttl']; ?></td>
                </tr>
                <tr>
                  <td>No.HP</td>
                  <td><?php echo $d['no_hp']; ?></td>
              </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $d['alamat']; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><?php echo $d['agama']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><?php echo $d['pekerjaan']; ?></td>
                </tr>
                <tr>
                  <td>Section</td>
                  <td><?php echo $d['section']; ?></td>
              </tr>
              <tr>
                  <td>Sub Section</td>
                  <td><?php echo $d['sub_section']; ?></td>
              </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $d['status']; ?></td>
                </tr>
                <?php 
		}
		?>
            </table>
            </div>
     </div>
     </div>
  
   </div>
 </div>
   </div>
 </div>
 <br></br>
            <div class="card">
            <div class="card-body">
            <font size="5" color="red"><strong><center>RENEWAL</center></strong></font>
            <table id="example1" class="table table-bordered table-striped table-danger">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No_Licensi</th>
                    <th>Join Date</th>
                    <th>Start Date</th>
                    <th>Exp Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
	include '../../config/koneksi.php';
  $no = 1;
	$NIK = $_GET['NIK'];
	$data = mysqli_query($db,"select * from renewal where NIK='$NIK'");
	while($d = mysqli_fetch_array($data)){
		?>
    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['no_licensi']; ?></td>
                      <td><?php echo $d['join_date']; ?></td>
                      <td><?php echo $d['start_date']; ?></td>
                      <td><?php echo $d['exp_date']; ?></td>
                      </tr>
                      <?php 
		}
		?>
  </table>
  </body>
  </div>
     </div>
     </div>
     </div>
  
   </div>
 </div>
   </div>
 </div>
 <br></br>
            <div class="card">
            <div class="card-body">
            <font size="5" color="orange"><strong><center>LICENSI</center></strong></font>
            <table id="example1" class="table table-bordered table-striped table-warning">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Licensi</th>
                  <th>Nama Section</th>
                  <th>Join Date</th>
                  <th>Start Date</th>
                  <th>Exp Date</th>
                  <th>Licensi</th>
                </tr>
                </thead>
                <tbody>
                <?php
	include '../../config/koneksi.php';
  $no = 1;
	$NIK = $_GET['NIK'];
	$data = mysqli_query($db,"select * from licensi where NIK='$NIK'");
	while($d = mysqli_fetch_array($data)){
		?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_licensi']; ?></td>
                    <td><?php echo $d['nama_section']; ?></td>
                    <td>2<?php echo $d['join_date']; ?></td>
                    <td><?php echo $d['start_date']; ?></td>
                    <td><?php echo $d['exp_date']; ?></td>
                    <td><img src="../../dist/img/<?php echo $d['licensi']; ?>" width="100" /></td>
                    </tr>
                      <?php 
		}
		?>
  </table>
  </body>
  </div>
     </div>
     </div>
     </div>
  
   </div>
 </div>
   </div>
 </div>
 <br></br>
 <div class="card">
            <div class="card-body">
            <font size="5" color="blue"><strong><center>PENGALAMAN KERJA</center></strong></font>
            <font size="3" color="blue"><strong>PENGALAMAN KERJA INTERNAL</strong></font>
            <table id="example1" class="table table-bordered table-striped table-primary">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Section Sebelumnya</th>
                    <th>Section Proccess Sebelumnya</th>
                    <th>Section Sekarang</th>
                    <th>Section Proccess Sekarang</th>
                    <th>Start date</th>
                    <th>End Date</th>
                    <th>Surat Transfer Member</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
		include '../../config/koneksi.php';
		$no = 1;
        $NIK = $_GET['NIK'];
		$data = mysqli_query($db,"select * from pk_internal where NIK='$NIK'");
		while($d = mysqli_fetch_array($data)){
			?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['section_sebelum']; ?></td>
                      <td><?php echo $d['proses_sebelum']; ?></td>
                      <td><?php echo $d['section_sekarang']; ?></td>
                      <td><?php echo $d['proses_sekarang']; ?></td>
                      <td><?php echo $d['start_date']; ?></td>
                      <td><?php echo $d['end_date']; ?></td>
                      <td><img src="../../dist/img/<?php echo $d['surat_tfmember']; ?>" width="100" /></td>
                      </tr>
                      <?php 
		}
		?>
  </table>
  <br>
  <font size="3" color="blue"><strong>PENGALAMAN KERJA EKSTERNAL</strong></font>
  <table id="example1" class="table table-bordered table-striped table-primary">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Jabatan</th>
                    <th>Start date</th>
                    <th>End Date</th>
                    <th>Surat Pengalaman Kerja atau Rekomendasi</th>
                  </tr>
                  </thead>
                  <?php 
		include '../../config/koneksi.php';
		$no = 1;
    $NIK = $_GET['NIK'];
		$data = mysqli_query($db,"select * from pk_eksternal where NIK='$NIK'");
		while($d = mysqli_fetch_array($data)){
			?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nama_perusahaan']; ?></td>
                      <td><?php echo $d['jabatan']; ?></td>
                      <td><?php echo $d['start_date']; ?></td>
                      <td><?php echo $d['end_date']; ?></td>
                      <td><img src="../../dist/img/<?php echo $d['surat_pk']; ?>" width="100" /></td>
    </tr>
                      <?php 
		}
		?>
    </table>
  </body>
  </div>
     </div>
     </div>
     </div>
  
   </div>
 </div>
   </div>
 </div>
 <br></br>
 <div class="card">
            <div class="card-body">
            <font size="5" color="green"><strong><center>PENGHARGAAN</center></strong></font>
            <table id="example1" class="table table-bordered table-striped table-success">
                  <thead>
                  <tr>
                    <th>No penghargaan</th>
                    <th>Nama penghargaan</th>
                    <th>Nama Pemberi</th>
                    <th>Institusi</th>
                    <th>Tahun Diterima</th>
                    <th>Penghargaan</th>
                  </tr>
                  </thead>
                  <?php 
		include '../../config/koneksi.php';
    $NIK = $_GET['NIK'];
		$data = mysqli_query($db,"select * from penghargaan where NIK='$NIK'");
		while($d = mysqli_fetch_array($data)){
			?>
                  <tbody>
                  <tr>
                    <td><?php echo $d['no_penghargaan']; ?></td>
                    <td><?php echo $d['nama_penghargaan']; ?></td>
                    <td><?php echo $d['nama_pemberi']; ?></td>
                    <td><?php echo $d['institusi']; ?></td>
                    <td><?php echo $d['tahun_diterima']; ?></td>
                    <td><img src="../../dist/img/<?php echo $d['penghargaan']; ?>" width="100" /></td>
    </tr>
                      <?php 
		}
		?>
      </table>
  </body>
  </div>
     </div>
     </div>
     </div>
  
   </div>
 </div>
   </div>
 </div>
 <br></br>

 <div class="fixed-footer">
      <strong><center>SIP TC is Powered  by <a href="pages/company/index.php">Training Centre</a></strong>.&nbsp Developed by <a href="https://adindaselfiani.wordpress.com/">Adselna </a></center>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </div>
  <script>
//dapatkan buttonnya
var mybutton = document.getElementById("myBtn");

// Saat pengguna mengscroll ke bawah 20px dari bagian atas dokumen, maka tunjukkan tombolnya
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// Saat pengguna mengklik tombol, scroll ke bagian atas dokumen
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>