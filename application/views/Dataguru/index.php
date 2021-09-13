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
                                <th>Action</th>
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
                                    <td>
                                        <a class="btn btn-warning" href="<?= base_url('dataguru/edit/') . $s['id'] ?>">Edit</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" onclick="klik(<?= $s['id'] ?>)"> Hapus</button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin ingin menghapus data ini ?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="dataguru/delete/id_hapus" method="POST">
                                                    <!-- <input type="text" id="id_hapus"> -->
                                                    <button type="submit" class="btn btn-danger" value="delete">Hapus</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function klik(data) {
                                        var a = data
                                        var b = document.getElementById('id_hapus').value = a
                                    }
                                </script>
                            <?php endforeach ?>
                            <!-- Modal -->
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