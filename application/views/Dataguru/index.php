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
        <?php if ($this->session->flashdata('guru')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Telah <strong><?= $this->session->flashdata('guru') ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
        <?php endif ?>
        <div class="card">
            <div class="card-body">
                <h4 class="text-black">Data Guru</h4>
                <p>Data Guru</p>
                <a href="<?= base_url('Dataguru/tambah') ?>" class="btn btn-primary">Add</a>
                <div class="table-responsive">
                    <table id="datatablestab" class="table table-bordered table-hover" data-name="cool-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Induk</th>
                                <th>Jenis Kelamin</th> 
                                <!-- <th>Edit</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            ?>
                            <?php foreach ($guru as $s) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $s['nama_guru'] ?></td>
                                    <td><?= $s['no_induk_guru'] ?></td>
                                    <td><?= $s['jenis_kelamin'] ?></td>                                    
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                            <!-- <th>No</th>
                                <th>Nama</th>
                                <th>No Induk</th>
                                <th>Jenis Kelamin</th>
                            </tr> -->
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->