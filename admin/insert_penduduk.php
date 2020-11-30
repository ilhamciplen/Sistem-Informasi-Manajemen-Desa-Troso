<?php
session_start();
if (empty($_SESSION['user'])) {
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
}
$user = $_SESSION['user'];
require_once('../database/db_login.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Penduduk</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../css/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../css/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../css/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../css/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="../keluar.php?user=<?php echo $user; ?>" role="button">
                        <i class="fas fa-sign-out-alt">Sign Out</i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../dist/img/jepara.jpg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SIMDESA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="data_penduduk.php?user=<?php echo $user; ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Tambah Data Penduduk
                                </p>
                            </a>
                        </li>

                        <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Tambah Data Penduduk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Penduduk v1</li>
                                <li class="breadcrumb-item active">Tambah Data Penduduk </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-danger">
                                <div class="card-header">

                                </div>
                                <div class="card-body">

                                    <form id="form" method="post" action="tambah_penduduk.php?user=<?php echo $user; ?>">
                                        <div class="row">
                                            <div class="col-3">
                                                <label>NIK :</label>
                                                <input placeholder="Masukkan NIK" type="number" class="form-control" name="nik" maxlength="20" required>
                                            </div>
                                            <div class="col-4">
                                                <label>No.KK :</label>
                                                <input placeholder="Masukkan KK" type="number" class="form-control" name="no_kk" maxlength="20" required>
                                            </div>
                                            <div class="col-5">
                                                <label>Nama :</label>
                                                <input placeholder="Masukkan Nama" type="text" class="form-control" name="nama" maxlength="20" required>
                                            </div>
                                            <div class="col-3">
                                                <label>Tempat Lahir :</label>
                                                <input placeholder="Masukkan Tempat Lahir" type="text" class="form-control" name="tempat_lahir" maxlength="20" required>
                                            </div>
                                            <div class="col-4">
                                                <label>Tanggal lahir :</label>
                                                <input placeholder="Masukkan Tanggal Lahir" type="date" class="form-control" name="lahir" maxlength="20" required>
                                            </div>
                                            <div class="col-5">
                                                <label>Status Kawin :</label>
                                                <input placeholder="Masukkan Status Kawin" type="text" class="form-control" name="status_kawin" maxlength="20" required>
                                            </div>
                                            <div class="col-3">
                                                <label>Kewarganegaraan :</label>
                                                <input placeholder="Masukkan Kewarganegaraan" type="text" class="form-control" name="kewarganegaraan" maxlength="20" required>
                                            </div>
                                            <div class="col-4">
                                                <label>RT :</label>
                                                <input placeholder="Masukkan RT" type="number" class="form-control" name="rt" maxlength="20" required>
                                            </div>
                                            <div class="col-5">
                                                <label>RW :</label>
                                                <input placeholder="Masukkan RW" type="number" class="form-control" name="rw" maxlength="20" required>
                                            </div>
                                            <div class="col-3">
                                                <label>Desa :</label>
                                                <?php
                                                require_once('../database/db_login.php');
                                                $query1 = "SELECT * FROM desa";
                                                $result = $mysqli->query($query1);
                                                while ($row = $result->fetch_object()) {
                                                    $nama_desa = $row->nama_desa;
                                                }
                                                ?>
                                                <input type="text" class="form-control" name="desa" value="<?php echo $nama_desa; ?>" readonly>
                                            </div>

                                            <div class="col-5">
                                                <label>Pekerjaan :</label>
                                                <input placeholder="Masukkan Pekerjaan" type="text" class="form-control" name="pekerjaan" maxlength="20" required>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../css/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../cssplugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="../css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="../css/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="../css/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="../css/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="../css/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../css/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="../css/plugins/moment/moment.min.js"></script>
        <script src="../css/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="../css/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../css/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../css/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../css/dist/js/demo.js"></script>
        <!-- jQuery -->

        <script src="../css/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../css/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../css/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../css/dist/js/demo.js"></script>



    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 <a href="">ilham.ciplen2</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.5
        </div>
    </footer>

</body>

</html>