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
                        <h5>Edit Data Tindakan</h5>
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

                    <form action="<?= base_url('/master/tindakan/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="kode_poli">Kode Poli</label>
                            <select class="select2" id="kode_poli" name="kode_poli">
                                <?php foreach ($dataPoli as $poli) : ?>
                                    <option value="<?= $poli['kode'] ?>"><?= $poli['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Tindakan</label>
                            <input type="text" style="text-transform:uppercase" class="form-control <?= (isset($validation)) ? ($validation->hasError('kode')) ? 'is-invalid' : NULL : NULL ?>" autofocus value="<?= set_value('kode'); ?>" id="kode" name="kode" placeholder="ex: KD01">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('kode')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Tindakan</label>
                            <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : NULL : NULL ?>" autofocus value="<?= set_value('nama'); ?>" id="nama" name="nama" placeholder="ex: Paramex">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="number" class="form-control <?= (isset($validation)) ? ($validation->hasError('tarif')) ? 'is-invalid' : NULL : NULL ?>" value="<?= set_value('tarif'); ?>" id="tarif" name="tarif" placeholder="ex: 100.000">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tarif')) : null ?>
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