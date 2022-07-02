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
                        <h5>Data Nama Poli</h5>
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
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPoli"><i class="anticon anticon-plus m-r-20"></i> Tambah Poli</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Poli</th>
                                        <th>Nama Poli</th>
                                        <th>Tarif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($dataPoli as $data) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data['kode'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td>Rp. <?= number_format($data['tarif'], 2, ',', '.') ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/poli/' . $data['id'] . '/edit') ?>">
                                                    <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                    <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                                </a>
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

<!-- MODAL TAMBAH POLI -->
<div class="modal fade" id="tambahPoli">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Poli</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form action="<?= base_url('/master/poli/') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Poli</label>
                        <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('kode')) ? 'is-invalid' : null : null ?>" name="kode" placeholder="ex: KD01" value="<?= set_value('kode'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('kode')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Poli</label>
                        <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" name="nama" placeholder="ex: Poli Anak" value="<?= set_value('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tarif Poli</label>
                        <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('tarif')) ? 'is-invalid' : null : null ?>" name="tarif" placeholder="ex: 100.000" value="<?= set_value('tarif'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('tarif')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control <?= (isset($validation)) ? ($validation->hasError('password')) ? 'is-invalid' : null : null ?>" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('password')) : null ?>
                        </div>
                    </div>
                    <div class="form-group m-b-50">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control <?= (isset($validation)) ? ($validation->hasError('cpassword')) ? 'is-invalid' : null : null ?>" name="cpassword" placeholder="Confirm Password" value="<?= set_value('cpassword'); ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('cpassword')) : null ?>
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

<?= $this->endSection(); ?>