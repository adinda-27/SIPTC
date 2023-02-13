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
href="../../../dist/img/tc2.png" /> 
<style>
  .btn-left {
    float: left;
}
.btn-right {
    float: right;
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP Training Centre | Pegawai</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../examples/contact/contact-us.php" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <li class="dropdown user user-menu" align="center">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="user-image" alt="User Image" style="margin: 3px 0 0 0;">
          <span class="hidden-xs" align="center"><?php echo "".$_SESSION['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle" alt="User Image">
            <p>
            <?php echo "".$_SESSION['username']; ?> - Training Center Member
              <small>Member since August. 2022</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <span class="btn-left">
              <a href="../examples/profile.php" class="btn btn-primary btn-flat">Profile</a>
            </span>
            <span class="btn-right">
              <a href="../../../logout.php" class="btn btn-danger btn-flat">Sign out</a>
            </span>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../../admin.php" class="brand-link bg-primary">
      <img src="../../../dist/img/tc2.png" alt="Sumitomo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Training Center </br> Sistem Informasi Pegawai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "".$_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

 <!-- Sidebar Menu -->
 <nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="../../../admin.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        <li class="nav-item">
          <a href="../../tables/data.php" class="nav-link">
            <i class="nav-icon fas fa-border-all"></i>
            <p>DataTables</p>
          </a>
        </li>
        <li class="nav-item">
                <a href="../../../excel/upload.php" class="nav-link">
                  <i class="nav-icon fas fa-cloud-upload-alt"></i>
                  <p>Upload Data</p>
                </a>
              </li>
    <li class="nav-header">Menu</li>
    <li class="nav-item">
      <a href="../../tables/pegawai/datapegawai.php" class="nav-link">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>
          Data Pegawai
          <i class="right fas fa-angle-left"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../../tables/pegawai/datapegawai.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../examples/section.php" class="nav-link">
              <i class="nav-icon fab fa-buromobelexperte"></i>
              <p>Section</p>
            </a>
          </li>
          </ul>
      </a>
    </li>
    <li class="nav-item">
            <a href="../../assembly/skillmap.php" class="nav-link active">
              <i class="nav-icon fab fa-autoprefixer"></i>
              <p>
                Assembly Access
                <span class="badge badge-primary right" style="background-color: white; color: black">
                <?php
 // menghubungkan dengan koneksi database
 include '../../../config/koneksi.php';
 $data_assy = mysqli_query($db,"SELECT * FROM pegawai where kode_section='450'");
 // menghitung data pegawai
 $jumlah_assy = mysqli_num_rows($data_assy);
 ?>
                <?php echo $jumlah_assy; ?>
                </span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../C&C/skillmap.php" class="nav-link">
              <i class="nav-icon fas fa-closed-captioning"></i>
              <p>
               C&C Access
               <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../../config/koneksi.php';
 $data_cc = mysqli_query($db,"SELECT * FROM pegawai where kode_section='410'");
 // menghitung data pegawai
 $jumlah_cc = mysqli_num_rows($data_cc);
 ?>
                <?php echo $jumlah_cc; ?>
                </span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../QC/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-quora"></i>
              <p>
              QC Access
              <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../../config/koneksi.php';
 $data_qc = mysqli_query($db,"SELECT * FROM pegawai where kode_section='420'");
 // menghitung data pegawai
 $jumlah_qc = mysqli_num_rows($data_qc);
 ?>
                <?php echo $jumlah_qc; ?>
                </span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../calendar.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
<!--<li class="nav-item">
          <a href="../../examples/project/projects.php" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>Projects</p>
          </a>
        </li>-->
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1><font color="blue"><strong>QC Skill Map</strong></font></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../../admin.php">Home</a></li>
              <li class="breadcrumb-item"><a href="datapegawai.php">QC Access</a></li>
              <li class="breadcrumb-item active">Perpindahan Stand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-3">
              <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title">QC Member</h3>
</div>
<?php
	include '../../../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($db,"select * from line where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
    <div class="card-body">
     <div class="media">
        <div class="media-body">
        <body>
        <center><img src="../../../dist/img/<?php echo isset($d['image']) && !empty($d['image']) ? $d['image'] : '7309681.jpg'; ?>" class="mr-3" alt="..." style="width: 100px"></center>
            <table border="0" cellspacing="0" cellpadding="1" align="left" width="250">
                <tr align="center" bgcolor="#1fe5d5">
                   
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $d['nama']; ?></td>
                    
                </tr>
                <tr>
                  <td>NIK</td>
                  <td><?php echo $d['NIK']; ?></td>
              </tr>
              <tr>
                  <td>Join Date</td>
                  <td><?php echo $d['join_date']; ?></td>
              </tr>
              </table>
        </body>
        </div>
  </div>
  </div>
  </div>
  <a href="../kartubelajar/kartubelajar.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Training Record List</a> 
  <a href="../perpindahanstand/perpindahanstand.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-info btn-block margin-bottom">Perpindahan Stand/Line</a>
  <a href="../skillup/skillup.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Up Plan</a> 
  <a href="../skillmap/assemblyskill.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Map</a> 
  <a href="../lembarevaluasi/evaluasi.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Lembar Evaluasi</a> 
</div>

  <div class="col-md-9">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Training Record Saat Perpindahan Stand/Line</h3>
              </div>
              <div class="card-body">
    <?php 
	}
	?>


              <table id="" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Materi Training</th>
                    <th colspan="2">Penilaian</th>
    </tr>
    <tr>
        <th rowspan="2"><input type="checkbox" id="allcb" name="allcb"/> &nbsp; All</th>
</tr>
    </thead>
    <tbody>
    <?php 
                  include '../../../config/koneksi.php';
                  $id = $_GET['id'];
                  $batas = 50;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($db,"select * from line where id='$id'");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_pegawai = mysqli_query($db,"select * from line where id='$id' limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_pegawai)){
					?>
    <tr>
                    <td>1</td>
                    <td>Pengetahuan Wiring Harness</td>
                    <form method="post" action="record.php">
                    <input type="hidden" name="id_line" value="<?php echo $d['id']; ?>">
                    <input type="hidden" name="NIK" value="<?php echo $d['NIK']; ?>"/>
                    <input type="hidden" name="materi" value="Pengetahuan Wiring Harness"/>
                    <td><input type="checkbox" id="cb1" name="cb" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-jenis-jenis Model</td>
                    <input type="hidden" name="materi1" value="jenis-jenis model"/>
                    <td><input type="checkbox" id="cb1" name="cb1" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>Pengetahuan tentang Detail Gambar</td>
                    <input type="hidden" name="materi2" value="Pengetahuan tentang Detail Gambar"/>
                    <td><input type="checkbox" id="cb1" name="cb2" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-jenis simbol khusus</td>
                    <input type="hidden" name="materi3" value="jenis simbol khusus"/>
                    <td><input type="checkbox" id="cb1" name="cb3" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>Pengetahuan tentang Quality Poin & Requirements</td>
                    <input type="hidden" name="materi4" value="Pengetahuan tentang Quality Poin & Requirements"/>
                    <td><input type="checkbox" id="cb1" name="cb4" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Tentang persyaratan kwalitas khusus</td>
                    <input type="hidden" name="materi5" value="tentang persyaratan kwalitas khusus"/>
                    <td><input type="checkbox" id="cb1" name="cb5" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>Pengetahuan tentang critical poin</td>
                    <input type="hidden" name="materi6" value="Pengetahuan tentang critical poin"/>
                    <td><input type="checkbox" id="cb1" name="cb6" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Tentang tempat-tempat yang rawan, abnormal dan kritis</td>
                    <input type="hidden" name="materi7" value="tentang tempat-tempat yang rawan, abnormal dan kritis"/>
                    <td><input type="checkbox" id="cb1" name="cb7" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Mempelajari Standard Kerja</td>
                    <input type="hidden" name="materi8" value="Mempelajari standard kerja"/>
                    <td><input type="checkbox" id="cb1" name="cb8" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Standar kerja proses</td>
                    <input type="hidden" name="materi9" value="standar kerja proses"/>
                    <td><input type="checkbox" id="cb1" name="cb9" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Metode kerja pada proses</td>
                    <input type="hidden" name="materi10" value="metode kerja pada proses"/>
                    <td><input type="checkbox" id="cb1" name="cb10" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Penggunaan tool dan equipment</td>
                    <input type="hidden" name="materi11" value="penggunaan tool dan equipment"/>
                    <td><input type="checkbox" id="cb1" name="cb11" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Belajar dan mencoba</td>
                    <input type="hidden" name="materi12" value="Belajar dan mencoba"/>
                    <td><input type="checkbox" id="cb1" name="cb12" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Mencoba melakukan proses</td>
                    <input type="hidden" name="materi13" value="mencoba melakukan proses"/>
                    <td><input type="checkbox" id="cb1" name="cb13" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>-Belajar contoh abnormality yang terjadi pada proses kerja</td>
                    <input type="hidden" name="materi14" value="belajar contoh abnormality yang terjadi pada proses kerja"/>
                    <td><input type="checkbox" id="cb1" name="cb14" value="OK"/> &nbsp; ok</td>
                  </td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Pendataan TACT-TIME</td>
                    <td></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center>Tanggal</center></td>
                    <td><input type="date" name="tanggal"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td> 
                    <td><center>Model</center></td>
                    <td><input type="number" name="model"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center>Speed Conveyor</center></td>
                    <td><input type="number" name="conveyor"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center>Speed Operator  1</center></td>
                    <td><input type="number" name="speed1"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2</center></td>
                    <td><input type="number" name="speed2"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3</center></td>
                    <td><input type="number" name="speed3"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;4</center></td>
                    <td><input type="number" name="speed4"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><center>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5</center></td>
                    <td><input type="number" name="speed5"></td>
                  </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary float-right">Submit</button></td>
                  </td>
                    </tr>
                    </form>
                  </div>
</div>
                  </tbody>

                  <?php 
		}
		?>
      


        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      </section>

</div>
  <!-- /.content-wrapper -->
<!-- Main Footer -->
</div>
<!-- ./wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- FLOT CHARTS -->
<script src="/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
 	
		/*
		* Click on select all checkbox
		*/
		$('#allcb').click(function(e) {
			$('[id="cb1"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[id="cb1"]').click(function(e) {
			if ($('[id="cb1"]:checked').length == $('[id="cb1"]').length || !this.checked)
				$('#allcb').prop('checked', this.checked);
		});
        </script>
</body>
</html>
