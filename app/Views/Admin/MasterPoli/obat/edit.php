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
                        <h5>Edit Data Obat</h5>
                    </div>
                    <hr>
                    <form method="POST" action="<?= site_url('master/obat/' . $dataObat['id'] . '/edit') ?>">
                        <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group">
                            <label for="kode">Kode Obat</label>
                            <input type="text" class="form-control" name="kode" id="kode" placeholder="ex: KD01" value="<?= $dataObat['kode'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Obat</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="ex: Paramex" value="<?= $dataObat['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Obat</label>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="ex: 100.000" value="<?= $dataObat['harga'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" name="satuan" id="satuan" placeholder="ex: PCS" value="<?= $dataObat['satuan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="penggunaan_obat">Penggunaan Obat</label>
                            <input type="text" class="form-control" name="penggunaan_obat" id="penggunaan_obat" placeholder="ex: 1x Sehari" value="<?= $dataObat['penggunaan_obat'] ?>">
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