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
                        <h5>Data Nama Obat</h5>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahObat"><i class="anticon anticon-plus m-r-20"></i> Tambah Obat</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>Kode Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Harga</th>
                                        <th>Satuan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>006</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>007</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>008</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>009</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>010</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>011</td>
                                        <td>Paramex</td>
                                        <td>100.000</td>
                                        <td>PCS</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-obat') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kodeobat">Kode Obat</label>
                        <input type="text" class="form-control" id="kodeobat" placeholder="ex: KD01">
                    </div>
                    <div class="form-group">
                        <label for="namaobat">Nama Obat</label>
                        <input type="text" class="form-control" id="namaobat" placeholder="ex: Paramex">
                    </div>
                    <div class="form-group">
                        <label for="hargaobat">Harga Obat</label>
                        <input type="text" class="form-control" id="hargaobat" placeholder="ex: 100.000">
                    </div>
                    <div class="form-group">
                        <label for="satuanobat">Satuan</label>
                        <input type="text" class="form-control" id="satuanobat" placeholder="ex: PCS">
                    </div>
                    <div class="form-group">
                        <label for="penggunaanobat">Penggunaan Obat</label>
                        <input type="text" class="form-control" id="penggunaanobat" placeholder="ex: 1x Sehari">
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