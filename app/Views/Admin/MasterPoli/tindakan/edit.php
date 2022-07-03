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
                    <form method="POST" action="<?= site_url('master/tindakan/' . $tindakan['id'] )?>">
                        <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group">
                            <label for="kode">Kode Poli</label>
                            <select class="form-control" id="kode_poli" name="kode_poli">
                                <?php foreach($dataPoli as $poli): ?>
                                    <option <?= $poli['kode'] == $tindakan['kode_poli'] ? 'selected' : '' ?> value="<?= $poli['kode'] ?>"><?= $poli['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Tindakan</label>
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="ex: KD01" value="<?= $tindakan['kode'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Tindakan</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="ex: Paramex" value="<?= $tindakan['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" class="form-control" id="tarif" name="tarif" placeholder="ex: 100.000" value="<?= $tindakan['tarif'] ?>">
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