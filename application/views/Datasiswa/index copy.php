<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1></h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Data Siswa</li>
        </ol>
    </div>
</div>
<!-- /.content -->
<div class="content">
    <?php if ($this->session->flashdata('siswa')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Telah <strong><?= $this->session->flashdata('siswa') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
    <?php endif ?>
    <div class="card">
        <div class="card-body">
            <h4 class="text-black"> Data Siswa</h4>
            <p>Data siswa</p>
            <a href="<?= base_url('Datasiswa/tambah') ?>" class="btn btn-primary float-right">Tambah</a>
            <div class="table-responsive">
                <table id="datatablestab" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Induk</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat </th>
                            <th>Email</th>
                            <th>No Telpon</th>
                            <th> No Telepon Orangtua</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        ?>
                        <?php foreach ($siswa as $s) : ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $s['nama_siswa'] ?></td>
                                <td><?= $s['no_induk_siswa'] ?></td>
                                <td><?= $s['jenis_kelamin'] ?></td>
                                <td><?= $s['alamat'] ?></td>
                                <td><?= $s['email'] ?></td>
                                <td><?= $s['no_telp'] ?></td>
                                <td><?= $s['no_telp_orangtua'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Induk</th>
                            <th>JK</th>
                            <th>Email</th>
                            <th>No Telp</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->