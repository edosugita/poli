<?=
$this->extend('Layouts/Admin/templates');
$this->section('content');
?>

<div class="main-content">
    <div class="row">
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
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                            <i class="anticon anticon-team"></i>
                        </div>
                        <div class="m-l-15">
                            <?php foreach ($countPasien as $data) : ?>
                                <h2 class="m-b-0"><?= $data['no_rekam_medis'] ?></h2>
                            <?php endforeach; ?>
                            <p class="m-b-0 text-muted">Pasien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-medicine-box"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">+ 17.21%</h2>
                            <p class="m-b-0 text-muted">Penanganan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                            <i class="anticon anticon-audit"></i>
                        </div>
                        <div class="m-l-15">
                            <?php foreach ($countPoli as $data) : ?>
                                <h2 class="m-b-0"><?= $data['id'] ?></h2>
                            <?php endforeach; ?>
                            <p class="m-b-0 text-muted">Poli</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                            <i class="anticon anticon-wallet"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">1,832</h2>
                            <p class="m-b-0 text-muted">Pendapatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Grafik Pasien</h5>
                        <div>
                            <div class="btn-group">
                                <button class="btn btn-default active">
                                    <span>Month</span>
                                </button>
                                <button class="btn btn-default">
                                    <span>Year</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-50" style="height: 330px">
                        <canvas class="chart" id="revenue-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="m-b-0">Pendapatan</h5>
                    <div class="m-v-60 text-center" style="height: 200px">
                        <canvas class="chart" id="customers-chart"></canvas>
                    </div>
                    <div class="row border-top p-t-25">
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">350</h4>
                                        <p class="m-b-0 muted">New</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">450</h4>
                                        <p class="m-b-0 muted">Returning</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0">100</h4>
                                        <p class="m-b-0 muted">Others</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Aktifitas Pasien</h5>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tgl Lahir</th>
                                        <th>Tgl Kunjungan</th>
                                        <th>Poli</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="<?= base_url('assets/images/others/thumb-9.jpg') ?>" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Gray Sofa</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>10/10/2020</td>
                                        <td>09:15-09:45am</td>
                                        <td>Poli Anak</td>
                                        <td>Mumps Stage II</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="<?= base_url('assets/images/others/thumb-10.jpg') ?>" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Gray Sofa</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>10/10/2020</td>
                                        <td>09:15-09:45am</td>
                                        <td>Poli Anak</td>
                                        <td>Mumps Stage II</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="<?= base_url('assets/images/others/thumb-11.jpg') ?>" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Wooden Rhino</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>10/10/2020</td>
                                        <td>09:15-09:45am</td>
                                        <td>Poli Anak</td>
                                        <td>Mumps Stage II</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="<?= base_url('assets/images/others/thumb-12.jpg') ?>" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Red Chair</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>10/10/2020</td>
                                        <td>09:15-09:45am</td>
                                        <td>Poli Anak</td>
                                        <td>Mumps Stage II</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="<?= base_url('assets/images/others/thumb-13.jpg') ?>" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Wristband</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>10/10/2020</td>
                                        <td>09:15-09:45am</td>
                                        <td>Poli Anak</td>
                                        <td>Mumps Stage II</td>
                                    </tr>
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