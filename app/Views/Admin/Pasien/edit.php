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
                        <h5>Edit Data Pasien Pendaftar</h5>
                    </div>
                    <hr>
                    <form method="">
                        <div class="form-group">
                            <label for="namaPasien">NIK</label>
                            <input type="number" class="form-control" id="namaPasien" placeholder="ex: 111222333444">
                        </div>
                        <div class="form-group">
                            <label for="namaPasien">Nama Pasien</label>
                            <input type="text" class="form-control" id="namaPasien" placeholder="ex: Ruben Calzoni">
                        </div>
                        <div class="form-group">
                            <label for="namaPoli">Alamat</label>
                            <input type="text" class="form-control" id="namaPoli" placeholder="ex: Jl. Candi Borobudur">
                        </div>
                        <div class="form-group">
                            <label for="namaPoli">No HP</label>
                            <input type="text" class="form-control" id="namaPoli" placeholder="ex: 082233445566">
                        </div>
                        <div class="form-group">
                            <label for="tindakan1">Poli</label>
                            <select class="select2" name="tindakan1">
                                <option value="AP">Poli Anak</option>
                                <option value="NL">Poli Gigi</option>
                                <option value="BN">Poli Umum</option>
                                <option value="HL">Poli Bedah</option>
                                <option value="HL">Poli Bedah Syaraf</option>
                                <option value="HL">Poli Gizi</option>
                                <option value="HL">Poli Gigi Endodonsi</option>
                                <option value="HL">Poli Gigi Orthodonti</option>
                                <option value="HL">Poli Jantung</option>
                                <option value="HL">Poli Jiwa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="namaPoli">Keluhan</label>
                            <input type="text" class="form-control" id="namaPoli" placeholder="ex: Sakit Pinggang">
                        </div>
                        <div class="form-group">
                            <label for="jenisKelamin">Status</label>
                            <select id="jenisKelamin" class="form-control">
                                <option value="In">In</option>
                                <option value="Out">Out</option>
                            </select>
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