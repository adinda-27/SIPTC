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
  <title>SIP Training Center | Data Penghargaan</title>

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
              <a href="../../examples/profile/profile.php" class="btn btn-primary btn-flat">Profile</a>
            </span>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>
          Data Pegawai
          <i class="right fas fa-angle-left"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../pegawai/datapegawai.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../examples/section.php" class="nav-link active">
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
            <h1>Penghargaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../../admin.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../../examples/section.php">Section</a></li>
              <li class="breadcrumb-item active">Penghargaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <a class="btn btn-primary" href="../penghargaan/tambahpenghargaan.php">
            <i class="fa fa-plus">
            </i>
            Tambah Data
        </a>
      <div class="container-fluid"></br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Penghargaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="datapenghargaan.php" method="get"  style="float:right;">
            <input type="text" name="search" placeholder="Masukkan NIK">
            <button class="btn btn-primary btn-sm" type="submit">Cari</button>
            </form>
            <br></br>
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No penghargaan</th>
                    <th>Nama penghargaan</th>
                    <th>Penghargaan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php 
		    include '../../../config/koneksi.php';
		    $batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
        $data = mysqli_query($db,"select * from penghargaan");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);
        if(isset($_GET['search'])){
        $NIK = $_GET['search'];
        $data_penghargaan = mysqli_query($db,"select * from penghargaan where NIK='$NIK' limit $halaman_awal, $batas ");
        } else {
				$data_penghargaan = mysqli_query($db,"select * from penghargaan limit $halaman_awal, $batas");
        }
        $nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_penghargaan)){
					?>
                  <tbody>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $d['NIK']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['no_penghargaan']; ?></td>
                    <td><?php echo $d['nama_penghargaan']; ?></td>
                    <td><img src="../../../dist/img/<?php echo $d['penghargaan']; ?>" width="100" /></td>
                    <td class="project-actions text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".modalBesar<?php echo $d['id']; ?>"><i class="fas fa-eye">View</i></button>
 
 <div class="modal fade modalBesar<?php echo $d['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg">
  
     <div class="modal-content">
       <div class="modal-header">
         <h5>Penghargaan <?php echo $d['no_penghargaan']; ?> a/n <?php echo $d['nama']; ?>,<?php echo $d['NIK']; ?> </h5>
       </div>
       <div class="modal-body">
       <div class="card card-primary">
       <div class="card-header">
          <h3 class="card-title"><center>Penghargaan</center></h3>
        </div>
       <div class="card-body">
     <div class="media">
        <div class="media-body">
          <body>
          <table border="0" cellspacing="0" cellpadding="0" align="left" width="450">
                <tr align="center" bgcolor="#1fe5d5">
                   
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><?php echo $d['NIK']; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $d['nama']; ?></td>
                </tr>
                <tr>
                    <td>No_Penghargaan</td>
                    <td><?php echo $d['no_penghargaan']; ?></td>
                </tr>
                <tr>
                    <td>Nama Penghargaan</td>
                    <td><?php echo $d['nama_penghargaan']; ?></td>
                </tr>
                <tr>
                    <td>Nama Pemberi</td>
                    <td><?php echo $d['nama_pemberi']; ?></td>
                </tr>
                <tr>
                    <td>Institusi</td>
                    <td><?php echo $d['institusi']; ?></td>
                </tr>
                <tr>
                    <td>Tahun Diterima</td>
                    <td><?php echo $d['tahun_diterima']; ?></td>
                </tr>
    </table>
    </body>
       </div>
       <figure>
        <img src="../../../dist/img/<?php echo $d['penghargaan']; ?>" class="mr-3" alt="..." style="width: 250px">
    </figure>
     </div>
     </div>
     </div>
  
   </div>
 </div>
   </div>
 </div>
                      <a class="btn btn-info btn-sm" href="edit_penghargaan.php?id=<?php echo $d['id']; ?>">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger<?php echo $d['id']; ?>"><i class="fas fa-trash">
                  Delete</i>
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
              <a class="btn btn-outline-light btn-sm" href="hapus_penghargaan.php?id=<?php echo $d['id']; ?>">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                      </a>
                  </td>
                  </tr>
                  </td>
                  </tr>
                  </tbody>
                  <?php 
		}
		?>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No Penghargaan</th>
                    <th>Nama Penghargaan</th>
                    <th>Penghargaan</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
                <nav>
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" <?php if ($halaman > 1) {
                                echo "href='?halaman=$previous'";
                              } ?>>Previous</a>
    </li>
    <?php
    $awal_tampil = max(1, $halaman - 2);
    $akhir_tampil = min($total_halaman, $halaman + 2);
    if ($awal_tampil > 1) {
      echo "<li class='page-item'><a class='page-link'>...</a></li>";
    }
    
    for ($x = $awal_tampil; $x <= $akhir_tampil; $x++) {
    ?>
      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
    <?php
    }
    
    if ($akhir_tampil < $total_halaman) {
      echo "<li class='page-item'><a class='page-link'>...</a></li>";
    }
    ?>
    <li class="page-item">
      <a class="page-link" <?php if ($halaman < $total_halaman) {
                                echo "href='?halaman=$next'";
                              } ?>>Next</a>
    </li>
      </ul>
    </nav>
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
  <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'data berhasil dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
</body>
</html>



