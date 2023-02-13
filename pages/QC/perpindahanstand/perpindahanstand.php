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
            <a href="../../assembly/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-autoprefixer"></i>
              <p>
                Assembly Access
                <span class="badge badge-primary right">
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
            <a href="../../QC/skillmap.php" class="nav-link active">
              <i class="nav-icon fab fa-quora"></i>
              <p>
              QC Access
              <span class="badge badge-primary right" style="background-color: white; color: black">
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
              <li class="breadcrumb-item"><a href="skillmap.php">QC Access</a></li>
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
	$NIK = $_GET['NIK'];
	$data = mysqli_query($db,"select * from pegawai where NIK='$NIK'");
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
  <a href="../perindahanstand/perpindahanstand.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-info btn-block margin-bottom">Perpindahan Stand/Line</a>
  <a href="../skillup/skillup.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Up Plan</a> 
  <a href="../skillmap/assemblyskill.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Map</a> 
  <a href="../lembarevaluasi/evaluasi.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Lembar Evaluasi</a> 
</div>

  <div class="col-md-9">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Training Record Saat Perpindahan Stand/Line</h3>
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
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".modalBesar<?php echo $d['NIK']; ?>"><i class="fas fa-folder">Tambah Data</i></button><br> 
 <div class="modal fade modalBesar<?php echo $d['NIK']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg">
  
     <div class="modal-content">
       <div class="modal-header">
         <h5>Tambah data stand/line a/n <?php echo $d['nama']; ?>,<?php echo $d['NIK']; ?> </h5>
       </div>
       <div class="modal-body">
       <div class="card card-success">
       <div class="card-header">
          <h3 class="card-title"><center>Stand/Line</center></h3>
        </div>
       <div class="card-body">
       <div class="row">
                  <div class="col-md-6">
                  <form method="post" action="tambah_stand.php">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <input type="hidden" name="image" value="<?php echo $d['image']; ?>">
                      <input type="number" class="form-control" id="NIK" name="NIK" placeholder="Masukkan NIK Pegawai" readonly value="<?php echo $d['NIK']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" id="NIK" name="nama" placeholder="Masukkan Nama Pegawai" readonly value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Join Date</label>
                      <input type="date" class="form-control" id="NIK" name="join_date" placeholder="Masukkan Join Date Pegawai" readonly value="<?php echo $d['join_date']; ?>">
                    </div>
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Stand</label>
                      <input type="text" class="form-control" id="stand" name="stand" placeholder="Masukkan nama Stand">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Line</label>
                      <input type="text" class="form-control" id="NIK" name="line" placeholder="Masukkan Materi yang sudah dipelajari">
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Submit</button>
                  </div>        
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>        
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>
          </div>
          </div>
    </br>
    <?php 
	}
	?>
              <table id="" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Stand</th>
                    <th>Line</th>
                    <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php 
                  include '../../../config/koneksi.php';
				$batas = 50;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($db,"select * from line where NIK='$NIK'");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_pegawai = mysqli_query($db,"select * from line where NIK='$NIK' limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_pegawai)){
					?>
    <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['stand']; ?></td>
                    <td><?php echo $d['line']; ?></td>
                    <td class="project-actions text-right">
                      <!--
  <?php
  include '../../../config/koneksi.php';
  $query_validasi = "SELECT * FROM recordstand WHERE id_line = ".$d['id'];
  $result_validasi = mysqli_query($db, $query_validasi);
  if(mysqli_num_rows($result_validasi) > 0) {
    echo '<a class="btn btn-primary btn-sm" href="standrecord.php?id='.$d['id'].'">';
  } else {
    echo '<a class="btn btn-primary btn-sm" href="recordstand.php?id='.$d['id'].'">';
  }
  ?>-->
    <!--<i class="fas fa-eye"></i> View-->
  </a>
  <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal-danger<?php echo $d['id']; ?>"><i class="fas fa-trash"></i>
                </button>
                <div class="modal fade" id="modal-danger<?php echo $d['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin ingin dihapus?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a class="btn btn-outline-light btn-sm" href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
</td>

                    </tr>
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
  $(function () {
//-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
          '100%',
          '50%',
          '75%',
          '25%',
          '0%',
      ],
      datasets: [
        {
          data: [100,100,100,100,100,100],
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
})
</script>
</body>
</html>
