<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Jadwal</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Data Jadwal</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <h4 class="text-black">Edit Data Jadwal</h4>
                    <div class="form-group">
                        <label class="control-label" for="nama_hari">Nama Hari</label>
                        <input type="text" class="form-control" name="nama_hari" id="Nama Hari" aria-describedby="helpBlock2">
                        <?= form_error('nama_hari', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="kode_guru">Kode guru</label>
                        <select class="form-control" name='kode_guru'>
                            <?php foreach ($guru as $g): ?>
                            <option value='<?php echo $g ['kode_guru']?>'><?php echo $g ['nama_guru']?> </option>
                            <?php endforeach ?>
                        </select>
                       
                        <?= form_error('kode_guru', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="kode_kelas">Kode kelas</label>
                        <select class="form-control" name='kode_kelas'>
                            <?php foreach ($kelas as $k): ?>
                            <option value='<?php echo $k ['kode_kelas']?>'><?php echo $k ['kelas']?> </option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('kode_kelas', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="kode_mapel">Kode mapel</label>
                        <select class="form-control" name='kode_mapel'>
                            <?php foreach ($mapel as $m): ?>
                            <option value='<?php echo $m ['kode_mapel']?>'><?php echo $m ['mata_pelajaran']?> </option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('kode_mapel', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="mata_pelajaran">Mata pelajaran</label>
                        <input type="text" class="form-control" name="mata_pelajaran" id="Mata pelajaran" aria-describedby="helpBlock2">
                        <?= form_error('mata_pelajaran', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="waktu_mulai">Mulai</label>
                        <input type="date" class="form-control" name="waktu_mulai" id="Waktu mulai" aria-describedby="helpBlock2">
                        <?= form_error('waktu_mulai', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="waktu_akhir">Selesai</label>
                        <input type="date" class="form-control" name="waktu_akhir" id="Waktu akhir" aria-describedby="helpBlock2">
                        <?= form_error('waktu_akhir', '<small class="text-danger">', '</small>') ?>
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