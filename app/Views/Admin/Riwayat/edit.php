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
                        <h5>Edit Data Rawayat Pasien</h5>
                    </div>
                    <hr>
                    <form method="">
                        <div class="form-group">
                            <label for="namaPasien">Nama Pasien</label>
                            <input type="text" class="form-control" id="namaPasien" placeholder="ex: Wade Warren">
                        </div>
                        <div class="form-group">
                            <label for="jenisKelamin">Jenis Kelamin</label>
                            <select id="jenisKelamin" class="form-control">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="namaPoli">Nama Poli</label>
                            <input type="text" class="form-control" id="namaPoli" placeholder="ex: 100.000">
                        </div>
                        <div class="form-group">
                            <label for="tindakan1">Tindakan 1</label>
                            <select class="select2" name="tindakan1">
                                <option value="AP">Operasi Muka</option>
                                <option value="NL">Angkat Ginjal</option>
                                <option value="BN">Bedah Tangan</option>
                                <option value="HL">Bedah Kaki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tindakan1">Tindakan 1</label>
                            <select class="select2" name="tindakan1">
                                <option value="AP">Operasi Muka</option>
                                <option value="NL">Angkat Ginjal</option>
                                <option value="BN">Bedah Tangan</option>
                                <option value="HL">Bedah Kaki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tindakan2">Tindakan 2</label>
                            <select class="select2" name="tindakan2">
                                <option value="AP">Operasi Muka</option>
                                <option value="NL">Angkat Ginjal</option>
                                <option value="BN">Bedah Tangan</option>
                                <option value="HL">Bedah Kaki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tindakan3">Tindakan 3</label>
                            <select class="select2" name="tindakan3">
                                <option value="AP">Operasi Muka</option>
                                <option value="NL">Angkat Ginjal</option>
                                <option value="BN">Bedah Tangan</option>
                                <option value="HL">Bedah Kaki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tindakan4">Tindakan 4</label>
                            <select class="select2" name="tindakan4">
                                <option value="AP">Operasi Muka</option>
                                <option value="NL">Angkat Ginjal</option>
                                <option value="BN">Bedah Tangan</option>
                                <option value="HL">Bedah Kaki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" aria-label="With textarea" placeholder="ex: Penyakit Dalam"></textarea>
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