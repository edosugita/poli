<?=
$this->extend('Layouts/Auth/templates');
$this->section('content');
?>

<div class="row no-gutters h-100 full-height">
    <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url('<?= base_url('assets/images/vector/background.jpg') ?>');">
        <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
            <div>
                <img src="<?= base_url('assets/images/logo/logo-white.png') ?>" alt="">
            </div>
            <div>
                <h1 class="text-white m-b-20 font-weight-normal">Login Poliklinik</h1>
                <p class="text-white font-size-16 lh-2 w-80 opacity-08">Menjadi Rumah Sakit Rujukan Terdepan Pilihan Utama Masyarakat Dengan Layanan Paripurna Melalui Sistem Pendidikan Kesehatan yang Terintegrasi.</p>
            </div>
            <div class="d-flex justify-content-between">
                <span class="text-white">© <?= date('Y') ?> RSUD Jombang</span>
            </div>
        </div>
    </div>
    <div class="col-lg-8 bg-white">
        <div class="container h-100">
            <div class="row no-gutters h-100 align-items-center">
                <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                    <h2>Login</h2>
                    <p class="m-b-30">Enter your credential to get access</p>
                    <!-- Start Alert -->
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
                    <!-- End Alert -->
                    <form action="<?= base_url('/login') ?>" method="post">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">Username</label>
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-user"></i>
                                <input type="text" class="form-control" placeholder="ex: polianak" name="nama" value="<?= set_value('nama') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="password">Password</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-lock"></i>
                                <input type="password" class="form-control" id="form-pw" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                                <i class="suffix-icon far fa-eye-slash" id="icon-pw" style="cursor: pointer;"></i>
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('password')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-end">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>