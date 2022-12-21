<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard User</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/home') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard <sup>User</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/home') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/home'); ?>/tambah">
                    <i class="fas fa-cog"></i>
                    <span>Tambah Pengajuan</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/home'); ?>/status">
                    <i class="fas fa-cog"></i>
                    <span>Status Pengajuan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/home'); ?>/jadwal">
                    <i class="fas fa-cog"></i>
                    <span>Jadwal Kegiatan</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Aksi
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/admin/signup') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sign Up</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button class="btn btn-danger">Logout</button>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header text-center bg-danger">
                                    Yakin ingin keluar?
                                </h6>

                                <a class="dropdown-item text-center small text-danger" href="#">Keluar</a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Pengajuan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6">
                            <div class="card">
                                <div class="card-header bg-info">

                                </div>
                                <div class="card-body">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2">
                                                <form class="user">
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-2 col-form-label">Nama
                                                                Kegiatan</label>
                                                            <div class="col-10">
                                                                <input type="text" class="form-control" id="staticEmail"
                                                                    placeholder="Nama Kegiatan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail"
                                                                class="col-2 col-form-label">Tanggal Pengajuan</label>
                                                            <div class="col-10">
                                                                <input type="text" class="form-control" id="staticEmail"
                                                                    placeholder="Tanggal Pengajuan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-2 col-form-label">Ketua
                                                                Pelaksana</label>
                                                            <div class="col-10">
                                                                <input type="email" class="form-control"
                                                                    id="staticEmail" placeholder="Ketua Pelaksana">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail"
                                                                class="col-2 col-form-label">Deskripsi</label>
                                                            <div class="col-10">
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" rows="3"
                                                                    placeholder="deskripsi"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-2 col-form-label">Upload
                                                                Berkas</label>
                                                            <div class="col-10">
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1"
                                                                    placeholder="Upload Berkas">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail"
                                                                class="col-2 col-form-label">Tanggal Mulai
                                                                Kegiatan</label>
                                                            <div class="col-10">
                                                                <input type="email" class="form-control"
                                                                    id="staticEmail" placeholder="dd-mm-yyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail"
                                                                class="col-2 col-form-label">Tanggal Selesai
                                                                Kegiatan</label>
                                                            <div class="col-10">
                                                                <input type="email" class="form-control"
                                                                    id="staticEmail" placeholder="dd-mm-yyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="text-center">
                                                        <a href="<?= base_url('index.php/Dashboard') ?>"
                                                            class="btn btn-info col-4">
                                                            Tambah Pengajuan
                                                        </a>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-info" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets') ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets') ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets') ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets') ?>/js/demo/chart-pie-demo.js"></script>

</body>

</html>