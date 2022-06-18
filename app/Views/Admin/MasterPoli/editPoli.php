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
                        <h5>Edit Data Poli</h5>
                    </div>
                    <hr>
                    <form method="">
                        <div class="form-group">
                            <label for="kodepoli">Kode Poli</label>
                            <input type="text" class="form-control" id="kodepoli" placeholder="ex: KD01">
                        </div>
                        <div class="form-group">
                            <label for="namapoli">Nama Poli</label>
                            <input type="text" class="form-control" id="namapoli" placeholder="ex: Poli Anak">
                        </div>
                        <div class="form-group">
                            <label for="tarifpoli">Tarif Poli</label>
                            <input type="text" class="form-control" id="tarifpoli" placeholder="ex: 100.000">
                        </div>
                        <div class="form-group m-b-50">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
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