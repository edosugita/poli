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
                        <h5>Edit Data Tindakan</h5>
                    </div>
                    <hr>
                    <form method="">
                        <div class="form-group">
                            <label for="kodetindakan">Kode Tindakan</label>
                            <input type="text" class="form-control" id="kodetindakan" placeholder="ex: KD01">
                        </div>
                        <div class="form-group">
                            <label for="namatindakan">Nama Tindakan</label>
                            <input type="text" class="form-control" id="namatindakan" placeholder="ex: Paramex">
                        </div>
                        <div class="form-group">
                            <label for="tariftindakan">Tarif</label>
                            <input type="text" class="form-control" id="tariftindakan" placeholder="ex: 100.000">
                        </div>
                        <div class="form-group">
                            <label for="kodepoli">Kode Poli</label>
                            <input type="text" class="form-control" id="kodepoli" placeholder="ex: 1x Sehari">
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