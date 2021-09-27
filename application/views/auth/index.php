<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:45 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="assets/css/themify-icons/themify-icons.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="hold-transition login-page sty1">
  <div class="row justify-content-center">
    <div class="col-xl-4 col-md-4 col-sm-8 col-12">
      <?= $this->session->flashdata('akun') ?>
      <div class="card mt-3">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-md-12 p-5">

              <h3 class="h3 mb-0 font-weight-bold">Masuk ke Dashboard</h3>
              <p class="text-muted mt-1 mb-4">Masukkan alamat email dan password untuk mengakses dashboard</p>

              <form action="" class="authentication-form" method="POST">
                <div class="form-group">
                  <label class="form-control-label">Alamat Email</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i data-feather="mail" class="icon-dual"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan alamat email Anda disini" autocomplete="off">
                  </div>
                  <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class="form-group mt-4">
                  <label class="form-control-label">Password</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i data-feather="lock" class="icon-dual"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password Anda disini">
                  </div>
                  <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                </div>


                <div class="form-group mb-0 text-center">
                  <button class="btn btn-primary btn-block" type="submit"> Masuk
                  </button>
                </div>
              </form>

            </div>
          </div>

        </div> <!-- end card-body -->
      </div>
      <!-- end card -->

      <div class="row mt-3">
        <div class="col-12 text-center">
          <p class="text-muted">Belum memiliki akun? <a href="<?= base_url('auth/registration') ?>" class="text-primary font-weight-bold ml-1">Buat akun, klik disini</a></p>
        </div> <!-- end col -->
      </div>
      <!-- end row -->

    </div> <!-- end col -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- v4.0.0-alpha.6 -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- template -->
  <script src="assets/js/niche.html"></script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:45 GMT -->

</html>