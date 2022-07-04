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
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahObat"><i class="anticon anticon-plus m-r-20"></i> Tambah Obat</button>
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
                                            <td><?= $obat["harga"] ?></td>
                                            <td><?= $obat["satuan"] ?></td>
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

<!-- MODAL TAMBAH OBAT -->
<div class="modal fade" id="tambahObat">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="POST" action="<?= site_url('/master/obat') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode">Kode Obat</label>
                        <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('kode')) ? 'is-invalid' : null : null ?>" name="kode" id="kode" placeholder="ex: KD01" value="<?= set_value('kode'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('kode')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Obat</label>
                        <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" name="nama" id="nama" placeholder="ex: Paramex" value="<?= set_value('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Obat</label>
                        <input type="number" class="form-control <?= (isset($validation)) ? ($validation->hasError('harga')) ? 'is-invalid' : null : null ?>" name="harga" id="harga" placeholder="ex: 100.000" value="<?= set_value('harga'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('harga')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="number" class="form-control <?= (isset($validation)) ? ($validation->hasError('satuan')) ? 'is-invalid' : null : null ?>" name="satuan" id="satuan" placeholder="ex: PCS" value="<?= set_value('satuan'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('satuan')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penggunaan_obat">Penggunaan Obat</label>
                        <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('penggunaan_obat')) ? 'is-invalid' : null : null ?>" name="penggunaan_obat" id="penggunaan_obat" placeholder="ex: 1x Sehari" value="<?= set_value('penggunaan_obat'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('penggunaan_obat')) : null ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-hover" style="border: 1px solid #336CFB; color: #336CFB;" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Tambah Obat-->

<?= $this->endSection(); ?>