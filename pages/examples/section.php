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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .btn-left {
    float: left;
}
.btn-right {
    float: right;
}
  </style>
  <title>SIP Training Center | Section</title>

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
        <a href="../../admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../examples/contact-us.php" class="nav-link">Contact</a>
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
          <img src="../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="user-image" alt="User Image" style="margin: 3px 0 0 0;">
          <span class="hidden-xs" align="center"><?php echo "".$_SESSION['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle" alt="User Image">
            <p>
            <?php echo "".$_SESSION['username']; ?> - Training Center Member
              <small>Member since August. 2022</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <span class="btn-left">
              <a href="../examples/profile/profile.php" class="btn btn-primary btn-flat">Profile</a>
            </span>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <span class="btn-right">
              <a href="../../logout.php" class="btn btn-danger btn-flat">Sign out</a>
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
    <a href="../../index3.php" class="brand-link bg-primary">
      <img src="../../dist/img/tc2.png" alt="Sumitomo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Training Center </br> Sistem Informasi Pegawai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
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
          <a href="../../admin.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        <li class="nav-item">
          <a href="../tables/data.php" class="nav-link">
            <i class="nav-icon fas fa-border-all"></i>
            <p>DataTables</p>
          </a>
        </li>
        <li class="nav-item">
                <a href="../../excel/upload.php" class="nav-link">
                  <i class="nav-icon fas fa-cloud-upload-alt"></i>
                  <p>Upload Data</p>
                </a>
              </li>
    <li class="nav-header">Menu</li>
    <li class="nav-item">
      <a href="pages/datapegawai.php" class="nav-link active">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>
          Data Pegawai
          <i class="right fas fa-angle-left"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../tables/pegawai/datapegawai.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="section.php" class="nav-link active">
              <i class="nav-icon fab fa-buromobelexperte"></i>
              <p>Section</p>
            </a>
          </li>
          </ul>
      </a>
    </li>
    <li class="nav-item">
            <a href="../assembly/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-autoprefixer"></i>
              <p>
                Assembly Access
                <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../config/koneksi.php';
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
            <a href="../C&C/skillmap.php" class="nav-link">
              <i class="nav-icon fas fa-closed-captioning"></i>
              <p>
               C&C Access
               <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../config/koneksi.php';
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
            <a href="../QC/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-quora"></i>
              <p>
              QC Access
              <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../config/koneksi.php';
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
            <a href="../calendar.php" class="nav-link">
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
            <h1>Section</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
    <section class="content">
    <div class="btn-group">
      <a href="../tables/pegawai/datapegawai.php" class="btn btn-info">Data Pegawai</a> &emsp;
      <a href="../tables/renewal/renewal.php" class="btn btn-danger">Renewal</a> &emsp;
      <a href="../tables/licensi/datalicensi.php" class="btn btn-warning">Licensi</a> &emsp;
      <a href="../tables/penghargaan/datapenghargaan.php" class="btn btn-success">Penghargaan</a>&emsp;
      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pengalaman Kerja
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="../tables/pengalamaninternal/pk_internal.php" class="nav-link">&emsp; Internal</a></li>
    <li><a href="../tables/pengalamaneksternal/datapengalamankerja.php" class="nav-link">&emsp; Eksternal</a></li>
  </ul>
</div>
</div>
      <br></br>
      <div class="row">
        <div class="col-sm-12">
          <div class="card-deck">
            <div class="card">
              <img src="../../dist/img/stm.JPG" class="card-img-top" alt="gambar">
              <div class="card-body">
                <h5 class="card-title"><strong>Assembly</strong></h5>
                <p class="card-text">Assembly is one of the sections at PT.Sumitomo Wiring Systems Batam Indonesia with the training located in the Training Centre section. In Assembly there are several sub-sections including Sub Assy, ACB, Taping, Mounting.</p>
                <a href="../tables/datasection.php?kode_section=450" class="btn btn-info">Data Pegawai</a>
                <a href="../tables/renewal/renewal_section.php?kode_section=450" class="btn btn-danger">Renewal</a>
                <a href="../tables/licensi/datalicensi_section.php?kode_section=450" class="btn btn-warning">Licensi</a>
              </div>
            </div>
            <div class="card">
              <img src="../../dist/img/stm.JPG" class="card-img-top" alt="gambar">
              <div class="card-body">
                <h5 class="card-title"><strong>C&C</strong></h5>
                <p class="card-text">C&C is one of the sections in PT.Sumitomo Wiring Systems Batam Indonesia where the training is located in the Training Centre section. In C&C, there are several sub-sections including Auto C&C and PostProcess.</p>
                <a href="../tables/datasection.php?kode_section=410" class="btn btn-info">Data Pegawai</a>
                <a href="../tables/renewal/renewal_section.php?kode_section=410" class="btn btn-danger">Renewal</a>
                <a href="../tables/licensi/datalicensi_section.php?kode_section=410" class="btn btn-warning">Licensi</a>
              </div>
            </div>
            <div class="card">
              <img src="../../dist/img/stm.JPG" class="card-img-top" alt="gambar">
              <div class="card-body">
                <h5 class="card-title"><strong>QC</strong></h5>
                <p class="card-text">QC is one of the sections at PT.Sumitomo Wiring Systems Batam Indonesia where its training is located at the Training Centre. In the QC, there are several sub-sections including QC Assy and QC C&C<br></br></p>
                <a href="../tables/datasection.php?kode_section=420" class="btn btn-info">Data Pegawai</a>
                <a href="../tables/renewal/renewal_section.php?kode_section=420" class="btn btn-danger">Renewal</a>
                <a href="../tables/licensi/datalicensi_section.php?kode_section=420" class="btn btn-warning">Licensi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
</section>
<br></br>
  </section>
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
<footer class="main-footer">
  <strong><center>Copyright &copy; 2014-2021 AdminLTE.io</a></strong>
    All rights reserved.
  <br>
      <strong><center>SIP TC is Powered  by <a href="pages/company/index.php">Training Centre</a></strong>.&nbsp Developed by <a href="https://adindaselfiani.wordpress.com/">Adselna </a></center>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
  </footer>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
</body>
</html>
