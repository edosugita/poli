<?=
$this->extend('Layouts/Auth/templates');
$this->section('content');
?>

<div class="container d-flex h-100">
    <div class="row align-items-center w-100">
        <div class="col-md-7 col-lg-5 m-h-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-30">
                        <h2 class="m-b-0">Sign In</h2>
                    </div>
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
                                <?= $validation->listErrors(); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('/login') ?>" method="post">
                        <div class="form-group">
                            <label class="font-weight-semibold">Nama Poli:</label>
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-user"></i>
                                <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" placeholder="ex: Poli Anak" name="nama" value="<?= set_value('nama') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold">Password:</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-lock"></i>
                                <input type="password" class="form-control <?= (isset($validation)) ? ($validation->hasError('password')) ? 'is-invalid' : null : null ?>" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('password')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-end">
                                <span class="font-size-13 text-muted">
                                    <button class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>