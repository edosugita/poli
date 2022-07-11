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
                        <h5>Data Nama Obat</h5>
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
                                <a class="btn btn-primary" href="<?= base_url('/master/obat/add') ?>"><i class="anticon anticon-plus m-r-20"></i> Tambah Obat</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>Kode Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Harga</th>
                                        <th>Satuan</th>
                                        <th>Penggunaan Obat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataObat as $obat) : ?>
                                        <tr>
                                            <td><?= $obat["kode"] ?></td>
                                            <td><?= $obat["nama"] ?></td>
                                            <td>Rp. <?= number_format($obat['harga'], 2, ',', '.') ?></td>
                                            <td><?= strtoupper($obat["satuan"]) ?></td>
                                            <td><?= $obat["penggunaan_obat"] ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href='<?= base_url('master/obat/' . $obat['id'] . '/edit') ?>'>
                                                    <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                                </a>
                                                <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                    <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                                </button>
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