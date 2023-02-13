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
  <style>
    .btn-left {
    float: left;
}
.btn-right {
    float: right;
}
    #typing {
    width: 0ch;
    color: rgb(255, 187, 0);
    float: left;
    font-family:Times New Roman;
    font-weight:bold;
    text-align:center;
    font-size: 25px;
    overflow: hidden;
    white-space: nowrap;
    animation: typing 5s steps(80) 1s infinite alternate;
    }
    @keyframes typing {
    from {
    width: 0ch;
    }
    to {
    width: 25ch;
    }
    }
    @keyframes crow {
    from {
    opacity: 0;
    }
    to {
    opacity: 1;
    }
    }
  </style>
<link rel="icon" 
type="image/png" 
href="tc2.png" /> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP Training Center | Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="Logo PT. Sumitomo.png" alt="Logo Sumitomo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link active">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pages/examples/contact/contact-us.php" class="nav-link">Contact</a>
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
          <img src="dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="user-image" alt="User Image" style="margin: 3px 0 0 0;">
          <span class="hidden-xs" align="center"><?php echo "".$_SESSION['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle" alt="User Image">

            <p>
              <?php echo "".$_SESSION['username']; ?> - Training Center Member
              <small>Member since August. 2022</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <span class="btn-leftt">
              <a href="pages/examples/profile/profile.php" class="btn btn-primary btn-flat">Profile</a>
            </span>
            <span class="btn-right">
              <a href="logout.php" class="btn btn-danger btn-flat">Sign out</a>
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
    <a href="admin.php" class="brand-link bg-primary">
      <img src="tc2.png" alt="Sumitomo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Training Center </br> Sistem Informasi Pegawai</span>
    </a></br>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
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
                <a href="admin.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              <li class="nav-item">
                <a href="pages/tables/data.php" class="nav-link">
                  <i class="nav-icon fas fa-border-all"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="excel/upload.php" class="nav-link">
                  <i class="nav-icon fas fa-cloud-upload-alt"></i>
                  <p>Upload Data</p>
                </a>
              </li>
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="pages/tables/pegawai/datapegawai.php" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Data Pegawai
                <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/pegawai/datapegawai.php" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>Pegawai</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/section.php" class="nav-link">
                    <i class="nav-icon fab fa-buromobelexperte"></i>
                    <p>Section</p>
                  </a>
                </li>
                </ul>
            </a>
          </li>
           <li class="nav-item">
            <a href="pages/assembly/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-autoprefixer"></i>
              <p>
                Assembly Access
                <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
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
            <a href="pages/C&C/skillmap.php" class="nav-link">
              <i class="nav-icon fas fa-closed-captioning"></i>
              <p>
               C&C Access
               <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
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
            <a href="pages/QC/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-quora"></i>
              <p>
              QC Access
              <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
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
            <a href="pages/calendar.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
              <!--<li class="nav-item">
                <a href="pages/examples/project/projects.php" class="nav-link">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>Projects</p>
                </a>
              </li> -->
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <marquee bgcolor="blue" width="1080"><h4 style="color:#FFFFFF" text-align="center"><?php echo "Selamat Datang, Admin ".$_SESSION['username']; ?> 👋&nbsp &nbsp &nbsp  SIP TC adalah sistem informasi pegawai yang digunakan untuk pencatatan data pegawai, terkhusus untuk pencatatan renewal.</h4></marquee><br>
    <br>
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Data Pegawai</span>
                <span class="info-box-number">



                <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
 $data_pegawai = mysqli_query($db,"SELECT * FROM pegawai");
 // menghitung data pegawai
 $jumlah_pegawai = mysqli_num_rows($data_pegawai);
 ?>
                <?php echo $jumlah_pegawai; ?>



                </span>
                <a href="pages/tables/pegawai/datapegawai.php" class="small-box-footer">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-redo-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Renewal</span>
                <span class="info-box-number">
                <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
 $data_renewal = mysqli_query($db,"SELECT * FROM renewal");
 // menghitung data pegawai
 $jumlah_renewal = mysqli_num_rows($data_renewal);
 ?>
                <?php echo $jumlah_renewal; ?>
                </span>
                <a href="pages/tables/renewal/renewal.php" class="small-box-footer">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-columns"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Licensi</span>
                <span class="info-box-number">
                <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
 $data_licensi = mysqli_query($db,"SELECT * FROM licensi");
 // menghitung data pegawai
 $jumlah_licensi = mysqli_num_rows($data_licensi);
 ?>
                <?php echo $jumlah_licensi; ?>
                </span>
                <a href="pages/tables/licensi/datalicensi.php" class="small-box-footer">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Reminder</span>
                <span class="info-box-number">#</span>
                <a href="pages/tables/reminder.php" class="small-box-footer">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <!-- DONUT CHART -->
           <div class="col-md-6">
           <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Jumlah Pegawai</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
 $data_pria = mysqli_query($db,"SELECT * FROM pegawai WHERE jenis_kelamin='Laki-laki'");
 // menghitung data pegawai
 $jumlah_pria = mysqli_num_rows($data_pria);
 $data_perempuan = mysqli_query($db,"SELECT * FROM pegawai WHERE jenis_kelamin='Perempuan'");
 // menghitung data pegawai
 $jumlah_perempuan = mysqli_num_rows($data_perempuan);
 ?>
            
              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            </div>
            <!-- /.card-body -->
            </div>
          <!-- /.col -->
           <!-- /.col (LEFT) -->
           <div class="col-md-6">
            <!-- PIE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Jenis Pegawai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
 $data_operator = mysqli_query($db,"SELECT * FROM pegawai WHERE pekerjaan='Operator'");
 // menghitung data pegawai
 $jumlah_operator = mysqli_num_rows($data_operator);
 $data_magang = mysqli_query($db,"SELECT * FROM pegawai WHERE pekerjaan='Magang'");
 // menghitung data pegawai
 $jumlah_magang = mysqli_num_rows($data_magang);
 $data_pkl = mysqli_query($db,"SELECT * FROM pegawai WHERE pekerjaan='PKL'");
 // menghitung data pegawai
 $jumlah_pkl = mysqli_num_rows($data_pkl);
 $data_sublead = mysqli_query($db,"SELECT * FROM pegawai WHERE pekerjaan='SUb Leader'");
 // menghitung data pegawai
 $jumlah_sublead = mysqli_num_rows($data_sublead);
 $data_leader = mysqli_query($db,"SELECT * FROM pegawai WHERE pekerjaan='Leader'");
 // menghitung data pegawai
 $jumlah_leader = mysqli_num_rows($data_leader);
 ?>
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
            <!-- DONUT CHART -->
            <div class="col-md-6">
           <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Training Center</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
 $data_assembly = mysqli_query($db,"SELECT * FROM pegawai WHERE kode_section='450'");
 // menghitung data pegawai
 $jumlah_assembly = mysqli_num_rows($data_assembly);
 $data_cc = mysqli_query($db,"SELECT * FROM pegawai WHERE kode_section='410'");
 // menghitung data pegawai
 $jumlah_cc = mysqli_num_rows($data_cc);
 $data_qc = mysqli_query($db,"SELECT * FROM pegawai WHERE kode_section='420'");
 // menghitung data pegawai
 $jumlah_qc = mysqli_num_rows($data_qc);
 ?>
              <canvas id="DonutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
  </div>
          </div>
         <!-- /.col (LEFT) -->
         <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Section</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
             <!-- /.col -->
              <div class="card-body">
              <?php
 // menghubungkan dengan koneksi database
 include 'config/koneksi.php';
   // Jalankan query
   $result = mysqli_query($db, "SELECT MONTHNAME(exp_date) as bulan, YEAR(exp_date) as tahun, COUNT(*) as jumlah FROM renewal WHERE kode_section = '450' GROUP BY MONTH(exp_date)");

   // Ambil hasil query dan masukkan ke dalam array
   $labels = [];
   $data = [];
   while ($row = mysqli_fetch_assoc($result)) {
     $labels[] = $row['bulan'] . " " . $row['tahun'];
     $data[] = $row['jumlah'];
   }
   $result2 = mysqli_query($db, "SELECT MONTHNAME(exp_date) as bulan, YEAR(exp_date) as tahun, COUNT(*) as jumlah FROM renewal WHERE kode_section = '410' GROUP BY MONTH(exp_date)");

// Ambil hasil query dan masukkan ke dalam array
$labels2 = [];
$data2 = [];
while ($row = mysqli_fetch_assoc($result2)) {
$labels2[] = $row['bulan'] . " " . $row['tahun'];
$data2[] = $row['jumlah'];
}

$result3 = mysqli_query($db, "SELECT MONTHNAME(exp_date) as bulan, YEAR(exp_date) as tahun, COUNT(*) as jumlah FROM renewal WHERE kode_section = '420' GROUP BY MONTH(exp_date)");

// Ambil hasil query dan masukkan ke dalam array
$labels3 = [];
$data3 = [];
while ($row = mysqli_fetch_assoc($result3)) {
$labels3[] = $row['bulan'] . " " . $row['tahun'];
$data3[] = $row['jumlah'];
}
 ?>
                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./card-body -->
            </div>
            <!-- /.progress-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- ./card-body -->
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

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

<!-- REQUIRED SCRIPTS -->
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

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script>
  $(function () {
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'laki-laki',
          'perempuan',
      ],
      datasets: [
        {
          data: [<?php echo $jumlah_pria; ?>,<?php echo $jumlah_perempuan; ?>
          ],
          backgroundColor : ['#3c8dbc','#f56954'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Operator',
          'PKL',
          'Magang',
          'Sub Leader',
          'Leader',
      ],
      datasets: [
        {
          data: [<?php echo $jumlah_operator; ?>,<?php echo $jumlah_pkl; ?>,<?php echo $jumlah_magang; ?>,<?php echo $jumlah_sublead; ?>,<?php echo $jumlah_leader; ?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
        }
      ]
    }
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var DonutChartCanvas = $('#DonutChart').get(0).getContext('2d')
    var DonutData        = {
      labels: [
          'C&C',
          'QC',
          'Assembly',
      ],
      datasets: [
        {
          data: [<?php echo $jumlah_cc; ?>,<?php echo $jumlah_qc; ?>,<?php echo $jumlah_assembly; ?>],
          backgroundColor : ['#f56954', '#00a65a', '#3c8dbc'],
        }
      ]
    }
    var DonutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(DonutChartCanvas, {
      type: 'doughnut',
      data: DonutData,
      options: DonutOptions
    })

    
  })
</script>
<script>
    // Inisialisasi grafik
    var ctx = document.getElementById('lineChart').getContext('2d');
    var chart = new Chart(ctx, {
      // Tentukan jenis grafiknya
      type: 'line',

      // Tambahkan data ke grafik
      data: {
        labels: <?php echo json_encode(array_merge($labels, $labels2)); ?>,
        datasets: [{
          label: 'Assembly',
          backgroundColor: 'rgba(0, 0, 0, 0)',
          borderColor: 'rgb(0, 255, 0)',
          data: <?php echo json_encode($data); ?>
        },{
          label: 'C&C',
          backgroundColor: 'rgba(0, 0, 0, 0)',
          borderColor: 'rgb(54, 162, 235)',
          data: <?php echo json_encode($data2); ?>
},{
          label: 'QC',
          backgroundColor: 'rgba(0, 0, 0, 0)',
          borderColor: 'rgb(225, 0, 0)',
          data: <?php echo json_encode($data3); ?>
}]
      }
    });
  </script>
<script>
  var i=0,text;
  text = "Selamat Datang Admin"

  function ketik() {
    if(i<text.length){
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(ketik,80);
    }
  }
  ketik();
</script>
</body>
</html>