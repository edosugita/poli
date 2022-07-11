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
                        <h5>Data Nama Tindakan</h5>
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
                                <a class="btn btn-primary" href="<?= base_url('/master/tindakan/add') ?>"><i class="anticon anticon-plus m-r-20"></i> Tambah Tindakan</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>Kode Tindakan</th>
                                        <th>Nama Tindakan</th>
                                        <th>Harga</th>
                                        <th>Kode Poli</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataTindakan as $tindakan) : ?>
                                        <tr>
                                            <td><?= $tindakan['kode'] ?></td>
                                            <td><?= $tindakan['nama'] ?></td>
                                            <td>Rp. <?= number_format($tindakan['tarif'], 2, ',', '.') ?></td>
                                            <td><?= $tindakan['kode_poli'] ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href='<?= site_url('master/tindakan/' .  $tindakan['id'] . '/edit') ?>'>
                                                    <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                    <i class="anticon anticon-delete" style="color: #BF0603;"></i>
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