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
                        <h5>Tindakan Pasien</h5>
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
                    <div class="m-t-10">
                        <form method="">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="kodetindakan">Nomor RM</label>
                                        <input type="text" class="form-control" id="norm" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="namatindakan">Nama Poli</label>
                                        <input type="text" class="form-control" id="kode-poli" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tariftindakan">Tanggal</label>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-calendar"></i>
                                            <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepoli">Dokter</label>
                                        <select class="select2" id="dokter">
                                            <option value="" selected>--- Pilih Nama Dokter ---</option>
                                            <?php foreach ($dataDokter as $data) : ?>
                                                <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Antrian</label>
                                        <select class="select2" id="antrian" onchange="data_pasien()">
                                            <option selected>--- Pilih No Antrian ---</option>
                                            <?php foreach ($dataAntrian as $data) : ?>
                                                <option value="<?= $data['no_antrian'] ?>"><?= $data['no_antrian'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tindakan1">Nama Pasien</label>
                                        <input type="text" class="form-control" id="nama" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tariftindakan">Umur</label>
                                        <input type="text" class="form-control" id="umur" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepoli">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button id="ttindakan" class="btn btn-primary" onclick="urlTindakan()"><i class="anticon anticon-plus m-r-20"></i> Tindakan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>