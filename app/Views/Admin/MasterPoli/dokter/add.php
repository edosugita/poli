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
                        <h5>Tambah Data Dokter</h5>
                    </div>
                    <hr>
                    <?php if( !empty( session()->getFlashdata('fail') ) ): ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <?= session()->getFlashdata('fail'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?= site_url('master/dokter') ?>">
                        <div class="form-group">
                            <label for="nomor_induk">Nomor Induk</label>
                            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('nomor_induk')) ? 'is-invalid' : null ?>" id="nomor_induk" name="nomor_induk" placeholder="ex: 203875" value="<?= set_value('nomor_induk') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('no_telp')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('nama')) ? 'is-invalid' : null ?>" id="nama" name="nama" placeholder="ex: Dr.Kenny Samitra" value="<?= set_value('nama') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('no_telp')) ? 'is-invalid' : null ?>" id="no_telp" name="no_telp" placeholder="ex: 081234567890" value="<?= set_value('no_telp') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('no_telp')) : null ?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label for="spesialis">Spesialis</label>
                            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('spesialis')) ? 'is-invalid' : null ?>" id="spesialis" name="spesialis" placeholder="ex: Gigi" value="<?= set_value('spesialis') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('spesialis')) : null ?>
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