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
href="../dist/img/tc2.png" /> 
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
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
        <a href="../admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../examples/contact/contact-us.php" class="nav-link">Contact</a>
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
          <img src="../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="user-image" alt="User Image" style="margin: 3px 0 0 0;">
          <span class="hidden-xs" align="center"><?php echo "".$_SESSION['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle" alt="User Image">
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
            <span class="btn-right">
              <a href="../logout.php" class="btn btn-danger btn-flat">Sign out</a>
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
    <a href="../admin.php" class="brand-link bg-primary">
      <img src="../dist/img/tc2.png" alt="Sumitomo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Training Center </br> Sistem Informasi Pegawai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
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
          <a href="../admin.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        <li class="nav-item">
          <a href="../pages/tables/data.php" class="nav-link">
            <i class="nav-icon fas fa-border-all"></i>
            <p>DataTables</p>
          </a>
        </li>
        <li class="nav-item">
                <a href="upload.php" class="nav-link active">
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
            <a href="../pages/tables/pegawai/datapegawai.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/examples/section.php" class="nav-link">
              <i class="nav-icon fab fa-buromobelexperte"></i>
              <p>Section</p>
            </a>
          </li>
          </ul>
      </a>
    </li>
    <li class="nav-item">
            <a href="../pages/assembly/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-autoprefixer"></i>
              <p>
                Assembly Access
                <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../config/koneksi.php';
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
            <a href="../pages/C&C/skillmap.php" class="nav-link">
              <i class="nav-icon fas fa-closed-captioning"></i>
              <p>
               C&C Access
               <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../config/koneksi.php';
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
            <a href="../pages/QC/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-quora"></i>
              <p>
              QC Access
              <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../config/koneksi.php';
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
          <a href="../examples/project/projects.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1><font color="blue"><strong>Upload Data</strong></font></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../admin.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="skillmap.php">Upload Data</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
    <section class="content">
    <marquee bgcolor="maroon" width="1080"><h4 style="color:#FFFFFF" text-align="center">Perhatian!! Sebelum klik tombol import, pastikan data yang anda tambahkan sudah benar.</h4></marquee><br>
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
 include '../config/koneksi.php';
 $data_pegawai = mysqli_query($db,"SELECT * FROM pegawai");
 // menghitung data pegawai
 $jumlah_pegawai = mysqli_num_rows($data_pegawai);
 ?>
                <?php echo $jumlah_pegawai; ?>



                </span>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalfade">
					Upload
				</button>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fade" id="modalfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Data Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    <p class="blink"><font color="red">Halo Admin!, Pastikan data yang diupload sudah benar ya!!</font></p>
                           <form method="post" enctype="multipart/form-data" action="pegawai.php">
				                <div class="form-group">
				                   <label for="exampleInputFile">File Upload</label>
				                   <input type="file" name="berkas_excel"  id="exampleInputFile">
                                <button type="submit" class="btn btn-primary">Import</button>
			</div>
				
			</form>
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->
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
 include '../config/koneksi.php';
 $data_renewal = mysqli_query($db,"SELECT * FROM renewal");
 // menghitung data pegawai
 $jumlah_renewal = mysqli_num_rows($data_renewal);
 ?>
                <?php echo $jumlah_renewal; ?>
                </span>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalrenewal">
					Upload
				</button>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fade" id="modalrenewal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Data Renewal</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    <p class="blink"><font color="red">Halo Admin!, Pastikan data yang diupload sudah benar ya!!</font></p>
                           <form method="post" enctype="multipart/form-data" action="renewal_excel.php">
				                <div class="form-group">
				                   <label for="exampleInputFile">File Upload</label>
				                   <input type="file" name="berkas_excel"  id="exampleInputFile">
                                <button type="submit" class="btn btn-primary">Import</button>
			</div>
				
			</form>
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->
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
 include '../config/koneksi.php';
 $data_licensi = mysqli_query($db,"SELECT * FROM licensi");
 // menghitung data pegawai
 $jumlah_licensi = mysqli_num_rows($data_licensi);
 ?>
                <?php echo $jumlah_licensi; ?>
                </span>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modallicensi">
					Upload
				</button>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fade" id="modallicensi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Data Licensi</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    <p class="blink"><font color="red">Halo Admin!, Pastikan data yang diupload sudah benar ya!!</font></p>
                           <form method="post" enctype="multipart/form-data" action="licensi_excel.php">
				                <div class="form-group">
				                   <label for="exampleInputFile">File Upload</label>
				                   <input type="file" name="berkas_excel"  id="exampleInputFile">
                                <button type="submit" class="btn btn-primary">Import</button>
			</div>
				
			</form>
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <!--<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penghargaan</span>
                <span class="info-box-number">
                    <?php
 include '../config/koneksi.php';
 $data_penghargaan = mysqli_query($db,"SELECT * FROM penghargaan");
 // menghitung data pegawai
 $jumlah_penghargaan = mysqli_num_rows($data_penghargaan);
 ?>
                <?php echo $jumlah_penghargaan; ?></span>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalpenghargaan">
					Upload
				</button>
        <div class="modal fade" id="modalpenghargaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Data Penghargaan</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>

                    <div class="modal-body">
                    <p class="blink"><font color="red">Halo Admin!, Pastikan data yang diupload sudah benar ya!!</font></p>
                           <form method="post" enctype="multipart/form-data" action="excel.php">
				                <div class="form-group">
				                   <label for="exampleInputFile">File Upload</label>
				                   <input type="file" name="berkas_excel"  id="exampleInputFile">
                                <button type="submit" class="btn btn-primary">Import</button>
			</div>
				
			</form>
               		</div>
 
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
   
              </div>
      
            </div>
    
          </div>





          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-columns"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengalaman Eksternal</span>
                <span class="info-box-number">
                <?php
 // menghubungkan dengan koneksi database
 include '../config/koneksi.php';
 $data_eksternal = mysqli_query($db,"SELECT * FROM pk_eksternal");
 // menghitung data pegawai
 $jumlah_eksternal = mysqli_num_rows($data_eksternal);
 ?>
                <?php echo $jumlah_eksternal; ?>
                </span>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleksternal">
					Upload
				</button>
            
        <div class="modal fade" id="modaleksternal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
            
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Data Pengalaman Kerja Eksternal</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
               
                    <div class="modal-body">
                    <p class="blink"><font color="red">Halo Admin!, Pastikan data yang diupload sudah benar ya!!</font></p>
                           <form method="post" enctype="multipart/form-data" action="excel.php">
				                <div class="form-group">
				                   <label for="exampleInputFile">File Upload</label>
				                   <input type="file" name="berkas_excel"  id="exampleInputFile">
                                <button type="submit" class="btn btn-primary">Import</button>
			</div>
				
			</form>
               		</div>
              
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
 
              </div>
             
            </div>
           
          </div>
      


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-maroon elevation-1"><i class="fas fa-columns"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengalaman Internal</span>
                <span class="info-box-number">
                <?php
 // menghubungkan dengan koneksi database
 include '../config/koneksi.php';
 $data_internal = mysqli_query($db,"SELECT * FROM pk_internal");
 // menghitung data pegawai
 $jumlah_internal = mysqli_num_rows($data_internal);
 ?>
                <?php echo $jumlah_internal; ?>
                </span>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modallicensi">
					Upload
				</button>
               
        <div class="modal fade" id="modallicensi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Data Pengalaman Kerja Internal</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    
                    <div class="modal-body">
                    <p class="blink"><font color="red">Halo Admin!, Pastikan data yang diupload sudah benar ya!!</font></p>
                           <form method="post" enctype="multipart/form-data" action="excel.php">
				                <div class="form-group">
				                   <label for="exampleInputFile">File Upload</label>
				                   <input type="file" name="berkas_excel"  id="exampleInputFile">
                                <button type="submit" class="btn btn-primary">Import</button>
			</div>
				
			</form>
               		</div>
               	
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
</section>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    window.onload = function(){
        <?php if(isset($_SESSION['success'])) { ?>
            Swal.fire({
                type: 'success',
                position: 'top-end',
                icon: 'success',
                title: '<?php echo $_SESSION['success'] ?>',
                showConfirmButton: false,
                timer: 3000
            });
        <?php unset($_SESSION['success']); } ?>
    }
</script>

<script>
setInterval(function() {
  var elems = document.getElementsByClassName("blink");
  for (var i = 0; i < elems.length; i++) {
    if (elems[i].style.visibility === "hidden") {
      elems[i].style.visibility = "visible";
    } else {
      elems[i].style.visibility = "hidden";
    }
  }
}, 1000);
</script>
</body>
</html>
