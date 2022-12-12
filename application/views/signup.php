<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets')?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center mb-2">
                                        <h1 class="h4 text-gray-900 mb-2">Sign Up!</h1>
                                        <img class="img" style="width: 500px; height: 150px" src="<?= base_url('assets')?>/img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-2 col-form-label">Nama</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" id="staticEmail" placeholder="Nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-2 col-form-label">Username</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" id="staticEmail" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-2 col-form-label">Email</label>
                                                <div class="col-10">
                                                    <input type="email" class="form-control" id="staticEmail" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-2 col-form-label">Password</label>
                                                <div class="col-10">
                                                    <input type="password" class="form-control" id="staticEmail" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <a href="<?= base_url('index.php/admin/home')?>" class="btn btn-info btn-user col-7">
                                                Sign Up
                                            </a>
                                        </div>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Login to Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets')?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets')?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets')?>/js/sb-admin-2.min.js"></script>

</body>

</html>