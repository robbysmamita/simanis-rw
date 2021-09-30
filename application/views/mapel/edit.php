<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Mata Pelajaran</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Data Mata Pelajaran</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <h4 class="text-black">Edit Data Mata Pelajaran</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="kode_mapel" id="kode_mapel" value="<?= $mapel['kode_mapel'] ?>" <label class="control-label" for="mata_pelajaran">Mata Pelajaran</label>
                        <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" value="<?= $mapel['mata_pelajaran'] ?>" aria-describedby="helpBlock2">
                        <?= form_error('mata_pelajaran', '<small class="text-danger">', '</small>') ?>
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