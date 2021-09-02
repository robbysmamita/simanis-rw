<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Kelas</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Data Kelas</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <h4 class="text-black">Tambah Data Kelas</h4>
                    <div class="form-group">
                        <label class="control-label" for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" aria-describedby="helpBlock2">
                        <?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                        </select>
                        <?= form_error('category', '<small class="text-danger">', '</small>') ?>
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