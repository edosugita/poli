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
                        <h5>Data Nama Dokter</h5>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahObat"><i class="anticon anticon-plus m-r-20"></i> Tambah Dokter</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>NPA</th>
                                        <th>Nama</th>
                                        <th>No Telephone</th>
                                        <th>Spesialis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>010</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>203875</td>
                                        <td>Dr.Kenny Samitra</td>
                                        <td>081234567890</td>
                                        <td>Poli Anak</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/master/dokter/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH OBAT -->
<div class="modal fade" id="tambahObat">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Dokter</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
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
                        <label for="kode_poli">Spesialis</label>
                        <select class="select2" id="kode_poli" multiple="multiple">
                            <option value="Poli A">Poli A</option>
                            <option value="Poli B">Poli B</option>
                            <option value="Poli C">Poli C</option>
                            <option value="Poli D">Poli D</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-hover" style="border: 1px solid #336CFB; color: #336CFB;" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>