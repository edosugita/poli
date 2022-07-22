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
                            <form action="<?= site_url('tindakan') ?>" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="kodetindakan">Nomor RM</label>
                                            <input type="text" class="form-control" name="no_rm" id="norm" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="namatindakan">Nama Poli</label>
                                            <input type="text" class="form-control" id="kode-poli" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodepoli">Dokter</label>
                                            <select class="select2" name="id_dokter" id="dokter">
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
                                            <select class="select2" id="antrian" name="id_antrian" onchange="data_pasien()">
                                                <option selected>--- Pilih No Antrian ---</option>
                                                <?php foreach ($dataAntrian as $data) : ?>
                                                    <option value="<?= $data['id_antrian'] ?>"><?= $data['no_antrian'] ?></option>
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
                                <div class="row m-t-30">
                                    <div class="col-12 d-flex p-h-30">
                                        <div class="row">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#list-tindakan-modal"><i
                                                        class="anticon anticon-plus m-r-20"></i> Input Tindakan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Tarif</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tindakan-cart">
                                    </tbody>
                                </table>

                                <div class="row m-t-30">
                                    <div class="col-12 d-flex p-h-30">
                                        <div class="row">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#list-obat-modal"><i
                                                        class="anticon anticon-plus m-r-20"></i> Input Obat
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="obat-cart">
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tindakan Modal -->
    <div class="modal fade" id="list-tindakan-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Tindakan</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td>Tarif</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="tindakan-modal">
                            <?php foreach($dataTindakan as $tindakan): ?>
                                <tr>
                                    <td><?= $tindakan['kode'] ?></td>
                                    <td><?= $tindakan['nama'] ?></td>
                                    <td><?= $tindakan['tarif'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-add-tindakan-to-cart" data-tindakan-id="<?= $tindakan['id'] ?>">Tambahkan</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Obat Modal -->
    <div class="modal fade" id="list-obat-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Obat</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="obat-modal">
                        <?php foreach($dataObat as $obat): ?>
                            <tr>
                                <td><?= $obat['kode'] ?></td>
                                <td><?= $obat['nama'] ?></td>
                                <td><?= $obat['harga'] ?></td>
                                <td><?= $obat['satuan'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-add-obat-to-cart" data-obat-id="<?= $obat['id'] ?>">Tambahkan</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>