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
                        <h5>Edit Data Dokter</h5>
                    </div>
                    <hr>
                    <form method="POST" action="<?= site_url('master/dokter/edit') ?>">
                        <div class="form-group">
                            <label for="kodeobat">NPA</label>
                            <input type="text" class="form-control" id="kodeobat" placeholder="ex: 203875">
                        </div>
                        <div class="form-group">
                            <label for="namaobat">Nama</label>
                            <input type="text" class="form-control" id="namaobat" placeholder="ex: Dr.Kenny Samitra">
                        </div>
                        <div class=" form-group">
                            <label for="hargaobat">No Telephone</label>
                            <input type="text" class="form-control" id="hargaobat" placeholder="ex: 081234567890">
                        </div>
                        <div class="form-group">
                            <label>Spesialis</label>
                            <select class="select2" multiple="multiple">
                                <option value="Poli A">Poli A</option>
                                <option value="Poli B">Poli B</option>
                                <option value="Poli C">Poli C</option>
                                <option value="Poli D">Poli D</option>
                            </select>
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