<?=
$this->extend('Layouts/Admin/templates');
$this->section('content');
?>

    <div class="main-content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Data Nama Dokter</h5>
                        </div>
                        <hr>
                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <?= session()->getFlashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="row m-b-30">
                            <div class="col-12 d-flex justify-content-end p-h-30">
                                <div class="row">
                                    <a class="btn btn-primary" href="<?= base_url('/master/dokter/add') ?>"><i
                                                class="anticon anticon-plus m-r-20"></i> Tambah Dokter</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-10">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-hover table-borderless">
                                    <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>NPA</th>
                                        <th>Nama</th>
                                        <th>No Telephone</th>
                                        <th>Spesialis</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($dataDokter as $index => $dokter): ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= $dokter['nomor_induk'] ?></td>
                                            <td><?= $dokter['nama'] ?></td>
                                            <td><?= $dokter['no_telp'] ?></td>
                                            <td><?= $dokter['spesialis'] ?></td>
                                            <!--                                            <td><button class="btn btn-dark">Action</button></td>-->
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded"
                                                   href="<?= base_url('/master/dokter/edit') ?>">
                                                    <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>