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
                        <h5>Edit Data Obat</h5>
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
                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <b>Gagal&nbsp;</b>menambah data, mohon mengisi form dengan benar!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?= site_url('/master/obat/add') ?>" method="post">
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
                            <input type="number" class="form-control <?= (isset($validation)) ? ($validation->hasError('harga')) ? 'is-invalid' : null : null ?>" name="harga" id="harga" placeholder="ex: 100000" value="<?= set_value('harga'); ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('harga')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <select class="select2" name="satuan">
                                <option value="pcs">PCS</option>
                                <option value="btl">BTL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penggunaan_obat">Penggunaan Obat</label>
                            <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('penggunaan_obat')) ? 'is-invalid' : null : null ?>" name="penggunaan_obat" id="penggunaan_obat" placeholder="ex: 1x Sehari" value="<?= set_value('penggunaan_obat'); ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('penggunaan_obat')) : null ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30">
                                <div class="row">
                                    <button class="btn m-r-10 btn-hover" style="border: 1px solid #336CFB; color: #336CFB;">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>