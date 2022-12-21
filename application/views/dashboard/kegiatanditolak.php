<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CI 3 - Dashboard</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="<?= base_url('/dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard <sup>admnistrator</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dashboard') ?>">
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
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dashboard'); ?>/tambahuser">
                    <i class="fas fa-cog"></i>
                    <span>Tambah User</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dashboard'); ?>/listuser">
                    <i class="fas fa-cog"></i>
                    <span>List User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dashboard'); ?>/kegiatanmasuk">
                    <i class="fas fa-cog"></i>
                    <span>Kegiatan Masuk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dashboard'); ?>/kegiatanditerima">
                    <i class="fas fa-cog"></i>
                    <span>Kegiatan Diterima</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/dashboard'); ?>/kegiatanditolak">
                    <i class="fas fa-cog"></i>
                    <span>Kegiatan Ditolak</span>
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
                <a class="nav-link" href="<?= base_url('/') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sign Up</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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
                        <h1 class="h3 mb-0 text-gray-800">Kegiatan Diterima</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6">
                            <div class="card">
                                <div class="card-header bg-info">

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Nama Kegiatan</th>
                                                    <th class="text-center">Ketua Pelaksana</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Nama Kegiatan</td>
                                                    <td class="text-center">Nama Ketua</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">Nama Kegiatan</td>
                                                    <td class="text-center">Nama Ketua</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">Nama Kegiatan</td>
                                                    <td class="text-center">Nama Ketua</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">Nama Kegiatan</td>
                                                    <td class="text-center">Nama Ketua</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">Nama Kegiatan</td>
                                                    <td class="text-center">Nama Ketua</td>
                                                </tr>

                                            </tbody>
                                        </table>
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