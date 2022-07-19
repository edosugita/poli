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
                        <h5>Tindakan Pasien <b><?= $dataPasien[0]['nama_pasien'] ?></b> </h5>
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

                    <form action="<?= base_url('tindakan/add/' . $dataPasien[0]['no_rekam_medis']) ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="text" class="form-control" hidden id="dokter" name="dokter">
                        <div class="form-group">
                            <label>No Rekam Medis</label>
                            <input type="text" class="form-control" readonly value="<?= $dataPasien[0]['no_rekam_medis'] ?>" name="norm">
                        </div>
                        <div class="form-group">
                            <label>Kode Poli</label>
                            <input type="text" class="form-control" readonly value="<?= $dataPasien[0]['kode'] ?>" name="kodepoli">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Penyakit</label>
                            <textarea class="form-control <?= (isset($validation)) ? ($validation->hasError('deskripsi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Penyakit yang bisa ditangani" name="deskripsi" value="<?= set_value('deskripsi') ?>"></textarea>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('deskripsi')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tindakan</label>
                            <select class="select2" id="tindakan" onchange="hargaTindakan()" name="tindakan">
                                <option selected value="pt">--- Pilih Tindakan Pasien ---</option>
                                <?php foreach ($dataTindakan as $data) : ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                                <option value="">Tidak Ada Tindakan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga Tindakan</label>
                            <input type="text" class="form-control" id="HargaTindakan" readonly name="htindakan">
                        </div>
                        <div class="form-group">
                            <label>Obat</label>
                            <select class="select2" id="obat" onchange="hargaObat()" name="obat">
                                <option selected value="po">--- Pilih Obat ---</option>
                                <?php foreach ($dataObat as $data) : ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                                <option value="">Tidak Ada Obat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga Obat</label>
                            <input type="text" class="form-control" id="HargaObat" readonly name="hobat">
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30">
                                <div class="row">
                                    <button type="button" class="btn m-r-10 btn-hover" style="border: 1px solid #336CFB; color: #336CFB;">Cancel</button>
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