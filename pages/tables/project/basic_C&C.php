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
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<style type='text/css'>
.table-responsive {
  min-height: .01%;
  overflow-x: auto
}

@media screen and (max-width:767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd
  }
  .table-responsive>.table {
    margin-bottom: 0
  }
  .table-responsive>.table>tbody>tr>td,
  .table-responsive>.table>tbody>tr>th,
  .table-responsive>.table>tfoot>tr>td,
  .table-responsive>.table>tfoot>tr>th,
  .table-responsive>.table>thead>tr>td,
  .table-responsive>.table>thead>tr>th {
    white-space: nowrap
  }
  .table-responsive>.table-bordered {
    border: 0
  }
  .table-responsive>.table-bordered>tbody>tr>td:first-child,
  .table-responsive>.table-bordered>tbody>tr>th:first-child,
  .table-responsive>.table-bordered>tfoot>tr>td:first-child,
  .table-responsive>.table-bordered>tfoot>tr>th:first-child,
  .table-responsive>.table-bordered>thead>tr>td:first-child,
  .table-responsive>.table-bordered>thead>tr>th:first-child {
    border-left: 0
  }
  .table-responsive>.table-bordered>tbody>tr>td:last-child,
  .table-responsive>.table-bordered>tbody>tr>th:last-child,
  .table-responsive>.table-bordered>tfoot>tr>td:last-child,
  .table-responsive>.table-bordered>tfoot>tr>th:last-child,
  .table-responsive>.table-bordered>thead>tr>td:last-child,
  .table-responsive>.table-bordered>thead>tr>th:last-child {
    border-right: 0
  }
  .table-responsive>.table-bordered>tbody>tr:last-child>td,
  .table-responsive>.table-bordered>tbody>tr:last-child>th,
  .table-responsive>.table-bordered>tfoot>tr:last-child>td,
  .table-responsive>.table-bordered>tfoot>tr:last-child>th {
    border-bottom: 0
  }
}
</style>
</b:if>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP Training Centre | Project </title>

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
          <img src="../../../dist/img/avatar6.jpg" class="user-image" alt="User Image" style="margin: 3px 0 0 0;">
          <span class="hidden-xs" align="center"><?php echo "".$_SESSION['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../../../dist/img/avatar6.jpg" class="img-circle" alt="User Image">
            <p>
            <?php echo "".$_SESSION['username']; ?> - Training Center Member
              <small>Member since August. 2022</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <span class="badge pull-left">
              <a href="../../examples/profile/profile.php" class="btn btn-primary btn-flat">Profile</a>
            </span>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <span class="badge pull-right">
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
          <img src="../../../dist/img/avatar6.jpg" class="img-circle elevation-2" alt="User Image">
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
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>
          Data Pegawai
          <i class="right fas fa-angle-left"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="datapegawai.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../examples/section.php" class="nav-link">
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
        <li class="nav-item">
          <a href="../examples/projects.php" class="nav-link active">
            <i class="nav-icon fas fa-th-list"></i>
            <p>Projects</p>
          </a>
        </li>
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
            <h1>Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th rowspan="4">No</th>
                    <th style="width: 300px; text-align:center" rowspan="4">Materi Training</th>
                    <th rowspan="4">Metode Training</th>
                    <th rowspan="4">Alat yang digunakan</th>
                    <th rowspan="4">No Text Book dan VTR</th>
                    <th rowspan="4">Trainee Name</th>
                    <th rowspan="4">Trainer</th>
                    <th rowspan="4">Tempat</th>
                    <th colspan="8"><center>Hari/Tanggal</center></th>
                    <th colspan="8"><center>Materi yang telah diajarkan</center></th>
                    <th rowspan="4">Trainer<input type="checkbox" id="allci" name="allci"/></th>
                  </tr>
                  <tr>
                  <th rowspan="3">Plan</th>
                  <th rowspan="3">Act</th>
                  <th rowspan="3">Plan</th>
                  <th rowspan="3">Act</th>
                  <th rowspan="3">Plan</th>
                  <th rowspan="3">Act</th>
                  <th rowspan="3">Plan</th>
                  <th rowspan="3">Act</th>
        </tr>
        <tr>
        <th colspan="8"><center>Trainee No</center></th>
        </tr>
        <tr>
        <th rowspan="2">1<input type="checkbox" id="allcb" name="allcb"/></th>
        <th rowspan="2">2<input type="checkbox" id="allca" name="allca"/></th>
        <th rowspan="2">3<input type="checkbox" id="allch" name="allch"/></th>
        <th rowspan="2">4<input type="checkbox" id="allcc" name="allcc"/></th>
        <th rowspan="2">5<input type="checkbox" id="allcd" name="allcd"/></th>
        <th rowspan="2">6<input type="checkbox" id="allce" name="allce"/></th>
        <th rowspan="2">7<input type="checkbox" id="allcf" name="allcf"/></th>
        <th rowspan="2">8<input type="checkbox" id="allcg" name="allcg"/></th>
        </tr>
                  </thead>
</body>
<tr>
<td rowspan="4" style="vertical-align: middle;">1</td>
<td>1. C&C GENERAL TRAINING</td>
<td rowspan="4" style="vertical-align: middle;"><center>Teori</center> </td>
<td></td>
<td rowspan="4" style="vertical-align: middle;"><center>1</center></td>
<td></td>
<td></td>
<td></td>
<td rowspan="4" style="vertical-align: middle;">1.0 H</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="checkbox" id="cb1" name="cb[]"/>ok</td>
<td><input type="checkbox" id="ca1" name="ca[]"/></td>
<td><input type="checkbox" id="ch1" name="ch[]"/></td>
<td><input type="checkbox" id="cc1" name="cc[]"/></td>
<td><input type="checkbox" id="cd1" name="cd[]"/></td>
<td><input type="checkbox" id="ce1" name="ce[]"/></td>
<td><input type="checkbox" id="cf1" name="cf[]"/></td>
<td><input type="checkbox" id="cg1" name="cg[]"/></td>
<td><input type="checkbox" id="ci1" name="ci[]"/></td>
</tr>

<tr>
<td>1.1 Pengertian C&C section</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="checkbox" id="cb1" name="cb[]"/>ok</td>
<td><input type="checkbox" id="ca1" name="ca[]"/></td>
<td><input type="checkbox" id="ch1" name="ch[]"/></td>
<td><input type="checkbox" id="cc1" name="cc[]"/></td>
<td><input type="checkbox" id="cd1" name="cd[]"/></td>
<td><input type="checkbox" id="ce1" name="ce[]"/></td>
<td><input type="checkbox" id="cf1" name="cf[]"/></td>
<td><input type="checkbox" id="cg1" name="cg[]"/></td>
<td><input type="checkbox" id="ci1" name="ci[]"/></td>
</tr>

<tr>
<td>1.2 Bagian-bagian proses produksi C & C section</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="checkbox" id="cb1" name="cb[]"/>ok</td>
<td><input type="checkbox" id="ca1" name="ca[]"/></td>
<td><input type="checkbox" id="ch1" name="ch[]"/></td>
<td><input type="checkbox" id="cc1" name="cc[]"/></td>
<td><input type="checkbox" id="cd1" name="cd[]"/></td>
<td><input type="checkbox" id="ce1" name="ce[]"/></td>
<td><input type="checkbox" id="cf1" name="cf[]"/></td>
<td><input type="checkbox" id="cg1" name="cg[]"/></td>
<td><input type="checkbox" id="ci1" name="ci[]"/></td>
</tr>

<tr>
<td>1.3 Alur proses  C&C section</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="checkbox" id="cb1" name="cb[]"/>ok</td>
<td><input type="checkbox" id="ca1" name="ca[]"/></td>
<td><input type="checkbox" id="ch1" name="ch[]"/></td>
<td><input type="checkbox" id="cc1" name="cc[]"/></td>
<td><input type="checkbox" id="cd1" name="cd[]"/></td>
<td><input type="checkbox" id="ce1" name="ce[]"/></td>
<td><input type="checkbox" id="cf1" name="cf[]"/></td>
<td><input type="checkbox" id="cg1" name="cg[]"/></td>
<td><input type="checkbox" id="ci1" name="ci[]"/></td>
</tr>
                  </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
<!-- bs-custom-file-input -->
<script src="../../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
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
  <b:if cond='data:blog.pageType == &quot;item&quot;'>
<script>
//<![CDATA[
$(document).ready(function() {
  $("table").wrap("<div class='table-responsive'></div>");
  $("table").addClass("table");
});
//]]>
</script>
</b:if>
<script>
 	
		/*
		* Click on select all checkbox
		*/
		$('#allcb').click(function(e) {
			$('[name="cb[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="cb[]"]').click(function(e) {
			if ($('[name="cb[]"]:checked').length == $('[name="cb[]"]').length || !this.checked)
				$('#allcb').prop('checked', this.checked);
		});
	/*
		* Click on select all checkbox
		*/
		$('#allca').click(function(e) {
			$('[name="ca[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="ca[]"]').click(function(e) {
			if ($('[name="ca[]"]:checked').length == $('[name="ca[]"]').length || !this.checked)
				$('#allca').prop('checked', this.checked);
		});

    
    	/*
		* Click on select all checkbox
		*/
		$('#allcc').click(function(e) {
			$('[name="cc[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="cc[]"]').click(function(e) {
			if ($('[name="cc[]"]:checked').length == $('[name="cc[]"]').length || !this.checked)
				$('#allcc').prop('checked', this.checked);
		});


    	/*
		* Click on select all checkbox
		*/
		$('#allcd').click(function(e) {
			$('[name="cd[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="cd[]"]').click(function(e) {
			if ($('[name="cd[]"]:checked').length == $('[name="cd[]"]').length || !this.checked)
				$('#allcd').prop('checked', this.checked);
		});



	/*
		* Click on select all checkbox
		*/
		$('#allce').click(function(e) {
			$('[name="ce[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="ce[]"]').click(function(e) {
			if ($('[name="ce[]"]:checked').length == $('[name="ce[]"]').length || !this.checked)
				$('#allce').prop('checked', this.checked);
		});


	/*
		* Click on select all checkbox
		*/
		$('#allcf').click(function(e) {
			$('[name="cf[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="cf[]"]').click(function(e) {
			if ($('[name="cf[]"]:checked').length == $('[name="cf[]"]').length || !this.checked)
				$('#allcf').prop('checked', this.checked);
		});

    	/*
		* Click on select all checkbox
		*/
		$('#allcg').click(function(e) {
			$('[name="cg[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="cg[]"]').click(function(e) {
			if ($('[name="cg[]"]:checked').length == $('[name="cg[]"]').length || !this.checked)
				$('#allcg').prop('checked', this.checked);
		});
    	/*
		* Click on select all checkbox
		*/
		$('#allch').click(function(e) {
			$('[name="ch[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="ch[]"]').click(function(e) {
			if ($('[name="ch[]"]:checked').length == $('[name="ch[]"]').length || !this.checked)
				$('#allch').prop('checked', this.checked);
		});

     	/*
		* Click on select all checkbox
		*/
		$('#allci').click(function(e) {
			$('[name="ci[]"]').prop('checked', this.checked);
		});

		/*
		* Click on another checkbox can affect the select all checkbox
		*/
		$('[name="ci[]"]').click(function(e) {
			if ($('[name="ci[]"]:checked').length == $('[name="ci[]"]').length || !this.checked)
				$('#allci').prop('checked', this.checked);
		});



</script>
    </body>
    </html>