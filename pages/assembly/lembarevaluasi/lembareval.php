<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="../../../dist/img/tc2.png" />
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
            <span class="hidden-xs" align="center"><?php echo "" . $_SESSION['username']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle" alt="User Image">
              <p>
                <?php echo "" . $_SESSION['username']; ?> - Training Center Member
                <small>Member since August. 2022</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <span class="btn-left">
                <a href="../../examples/profile/profile.php" class="btn btn-primary btn-flat">Profile</a>
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
      <a href="../../../index3.php" class="brand-link bg-primary">
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
            <a href="#" class="d-block"><?php echo "" . $_SESSION['username']; ?></a>
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
                    $data_assy = mysqli_query($db, "SELECT * FROM pegawai where kode_section='450'");
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
                    $data_cc = mysqli_query($db, "SELECT * FROM pegawai where kode_section='410'");
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
                    $data_qc = mysqli_query($db, "SELECT * FROM pegawai where kode_section='420'");
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
              <h1>
                <font color="blue"><strong>Assembly Skill Map</strong></font>
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../../admin.php">Home</a></li>
                <li class="breadcrumb-item"><a href="datapegawai.php">Assembly Access</a></li>
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
                <h3 class="card-title">Assembly Member</h3>
              </div>
              <?php
              include '../../../config/koneksi.php';
              $id = $_GET['id'];
              $data = mysqli_query($db, "select * from evaluasi where id='$id'");
              while ($d = mysqli_fetch_array($data)) {
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
            <a href="../kartubelajar/kartubelajar.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Kartu Belajar</a>
            <a href="../perpindahanstand/perpindahanstand.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Perpindahan Stand/Line</a>
            <a href="../skillup/skillup.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Up Plan</a>
            <a href="../skillmap/assemblyskill.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Map</a>
            <a href="../lembarevaluasi/evaluasi.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-info btn-block margin-bottom">Lembar Evaluasi</a>
            <a href="../summarykelulusan/kelulusan.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Summary Kelulusan OJT</a></br>
          </div>

          <div class="col-md-9">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Lembar Evaluasi Skill Up Plan di Assembly</h3>
              </div>
              <div class="card-body">

                <table border="0" cellspacing="0" cellpadding="1" align="left" width="250">
                  <tr align="center" bgcolor="#1fe5d5">
                  </tr>
                  <tr>
                    <td>Bulan</td>
                    <td><?php echo $d['bulan']; ?></td>

                  </tr>
                  <tr>
                    <td>Line</td>
                    <td><?php echo $d['line']; ?></td>
                  </tr>
                  <tr>
                    <td>Stand</td>
                    <td><?php echo $d['stand']; ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal</td>
                    <td><?php echo $d['tanggaleval']; ?></td>
                  </tr>
                </table><br></br>
            
              <br></br><br></br>
              <h6><strong>Item Pemeriksaan untuk level 25%</strong></h6>
            
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalfade">
					Input data
				</button><br>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fade" id="modalfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Input data untuk item pemeriksaan level 25%</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                           <form method="post" enctype="multipart/form-data" action="record25.php">
				                <div class="form-group">
                        <input type="hidden" id="cb1" name="id_line" value="<?php echo $d['id']; ?>" />
                              <input type="hidden" name="NIK" value="<?php echo $d['NIK']; ?>" />
				                   1. Apakah operator sudah mengerti pengetahuan dasar: simbol dan gambar, penegtahuan material,jig dan alat bantu lain, serta penegtahuan dasar insert, mounting dan taping,serta pengetahuan point pekerjaan sesuai SK? <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="OK"> &nbsp; NG <br>
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="OK"> &nbsp; NG <br>
                           2. Apakah operator melakukan pekerjaan sesuai dengan yang dicontohkan trainer? <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="OK"> &nbsp; NG <br>
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="OK"> &nbsp; NG <br>
			</div>	
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->


          <?php
              }
              ?>




          <br>
          <?php
          include '../../../config/koneksi.php';
          $batas = 50;
          $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
          $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

          $previous = $halaman - 1;
          $next = $halaman + 1;
          $id_line = $_GET['id'];
          $data = mysqli_query($db, "select * from item25 where id_line='$id_line'");
          $jumlah_data = mysqli_num_rows($data);
          $total_halaman = ceil($jumlah_data / $batas);

          $data_pegawai = mysqli_query($db, "select * from item25 where id_line='$id_line' limit $halaman_awal, $batas");
          $nomor = $halaman_awal + 1;
          while ($d = mysqli_fetch_array($data_pegawai)) {
          ?>
            <table id="" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Hal-Hal yang di Evaluasi</th>
                  <th colspan="2">
                    <center>Evaluasi</center>
                  </th>
                </tr>
                <tr>
                  <th> 1</th>
                  <th>2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Apakah operator sudah mengerti pengetahuan dasar: simbol dan gambar, penegtahuan material,jig dan alat bantu lain, serta penegtahuan dasar insert, mounting dan taping,serta pengetahuan point pekerjaan sesuai SK? </td>
                  <td><?php echo $d['cb1']; ?></td>
                  <td><?php echo $d['cb2']; ?></td>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Apakah operator melakukan pekerjaan sesuai dengan yang dicontohkan trainer</td>
                  <td><?php echo $d['cb3']; ?></td>
                  <td><?php echo $d['cb4']; ?></td>
                  </td>
                </tr>
        </div>
    </div>
    </tbody>
    </table><br>
  <?php
          }
  ?>
  <h6><strong>Item Pemeriksaan untuk level 50%</strong></h6>
  <?php
              include '../../../config/koneksi.php';
              $id = $_GET['id'];
              $data = mysqli_query($db, "select * from evaluasi where id='$id'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalfadeitem50">
					Input data
				</button><br></br>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fadeitem50" id="modalfadeitem50" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Input data untuk item pemeriksaan level 50%</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                           <form method="post" enctype="multipart/form-data" action="record50.php">
				                <div class="form-group">
                        <input type="hidden" id="cb1" name="id_line" value="<?php echo $d['id']; ?>" />
                              <input type="hidden" name="NIK" value="<?php echo $d['NIK']; ?>" />
				                   1. Apakah Opertor melakukan pekerjaan dengan melihat SK dan dapat mengimbangi speed tanpa bantuan member asli/pengajar? <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="NG"> &nbsp; NG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="NG"> &nbsp; NG <br>
                           a. Model yang dikerjakan <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="model1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="model2"> <br>
                           b. Speed Conveyor <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="conveyor1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="conveyor2"> <br>
                           c. Speed Operator <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="operator1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="operator2"><br>
                           d. Jumlah Point kerja operator <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="jumlahpoin1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="jumlahpoin2"> <br>
                           e. Point yang dicapai operator <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="poin1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="poin2"><br>
                           e. Presentase yang dicapai <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="persentase1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="persentase2"><br>
                           2. Apakah operator dapat melakukan image training dengan benar tanpa melakukan kesalahan <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="NG"> &nbsp; NG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="NG"> &nbsp; NG <br>
                          </div>	
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->


          <?php
              }
              ?>
    <table id="" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th rowspan="2">No</th>
          <th rowspan="2">Hal-Hal yang di Evaluasi</th>
          <th colspan="2">
            <center>Evaluasi</center>
          </th>
        </tr>
        <tr>
          <th> 1</th>
          <th> 2</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include '../../../config/koneksi.php';
        $batas = 50;
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

        $previous = $halaman - 1;
        $next = $halaman + 1;
        $id_line = $_GET['id'];
        $data = mysqli_query($db, "select * from item50 where id_line='$id_line'");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

        $data_pegawai = mysqli_query($db, "select * from item50 where id_line='$id_line' limit $halaman_awal, $batas");
        $nomor = $halaman_awal + 1;
        while ($d = mysqli_fetch_array($data_pegawai)) {
        ?>
          <tr>
            <td>1</td>
            <td>Apakah Opertor melakukan pekerjaan dengan melihat SK dan dapat mengimbangi speed tanpa bantuan member asli/pengajar? </td>
            <td><?php echo $d['cb1']; ?></td>
            <td><?php echo $d['cb2']; ?></td>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>A.Model yang dikerjakan</td>
            <td><?php echo $d['model1']; ?></td>
            <td><?php echo $d['model2']; ?></td>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>B.Speed Conveyor</td>
            <td><?php echo $d['conveyor1']; ?></td>
            <td><?php echo $d['conveyor2']; ?></td>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>C.Speed Operator</td>
            <td><?php echo $d['operator1']; ?></td>
            <td><?php echo $d['operator2']; ?></td>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>D.Jumlah point kerja operator</td>
            <td><?php echo $d['jumlahpoin1']; ?></td>
            <td><?php echo $d['jumlahpoin2']; ?></td>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>E.Point yang dicapai operator</td>
            <td><?php echo $d['poin1']; ?></td>
            <td><?php echo $d['poin2']; ?></td>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>F.Presentase yang dicapai</td>
            <td><?php echo $d['persentase1']; ?></td>
            <td><?php echo $d['persentase2']; ?></td>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Apakah operator dapat melakukan image training dengan benar tanpa melakukan kesalahan?</td>
            <td><?php echo $d['cb3']; ?></td>
            <td><?php echo $d['cb4']; ?></td>
            </td>
          </tr>
  </div>
  </div>
  </tbody>
  </table><br></br>
<?php
        }
?>
<h6><strong>Item Pemeriksaan untuk level 75%</strong></h6>
<?php
              include '../../../config/koneksi.php';
              $id = $_GET['id'];
              $data = mysqli_query($db, "select * from evaluasi where id='$id'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalfadeitem75">
					Input data
				</button><br></br>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fadeitem75" id="modalfadeitem75" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Input data untuk item pemeriksaan level 75%</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                           <form method="post" enctype="multipart/form-data" action="record75.php">
				                <div class="form-group">
                        <input type="hidden" id="cb1" name="id_line" value="<?php echo $d['id']; ?>" />
                              <input type="hidden" name="NIK" value="<?php echo $d['NIK']; ?>" />
				                   1. Apakah Opertor melakukan pekerjaan dengan melihat SK dan dapat mengimbangi speed tanpa bantuan member asli/pengajar? <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="NG"> &nbsp; NG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="NG"> &nbsp; NG <br>
                           a. Model yang dikerjakan <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="model1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="model2"> <br>
                           b. Speed Conveyor <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="conveyor1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="conveyor2"> <br>
                           c. Speed Operator <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="operator1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="operator2"><br>
                           d. Jumlah Point kerja operator <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="jumlahpoin1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="jumlahpoin2"> <br>
                           e. Point yang dicapai operator <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="poin1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="poin2"><br>
                           e. Presentase yang dicapai <br>
                           <label for="exampleInputFile">Evaluasi 1 : </label>
                           <input type="teks" name="persentase1"> &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 : </label>
                           <input type="teks" name="persentase2"><br>
                           2. Operator tidak melakukan defect <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="NG"> &nbsp; NG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="NG"> &nbsp; NG <br>
                          </div>	
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->


          <?php
              }
              ?>
  <table id="" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Hal-Hal yang di Evaluasi</th>
        <th colspan="2">
          <center>Evaluasi</center>
        </th>
      </tr>
      <tr>
        <th>1</th>
        <th>2</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../../../config/koneksi.php';
      $batas = 50;
      $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
      $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

      $previous = $halaman - 1;
      $next = $halaman + 1;
      $id_line=$_GET['id'];
      $data = mysqli_query($db, "select * from item75 where id_line='$id_line'");
      $jumlah_data = mysqli_num_rows($data);
      $total_halaman = ceil($jumlah_data / $batas);

      $data_pegawai = mysqli_query($db, "select * from item75 where id_line='$id_line' limit $halaman_awal, $batas");
      $nomor = $halaman_awal + 1;
      while ($d = mysqli_fetch_array($data_pegawai)) {
      ?>
        <tr>
          <td>1</td>
          <td>Apakah Opertor melakukan pekerjaan dengan melihat SK dan dapat mengimbangi speed tanpa bantuan member asli/pengajar? </td>
          <td><?php echo $d['cb1']; ?></td>
          <td><?php echo $d['cb2']; ?></td>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>A.Model yang dikerjakan</td>
          <td><?php echo $d['model1']; ?></td>
          <td><?php echo $d['model2']; ?></td>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>B.Speed Conveyor</td>
          <td><?php echo $d['conveyor1']; ?></td>
          <td><?php echo $d['conveyor2']; ?></td>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>C.Speed Operator</td>
          <td><?php echo $d['operator1']; ?></td>
          <td><?php echo $d['operator2']; ?></td>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>D.Jumlah point kerja operator</td>
          <td><?php echo $d['jumlahpoin1']; ?></td>
          <td><?php echo $d['jumlahpoin2']; ?></td>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>E.Point yang dicapai operator</td>
          <td><?php echo $d['poin1']; ?></td>
          <td><?php echo $d['poin2']; ?></td>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>F.Presentase yang dicapai</td>
          <td><?php echo $d['persentase1']; ?></td>
          <td><?php echo $d['persentase2']; ?></td>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Operator tidak melakukan defect</td>
          <td><?php echo $d['cb3']; ?></td>
          <td><?php echo $d['cb4']; ?></td>
          </td>
        </tr>
</div>
</div>
</tbody>
</table><br></br>
<?php
      }
?>
<h6><strong>Item Pemeriksaan untuk level 100%</strong></h6>
<?php
              include '../../../config/koneksi.php';
              $id = $_GET['id'];
              $data = mysqli_query($db, "select * from evaluasi where id='$id'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalfade100">
					Input data
				</button><br><br>
                <!-- MODAL ANIMASI FADE -->
        <div class="modal fade100" id="modalfade100" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Input data untuk item pemeriksaan level 100%</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                           <form method="post" enctype="multipart/form-data" action="record100.php">
				                <div class="form-group">
                        <input type="hidden" id="cb1" name="id_line" value="<?php echo $d['id']; ?>" />
                              <input type="hidden" name="NIK" value="<?php echo $d['NIK']; ?>" />
				                   1. Apakah Opertor dapat menguasai seluruh proses kerja? <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb1" value="OK"> &nbsp; NG <br>
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb2" value="OK"> &nbsp; NG <br>
                           2. Apakah Operator dapat mengajarkan kepada operator lain? <br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb3" value="OK"> &nbsp; NG <br>
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb4" value="OK"> &nbsp; NG <br>
                           3. Operator memahami akibat dari defect yang terjadi serta dapat menemukan defect?<br>
                           <label for="exampleInputFile">Evaluasi 1 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb5" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb5" value="OK"> &nbsp; NG <br>
                           <label for="exampleInputFile">Evaluasi 2 :</label> &nbsp; &nbsp;
                           <input type="radio" name="cb6" value="OK"> &nbsp; OK  &nbsp; &nbsp;
                           <input type="radio" name="cb6" value="OK"> &nbsp; NG <br>
                          </div>	
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->


          <?php
              }
              ?>
<table id="" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Hal-Hal yang di Evaluasi</th>
      <th colspan="2">
        <center>Evaluasi</center>
      </th>
    </tr>
    <tr>
      <th> 1</th>
      <th> 2</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../../../config/koneksi.php';
    $batas = 50;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

    $previous = $halaman - 1;
    $next = $halaman + 1;
    $id_line= $_GET['id'];
    $data = mysqli_query($db, "select * from item100 where id_line='$id_line'");
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas);

    $data_pegawai = mysqli_query($db, "select * from item100 where id_line='$id_line' limit $halaman_awal, $batas");
    $nomor = $halaman_awal + 1;
    while ($d = mysqli_fetch_array($data_pegawai)) {
    ?>
      <tr>
        <td>1</td>
        <td>Apakah Opertor dapat menguasai seluruh proses kerja?</td>
        <td><?php echo $d['cb1']; ?></td>
        <td><?php echo $d['cb2']; ?></td>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Apakah Operator dapat mengajarkan kepada operator lain?</td>
        <td><?php echo $d['cb3']; ?></td>
        <td><?php echo $d['cb4']; ?></td>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Operator memahami akibat dari defect yang terjadi serta dapat menemukan defect?</td>
        <td><?php echo $d['cb5']; ?></td>
        <td><?php echo $d['cb6']; ?></td>
        </td>
      </tr>
      </div>
      </div>
  </tbody>
</table>
<?php
    }
?>
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
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
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
  $(function() {
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = {
      labels: [
        '100%',
        '50%',
        '75%',
        '25%',
        '0%',
      ],
      datasets: [{
        data: [100, 100, 100, 100, 100, 100],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
      }]
    }
    var pieOptions = {
      maintainAspectRatio: false,
      responsive: true,
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