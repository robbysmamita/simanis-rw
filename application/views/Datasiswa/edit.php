<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Siswa</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Data Siswa</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <h4 class="text-black">Edit Data Siswa</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $siswa['id'] ?>" <label class="control-label" for="Nama_Siswa">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="<?= $siswa['nama_siswa'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('nama_siswa', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="No_induk_siswa">No Induk</label>
                        <input type="text" class="form-control" name="No_induk_siswa" id="No_induk_siswa" value="<?= $siswa['no_induk_siswa'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('No_induk_siswa', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Jenis_Kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="Jenis_Kelamin" id="Jenis_Kelamin" value="<?= $siswa['jenis_kelamin'] ?>">
                            <option value=""></option>
                            <?php if ($siswa['jenis_kelamin'] == "Laki-Laki") : ?>
                                <option value="Laki-Laki" selected>Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            <?php else : ?>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan" selected>Perempuan</option>
                            <?php endif ?>
                        </select>
                        <?= form_error('Jenis_Kelamin', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Alamat">Alamat</label>
                        <input type="text" class="form-control" name="Alamat" id="Alamat" value="<?= $siswa['alamat'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('Alamat', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= $siswa['email'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="no_telp">No Telepon</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= $siswa['no_telp'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('no_telp', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="no_telp_orangtua">No Telepon Orangtua</label>
                        <input type="text" class="form-control" name="no_telp_orangtua" id="no_telp_orangtua" value="<?= $siswa['no_telp_orangtua'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('no_telp_orangtua', '<small class="text-danger">', '</small>') ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->