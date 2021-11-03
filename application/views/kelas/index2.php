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
        <?php if ($this->session->flashdata('kelassiswa')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Telah <strong><?= $this->session->flashdata('kelassiswa') ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
        <?php endif ?>
        <div class="card">
            <div class="card-body">
                <h4 class="text-black">Data Kelas</h4>
                <p>Data Kelas</p>
              
                <div class="table-responsive">
                    <table id="datatablestab" class="table table-bordered table-hover" data-name="cool-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <!-- <th>Form Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1
                            ?>
                            <?php foreach ($kelas as $k) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k['kelas'] ?></td>
                                    <td><?= $k['category'] ?></td>
                                    
                                </tr>
                                <!-- Modal -->
                                <!-- <div class="modal fade" id="modal_delete<?= $k['kode_kelas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data <?= $k['kelas'] ?> </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin ingin menghapus data ini <?= $k['kelas'] ?> ?
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div> -->
                            <?php endforeach ?>

                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Category</th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->