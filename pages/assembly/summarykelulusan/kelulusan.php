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
    @media print {
      table {
        width: auto;
        height: auto;
        overflow-y: visible;
      }
    }

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
                <a href="../../examples/profile.php" class="btn btn-primary btn-flat">Profile</a>
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
        <img src="../../../dist/img/tc2.png" alt="Sumitomo Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
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
                <li class="breadcrumb-item"><a href="../skillmap.php">Assembly Access</a></li>
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
              $NIK = $_GET['NIK'];
              $data = mysqli_query($db, "select * from pegawai where NIK='$NIK'");
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
            <a href="../lembarevaluasi/evaluasi.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Lembar Evaluasi</a>
            <a href="../summarykelulusan/kelulusan.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-info btn-block margin-bottom">Summary Kelulusan OJT</a></br>
          </div>

          <div class="col-md-9">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Summary Kelulusan OJT Veteran</h3>
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
                <p><img src="../../../dist/img/logosumi.png" style="float:left;width:150px;height:120px;">
                  <img src="../../../dist/img/tc1.png" style="float:right;width:120px;height:100px;">
                </p>
                <h4>
                  <center><strong>SBI Assembly Training</strong></center>
                </h4>
                <h4>
                  <center><strong>Summary Kelulusan OJT Veteran</strong></center>
                </h4>
              </div>
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <table border="0" cellspacing="0" cellpadding="1" align="left" width="300">
                      <tr align="center" bgcolor="#1fe5d5">

                      </tr><br>
                      <tr>
                        <td>NIK</td>
                        <td><?php echo $d['NIK']; ?></td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td><?php echo $d['nama']; ?></td>

                      </tr>
                      <tr>
                        <td>Join Date</td>
                        <td><?php echo $d['join_date']; ?></td>
                      </tr>
                    </table>
</body>
</div>
<figure>
  <img src="../../../dist/img/<?php echo isset($d['image']) && !empty($d['image']) ? $d['image'] : '7309681.jpg'; ?>" class="mr-3" alt="..." style="width: 120px">
</figure>
</div>
</div>
</body>
</table>
<div>
  <div></div>
<?php
              }
?>
<div class="card-body">
  <div class="media">
    <div class="media-body">
      <form method="post" action="record.php">
        <h6><strong>A. Hasil Test Teori</strong></h6>
        <div style="overflow-x:auto">
          <table border="1" cellspacing="0" cellpadding="5">
            <thead>
              <tr>
                <th rowspan="4">No</th>
                <th rowspan="4">Materi</th>
                <th rowspan="4">Nilai Minimal</th>
                <th rowspan="4">Nilai Maksimal</th>
                <th colspan="3">
                  <center>Training 1</center>
                </th>
                <th colspan="2">
                  <center>Hasil</center>
                </th>
              </tr>
              <tr>
                <th rowspan="2">Test 1</th>
                <th rowspan="2">Test 2</th>
                <th rowspan="2">Test 3</th>
                <th rowspan="2">OK/NG</th>
              </tr>
            </thead>
            <tbody>

              <?php
              include '../../../config/koneksi.php';
              $NIK = $_GET['NIK'];
              $data = mysqli_query($db, "select * from lulusassy where NIK='$NIK'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <th>1</th>
                  <th>Test Pemahaman WH</th>
                  <th>80</th>
                  <th>100</th>
                  <td><?php echo $d['test1']; ?></td>
                  <td><?php echo $d['test2']; ?></td>
                  <td><?php echo $d['test3']; ?></td>
                  <td><?php echo $d['hasil']; ?></td>
                  </td>
                </tr>
                <tr>
                  <th>2</th>
                  <th>Konsentrasi</th>
                  <th>90</th>
                  <th>100</th>
                  <td><?php echo $d['konsentrasi1']; ?></td>
                  <td><?php echo $d['konsentrasi2']; ?></td>
                  <td><?php echo $d['konsentrasi3']; ?></td>
                  <td><?php echo $d['hasilkonsen']; ?></td>
                  </td>
                </tr>
            </tbody>
          </table>
        <?php
              }
        ?>
        </div>


        <h6><strong>B. Hasil Test G-Stars</strong></h6>
        <div style="overflow-x:auto">
          <table border="1" cellspacing="0" cellpadding="5">
            <thead>
              <tr>
                <th rowspan="4">No</th>
                <th rowspan="4">Materi</th>
                <th colspan="2">
                  <center>Standar Minimal</center>
                </th>
                <th colspan="3">
                  <center>Result</center>
                </th>
              </tr>
              <tr>
                <th rowspan="2">Rank</th>
                <th rowspan="2">Poin</th>
                <th rowspan="2">Rank</th>
                <th rowspan="2">Poin</th>
                <th rowspan="2">OK/NG</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../../../config/koneksi.php';
              $NIK = $_GET['NIK'];
              $data = mysqli_query($db, "select * from g_stars where NIK='$NIK'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <th>1</th>
                  <th>Walk 5 Meter</th>
                  <th>S</th>
                  <th>10</th>
                  <td><?php echo $d['walkrank']; ?></td>
                  <td><?php echo $d['walkpoin']; ?></td>
                  <td><?php echo $d['walkresult']; ?></td>
                  </td>
                </tr>
                <tr>
                  <th>2</th>
                  <th>Handicraft</th>
                  <th>S</th>
                  <th>10</th>
                  <td><?php echo $d['handirank']; ?></td>
                  <td><?php echo $d['handipoin']; ?></td>
                  <td><?php echo $d['handiresult']; ?></td>
                  </td>
                </tr>
                <tr>
                  <th>3</th>
                  <th>Calculation</th>
                  <th>B</th>
                  <th>7</th>
                  <td><?php echo $d['calrank']; ?></td>
                  <td><?php echo $d['calpoin']; ?></td>
                  <td><?php echo $d['calresult']; ?></td>
                  </td>
                </tr>
                <tr>
                  <th>4</th>
                  <th>Image Training</th>
                  <th>B</th>
                  <th>10</th>
                  <td><?php echo $d['imgrank']; ?></td>
                  <td><?php echo $d['imgpoin']; ?></td>
                  <td><?php echo $d['imgresult']; ?></td>
                  </td>
                </tr>
                <tr>
                  <th>5</th>
                  <th>Half Lap 100 MM</th>
                  <th>B</th>
                  <th>10</th>
                  <td><?php echo $d['halfrank']; ?></td>
                  <td><?php echo $d['halfpoin']; ?></td>
                  <td><?php echo $d['halfresult']; ?></td>
                  </td>
                </tr>
            </tbody>
          </table>
          <h6><strong>
              <center>Member <font color=”green”><?php echo $d['NIK']; ?></font> dinyatakan <font color=”green”><?php echo $d['status']; ?></font>
              </center>
            </strong></h6>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php
              }
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Melanjutkan ke Skill Proses</h3>
    </div>
    <div class="card-body">
      <h6><strong>C. Hasil Test Skill Proses</strong></h6>
      <div style="overflow-x:auto">
        <table border="1" cellspacing="0" cellpadding="5">
          <thead>
            <tr>
              <th rowspan="4">Item</th>
              <th rowspan="4">Materi</th>
              <th colspan="3">
                <center>Standar Line</center>
              </th>
              <th colspan="3">
                <center>Training 1 (OJT 5 day)</center>
              </th>
              <th colspan="3">
                <center>Training 2 (Week 2)</center>
              </th>
              <th colspan="3">
                <center>Training 3 (Week 3)</center>
              </th>
              <th colspan="3">
                <center>Training 4 (Week 4)</center>
              </th>
              <th rowspan="4">
                <center>Hasil Akhir</center>
              </th>
            </tr>
            <tr>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Target Eficiency OJT</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
              <th rowspan="2">Defect Visual</th>
              <th rowspan="2">Tacho Speed</th>
              <th rowspan="2">Eficiency</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include '../../../config/koneksi.php';
            $NIK = $_GET['NIK'];
            $data = mysqli_query($db, "select * from skillproses where NIK='$NIK'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <th>1</th>
                <th>Sub Assy</th>
                <td><?php echo $d['defectstandar']; ?></td>
                <td><?php echo $d['tachostandar']; ?></td>
                <th>75%</th>
                <td><?php echo $d['defectt1']; ?></td>
                <td><?php echo $d['tachot1']; ?></td>
                <td><?php echo $d['eficiencyt1']; ?></td>
                <td><?php echo $d['defectt2']; ?></td>
                <td><?php echo $d['tachot2']; ?></td>
                <td><?php echo $d['eficiencyt2']; ?></td>
                <td><?php echo $d['defectt3']; ?></td>
                <td><?php echo $d['tachot3']; ?></td>
                <td><?php echo $d['eficiencyt3']; ?></td>
                <td><?php echo $d['defectt4']; ?></td>
                <td><?php echo $d['tachot4']; ?></td>
                <td><?php echo $d['eficiencyt4']; ?></td>
                <td><?php echo $d['hasilakhir']; ?></td>
                </td>
              </tr>
          </tbody>
        </table><br>
        <h4><strong>
            <center>Member <font color=”green”><?php echo $d['NIK']; ?></font> dinyatakan <font color=”green”><?php echo $d['status']; ?></font>
            </center>
          </strong></h4>
        <div class="card-body">
          <table border="0">
            <thead>
              <tr>
                <th>Catatan Incarge Line:</th>
                <th>Dibuat</th>
                <th>Diperiksa</th>
                <th>Disetujui</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $d['catatan']; ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
            <tfoot>
              <tr>
                <td></td>
                <th><?php echo $d['dibuat']; ?></th>
                <th><?php echo $d['diperiksa']; ?></th>
                <th><?php echo $d['disetujui']; ?></th>
              </tr>
              <tr>
                <td></td>
                <th>Trainer</th>
                <th>Incarge Line</th>
                <th>Supervisor</th>
              </tr>
            </tfoot>
          </table>
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".modalBesar<?php echo $d['NIK']; ?>">Teori</button>

          <div class="modal fade modalBesar<?php echo $d['NIK']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">

              <div class="modal-content">
                <div class="modal-header">
                  <h5><?php echo $d['NIK']; ?> </h5>
                </div>
                <div class="modal-body">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">
                        <center>Tambah Hasil Test Teori</center>
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="media">
                        <div class="media-body">
                          <tbody>
                            <form method="post" action="tambah_teori.php">
                              <div class="modal-body">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <br><label>Test Pemahaman WH</label><br>
                                        <input type="text" name="test1" placeholder="Masukkan Test1"><br>
                                        <input type="text" name="test2" placeholder="Masukkan Nilai test2"><br>
                                        <input type="text" name="test3" placeholder="Masukkan nilai tset3"><br>
                                        <label>Hasil</label><br>
                                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="section">
                                          <option>OK</option>
                                          <option>NG</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <br><label>Konsentrasi</label><br>
                                        <input type="text" name="konsentrasi1" placeholder="Masukkan Test1"><br>
                                        <input type="text" name="konsentrasi2" placeholder="Masukkan Nilai test2"><br>
                                        <input type="text" name="konsentrasi3" placeholder="Masukkan nilai tset3"><br>
                                        <label>Hasil</label><br>
                                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="section">
                                          <option>OK</option>
                                          <option>NG</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                <?php
              }
                ?>
                </div>
              </div>
            </div>
            </section>
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
        <script src="../.././plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
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
        </body>

</html>