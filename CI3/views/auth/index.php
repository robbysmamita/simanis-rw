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
        <p class="text-muted">Belum memiliki akun? <a href="<?= base_url() ?>buat-akun" class="text-primary font-weight-bold ml-1">Buat akun, klik disini</a></p>
      </div> <!-- end col -->
    </div>
    <!-- end row -->

  </div> <!-- end col -->
</div>