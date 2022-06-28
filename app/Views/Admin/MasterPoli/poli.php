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
                        <h5>Data Nama Poli</h5>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPoli"><i class="anticon anticon-plus m-r-20"></i> Tambah Poli</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>Kode Poli</th>
                                        <th>Nama Poli</th>
                                        <th>Tarif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>006</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>007</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>008</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>009</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>010</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>011</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/master-poli/edit-poli') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
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

<!-- MODAL TAMBAH POLI -->
<div class="modal fade" id="tambahPoli">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Poli</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
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