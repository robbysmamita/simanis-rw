<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Guru</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Data Guru</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <h4 class="text-black">Tambah Data Guru</h4>
                    <div class="form-group">
                        <label class="control-label" for="Nama_guru">Nama guru</label>
                        <input type="text" class="form-control" name="Nama_guru" id="Nama guru" aria-describedby="helpBlock2">
                        <?= form_error('Nama_guru', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="No_induk_guru">No Induk</label>
                        <input type="text" class="form-control" name="No_induk_guru" id="No_induk_guru" aria-describedby="helpBlock2">
                        <?= form_error('No_induk_guru', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Jenis_Kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="Jenis_Kelamin" id="Jenis_Kelamin">
                            <option value=""></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('Jenis_Kelamin', '<small class="text-danger">', '</small>') ?>
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