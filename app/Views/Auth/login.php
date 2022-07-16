<?=
$this->extend('Layouts/Auth/templates');
$this->section('content');
?>

<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        display: flex;
        height: 90vh
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }

    .header-login {
        text-align: center;
        background: #dfecff;
        padding: 20px
    }

    .header-login h1 {
        color: #3f87f5;
    }
</style>
<section class="vh-100">
    <div class="header-login">
        <h1>Sistem Login PoliKlinik RSUD Jombang</h1>
    </div>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="<?= base_url('assets/images/vector/background.png') ?>" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="<?= base_url('/login') ?>" method="post">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3 m-b-10">Login</p>
                    </div>
                    <!-- Alert -->
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
                    <div class="form-group">
                        <label class="font-weight-semibold">Username:</label>
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-user"></i>
                            <input type="text" class="form-control" placeholder="ex: Poli Anak" name="nama" value="<?= set_value('nama') ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-semibold">Password:</label>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-lock"></i>
                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                            <i class="suffix-icon anticon anticon-eye"></i>
                        </div>
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('password')) : null ?>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="font-size-13 text-muted">
                                <button class="btn btn-primary">Login</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
