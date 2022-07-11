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
                        <h5>Data Nama Poli</h5>
                    </div>
                    <hr>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show">
                                <?= session()->getFlashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <?= session()->getFlashdata('fail'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <a class="btn btn-primary" href="<?= base_url('/master/poli/add') ?>"><i class="anticon anticon-plus m-r-20"></i> Tambah Poli</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Poli</th>
                                        <th>Nama Poli</th>
                                        <th>Username</th>
                                        <th>Tarif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($dataPoli as $data) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data['kode'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['username'] ?></td>
                                            <td>Rp. <?= number_format($data['tarif'], 2, ',', '.') ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/poli/' . $data['id'] . '/edit') ?>">
                                                    <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                                </a>
                                                <?php if ($data['status'] == 0) : ?>
                                                    <a href="#" class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                        <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                                    </a>
                                                <?php endif; ?>
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