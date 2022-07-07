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
                        <h5>Edit Data Poli</h5>
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
                    <form action="<?= base_url('/master/poli/' . $dataPoli['id']) . '/edit' ?>" method="post">
                        <div class="form-group">
                            <label>Kode Poli</label>
                            <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('kode')) ? 'is-invalid' : null : null ?>" name="kode" placeholder="ex: KD01" value="<?= $dataPoli['kode']; ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('kode')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Poli</label>
                            <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" name="nama" placeholder="ex: Poli Anak" value="<?= $dataPoli['nama']; ?>" id="data" oninput="tampil()">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $dataPoli['username']; ?>" id="hasil" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tarif Poli</label>
                            <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('tarif')) ? 'is-invalid' : null : null ?>" name="tarif" placeholder="ex: 100.000" value="<?= $dataPoli['tarif']; ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tarif')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control <?= (isset($validation)) ? ($validation->hasError('password')) ? 'is-invalid' : null : null ?>" name="password" minlength="3" maxlength="12" placeholder="Password" value="<?= set_value('password') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('password')) : null ?>
                            </div>
                        </div>
                        <div class="form-group m-b-50">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control <?= (isset($validation)) ? ($validation->hasError('cpassword')) ? 'is-invalid' : null : null ?>" name="cpassword" minlength="3" maxlength="12" placeholder="Confirm Password" <?= set_value('cpassword') ?>>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('cpassword')) : null ?>
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

<?= $this->section('js'); ?>
<script src="<?= base_url('assets/js/script.js') ?>"></script>
<?= $this->endSection(); ?>