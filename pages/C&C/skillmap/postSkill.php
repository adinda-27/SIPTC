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
                            <a href="../../assembly/skillmap.php" class="nav-link">
                                <i class="nav-icon fab fa-autoprefixer"></i>
                                <p>
                                    Assembly Access
                                    <span class="badge badge-primary right">
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
                            <a href="../../C&C/skillmap.php" class="nav-link active">
                                <i class="nav-icon fas fa-closed-captioning"></i>
                                <p>
                                    C&C Access
                                    <span class="badge badge-primary right" style="background-color: white; color: black">
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
                                <font color="blue"><strong>C&C Skill Map</strong></font>
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../../admin.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="../skilmap.php">C&C Access</a></li>
                                <li class="breadcrumb-item active">Skill map pegawai</li>
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
                                <h3 class="card-title">C&C Member</h3>
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
                        <a href="../perpindahanstand/recordstand.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Basic Training</a>
                        <a href="../skillup/skillup.php?NIK=<?php echo $d['NIK']; ?>" class="btn btn-primary btn-block margin-bottom">Skill Up</a>
                        <a href="<?php if ($d['sub_section'] == 'Auto') {
                                        echo '../skillmap/C&Cskill.php?NIK=' . $d['NIK'];
                                    } else {
                                        echo '../skillmap/postSkill.php?NIK=' . $d['NIK'];
                                    } ?>" class="btn btn-info btn-block margin-bottom">Skill Map</a>
                    </div>

                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Skill Map</h3>
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
                                <table id="" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2"><?php echo $d['pekerjaan']; ?></th>
                                            <th colspan="4">
                                                <center>Skill Map Post Proses</center>
                                            </th>
                                            <th rowspan="2">action</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Machine/Proses</th>
                                            <th rowspan="2">Skill</th>
                                            <th rowspan="2">Qualified</th>
                                        </tr>
                                    </thead>
</body>
<tr>
    <td rowspan="41">
        <center><img src="../../../dist/img/<?php echo isset($d['image']) && !empty($d['image']) ? $d['image'] : '7309681.jpg'; ?>" class="mr-3" alt="..." style="width: 100px"></center>
        <br></br>
        <center><?php echo $d['nama']; ?></center>
        <br></br>
        <center><?php echo $d['NIK']; ?></center>
    </td>
</tr>
<tr>
    <td rowspan="2" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            Basic
        </div>
    </td>
    <td>
        ISO-CU
    </td>

    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='ISO-CU'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon;font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='ISO-CU'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#isoModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="isoModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training ISO-CU</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="ISO-CU">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#cuModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="cuModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Basic ISO-CU</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="ISO-CU">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
<tr>
    <td>
        Aluminium Wire
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='Aluminium Wire'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='Aluminium Wire'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#aluModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="aluModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training Aluminium Wire</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="Aluminium Wire">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#alumModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="alumModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training Aluminium Wire</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="Aluminium Wire">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>

<tr>
    <td rowspan="3" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            HC
        </div>
    </td>
    <td>
        HC Repair
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='HC Repair'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">Belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon;">-</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='HC Repair'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#hcrepairModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="hcrepairModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training HC Repair</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="HC Repair">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#repairModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="repairModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training HC Repair</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="HC Repair">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        Dandory HC
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='Dandory HC'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='Dandory HC'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#dandoryhcModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="dandoryhcModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training Dandory HC</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="Dandory HC">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hcdandoryModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="hcdandoryModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training Dandory HC</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="Dandory HC">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        HC
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='HC'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='HC'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#hcModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="hcModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training HC</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="HC">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hclgiModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="hclgiModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training HC</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="HC">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td rowspan="7" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            Joint Process
        </div>
    </td>
    <td>
        MIDDLE CST 100
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='MIDDLE CST 100'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='MIDDLE CST 100'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#MIDDLECSTModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MIDDLECSTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training MIDDLE CST 100</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="MIDDLE CST 100">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#CSTMiddleModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="CSTMiddleModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training MIDDLE CST 100</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="MIDDLE CST 100">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        MIDDLE UAS
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='MIDDLE UAS'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='MIDDLE UAS'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#MIDDLEUASModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MIDDLEUASModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training MIDDLE UAS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="MIDDLE UAS">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#UASMiddleModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="UASMiddleModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training MIDDLE UAS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="MIDDLE UAS">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        SPLICE
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='SPLICE'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='SPLICE'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#SPLICEModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="SPLICEModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SPLICE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SPLICE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MySpliceModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MySpliceModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SPLICE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SPLICE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        TP.1,2,3 & WELD-CUP
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='TP.1,2,3  & WELD-CUP'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='TP.1,2,3  & WELD-CUP'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#WELD-CUPModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="WELD-CUPModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TP.1,2,3 & WELD-CUP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TP.1,2,3  & WELD-CUP">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyWeld-CupModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyWeld-CupModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TP.1,2,3 & WELD-CUP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TP.1,2,3  & WELD-CUP">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        SILICONE
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='SILICONE'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='SILICONE'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#SILICONEModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="SILICONEModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SILICONE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SILICONE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MySILICONEModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MySILICONEModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SILICONE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SILICONE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        W-PAD
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='W-PAD'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='W-PAD'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#W-PADModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="W-PADModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training W-PAD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="W-PAD">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyW-PADModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyW-PADModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training W-PAD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="W-PAD">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        D.JOINT
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='D.JOINT'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='D.JOINT'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#DJOINTModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="DJOINTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training D.JOINT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="D.JOINT">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyDJOINTModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyDJOINTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training D.JOINT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="D.JOINT">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td rowspan="7" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            WELDING
        </div>
    </td>
    <td>
        WELDING
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='WELDING'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='WELDING'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#WELDINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="WELDINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training WELDING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="WELDING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyWELDINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyWELDINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training WELDING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="WELDING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        UTM741 AS
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='UTM741 AS'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='UTM741 AS'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#UTM741ASModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="UTM741ASModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training UTM741 AS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="UTM741 AS">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyUTM741ASModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyUTM741ASModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training UTM741 AS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="UTM741 AS">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        USW
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='USW'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='USW'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#USWModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="USWModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training USW</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="USW">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyUSWModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyUSWModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training USW</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="USW">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        WATER PROOF
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='WATER PROOF'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='WATER PROOF'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#WATERPROOFModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="WATERPROOFModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training WATER PROOF</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="WATER PROOF">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyWATERPROOFModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyWATERPROOFModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training WATER PROOF</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="WATER PROOF">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        DANDORY WELDING
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='DANDORY WELDING'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='DANDORY WELDING'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#DandoryWeldingModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="DandoryWeldingModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training DANDORY WELDING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="DANDORY WELDING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyDandoryWeldingModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyDandoryWeldingModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training DANDORY WELDING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="DANDORY WELDING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        COVER
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='COVER'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='COVER'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#COVERModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="COVERModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training COVER</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="COVER">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyCOVERModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyCOVERModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training COVER</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="COVER">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        BENDING
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='BENDING'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='BENDING'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#BENDINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="BENDINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training BENDING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="BENDING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyBENDINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyBENDINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training BENDING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="BENDING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>

<tr>
    <td rowspan="4" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            TWIST
        </div>
    </td>
    <td>
        TWIST AIR BAG
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='TWIST AIR BAG'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='TWIST AIR BAG'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#TWISTAIRBAGModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="TWISTAIRBAGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TWIST AIR BAG</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TWIST AIR BAG">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyTWISTAIRBAGModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyTWISTAIRBAGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TWIST AIR BAG</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TWIST AIR BAG">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        TWIST ALUMINIUM
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='TWIST ALUMINIUM'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='TWIST ALUMINIUM'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#TWISTALUMINIUMModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="TWISTALUMINIUMModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TWIST ALUMINIUM</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TWIST ALUMINIUM">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyTWISTALUMINIUMModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyTWISTALUMINIUMModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TWIST ALUMINIUM</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TWIST ALUMINIUM">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        TWIST
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='TWIST'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='TWIST'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#TWISTModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="TWISTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TWIST</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TWIST">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyTWISTModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyTWISTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TWIST</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TWIST">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        D.TWIST
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='D.TWIST'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='D.TWIST'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#DTWISTModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="DTWISTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training D.TWIST</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="D.TWIST">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyDTWISTModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyDTWISTModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training D.TWIST</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="D.TWIST">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td rowspan="8" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            BIG WIRE
        </div>
    </td>
    <td>
        CUTTING
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='CUTTING'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='CUTTING'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#CUTTINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="CUTTINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training CUTTING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="CUTTING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyCUTTINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyCUTTINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training CUTTING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="CUTTING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>




<tr>
    <td>
        STRIPING
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='STRIPING'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='STRIPING'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#STRIPINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="STRIPINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training STRIPING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="STRIPING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MySTRIPINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MySTRIPINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training STRIPING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="STRIPING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        POWER STRIP
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='POWER STRIP'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='POWER STRIP'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#POWERSTRIPModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="POWERSTRIPModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training POWER STRIP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="POWER STRIP">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyPOWERSTRIPModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyPOWERSTRIPModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training POWER STRIP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="POWER STRIP">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        HC 10 TON
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='HC 10 TON'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='HC 10 TON'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#HC10TONModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="HC10TONModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training HC 10 TON</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="HC 10 TON">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyHC10TONModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyHC10TONModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training HC 10 TON</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="HC 10 TON">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        ASSESORIES
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='ASSESORIES'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='ASSESORIES'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ASSESORIESModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="ASSESORIESModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training ASSESORIES</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="ASSESORIES">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyASSESORIESModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyASSESORIESModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training ASSESORIES</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="ASSESORIES">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        CRIMPING
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='CRIMPING'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='CRIMPING'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#CRIMPINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="CRIMPINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training CRIMPING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="CRIMPING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyCRIMPINGModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyCRIMPINGModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training CRIMPING</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="CRIMPING">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        PGC 15 TON
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='PGC 15 TON'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='PGC 15 TON'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#PGC15TONModal<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="PGC15TONModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training PGC 15 TON</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="PGC 15 TON">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyPGC15TONModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyPGC15TONModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training PGC 15 TON</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="PGC 15 TON">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        SOLDER
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='SOLDER'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='SOLDER'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#SOLDER<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="SOLDERModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SOLDER</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SOLDER">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MySOLDERModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MySOLDERModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SOLDER</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SOLDER">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>

<tr>
    <td rowspan="5" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">
            SHIELD WIRE
        </div>
    </td>
    <td>
        TABLE
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='TABLE'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='TABLE'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#TABLE<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="TABLEModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TABLE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TABLE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyTABLEModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyTABLEModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training TABLE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="TABLE">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>

<tr>
    <td>
        CSD
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='CSD'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='CSD'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#CSD<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="CSDModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training CSD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="CSD">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyCSDModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyCSDModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training CSD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="CSD">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        WHS2000
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='WHS2000'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='WHS2000'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#WHS2000<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="WHS2000Modal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training WHS2000</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="WHS2000">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyWHS2000Modal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyWHS2000Modal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training WHS2000</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="WHS2000">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        DANDORY SHIELD
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='DANDORY SHIELD'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='DANDORY SHIELD'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#DANDORYSHIELD<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="DANDORYSHIELDModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training DANDORY SHIELD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="DANDORY SHIELD">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyDANDORYSHIELDModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyDANDORYSHIELDModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training DANDORY SHIELD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="DANDORY SHIELD">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        INSERT GROMET
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='INSERT GROMET'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='INSERT GROMET'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#InsertGromet<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="InsertGrometModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training INSERT GROMET</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="INSERT GROMET">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyInsertGrometModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyInsertGrometModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training INSERT GROMET</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="INSERT GROMET">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td rowspan="4" style="display: table-cell; vertical-align: middle;">
        <div style="transform: rotate(-90deg); text-align: center;">

        </div>
    </td>
    <td>
        SET 3
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='SET 3'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='SET 3'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#SET3<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="SET3Modal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SET 3</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SET 3">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MySET3Modal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MySET3Modal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training SET 3</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="SET 3">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        VANITY
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='VANITY'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='VANITY'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#VANITY<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="VANITYModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training VANITY</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="VANITY">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyVANITYModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyVANITYModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training VANITY</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="VANITY">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>


<tr>
    <td>
        DOME LAMP
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='DOME LAMP'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='DOME LAMP'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#DOME LAMP<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="DOME LAMPModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training DOME LAMP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="DOME LAMP">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyDOME LAMPModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyDOME LAMPModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training DOME LAMP</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="DOME LAMP">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>



<tr>
    <td>
        ALCP-L
    </td>
    <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT statusbt FROM button_table WHERE NIK='$NIK' AND skill='ALCP-L'";
                                $result = mysqli_query($db, $query);
                                $status = mysqli_fetch_assoc($result);
                                if ($status === NULL) {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                } elseif ($status['statusbt'] == 'ok') {
                                    echo '<td style="text-align: center; background-color: palegreen;">OK</td>';
                                } else {
                                    echo '<td style="text-align: center; background-color: salmon; font-size: 10px;">belum tr</td>';
                                }
    ?>
    <td>
        <?php
                                include '../../../config/koneksi.php';
                                $NIK = $_GET['NIK'];
                                $query = "SELECT myDate FROM button_table WHERE NIK='$NIK' AND skill='ALCP-L'";
                                $result = mysqli_query($db, $query);
                                $tanggal = mysqli_fetch_assoc($result);
                                if ($tanggal) {
                                    echo $tanggal['myDate'];
                                } else {
                                    echo "-";
                                }
        ?>
    </td>
    <td>
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ALCP-L<?php echo $d['NIK']; ?>"><i class="fas fa-pencil-alt"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="ALCP-LModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training ALCP-L</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update_data.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="ALCP-L">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#MyALCP-LModal<?php echo $d['NIK']; ?>"><i class="fas fa-edit"></i></button>
        <!--Modal Start-->
        <!-- Modal HTML -->
        <div id="MyALCP-LModal<?php echo $d['NIK']; ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Input Tanggal Training ALCP-L</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form method="post" action="update.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="myDate">
                            </div>
                            <input type="hidden" name="NIK" value="<?php echo $_GET['NIK']; ?>">
                            <input type="hidden" name="statusbt" value="ok">
                            <input type="hidden" name="skill" value="ALCP-L">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal End-->
    </td>
</tr>









</table>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
                            }
?>
</section>

</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
<footer class="main-footer">
    <strong>
        <center>Copyright &copy; 2014-2021 AdminLTE.io</a>
    </strong>
    All rights reserved.
    <br>
    <strong>
        <center>SIP TC is Powered by <a href="pages/company/index.php">Training Centre</a>
    </strong>.&nbsp Developed by <a href="https://adindaselfiani.wordpress.com/">Adselna </a></center>
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
<script src="../../../plugins/chart.js/Chart.min.js"></script>
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
<?php
include '../../../config/koneksi.php';
$NIK = $_GET['NIK'];
$no = 1;
$data = mysqli_query($db, "select * from button_table where NIK='$NIK'");
while ($d = mysqli_fetch_array($data)) {
?>
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
<?php
}
?>
</body>

</html>