<?php
// Cek apakah terdapat session nama message
if ($this->session->flashdata('message')) { // Jika ada
    echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>'; // Tampilkan pesannya
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SIMANIS Login</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />
</head>


<body class="bg-login">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5">
                                    <div class="text-center">
                                        <img src="assets/images/logo-icon.png" width="80" alt="">
                                        <h3 class="mt-4 font-weight-bold">Selamat Datang</h3>
                                    </div>

                                    <div class="input-group shadow-sm rounded mt-5">


                                    </div>
                                    <div class="login-separater text-center">

                                    </div>
                                    <div class="form-group mt-4">
                                        <form method="post" action="<?php echo base_url('homeguru'); ?>">
                                            <label>Nomor Induk</label>
                                            <input type="text" class="form-control" placeholder="Masukkan NIS/NIP" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required />
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                                <label class="custom-control-label" for="customSwitch1">Ingat Saya</label>
                                            </div>
                                        </div>
                                        <div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Lupa Password?</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-3 w-100">
                                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        <button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                                        </button>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <p class="mb-0">Belum punya akun? <a href="authentication-register.html">Daftar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>