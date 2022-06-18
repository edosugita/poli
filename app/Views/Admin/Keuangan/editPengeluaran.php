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
                        <h5>Edit Data Pengeluaran</h5>
                    </div>
                    <hr>
                    <form method="">
                        <div class="form-group">
                            <label for="kodeobat">Nama Dokumen</label>
                            <input type="text" class="form-control" id="kodeobat" placeholder="ex: Investor">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customfile">Upload Dokumen</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <div class="form-text">Dokumen berupa PDF dengan besar PDF max 10MB</div>
                            </div>
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