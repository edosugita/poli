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
                        <h5>Pendapatan</h5>
                        <button class="btn btn-primary"><i class="anticon anticon-printer m-r-20"></i>Cetak</button>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-between">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#filterData">Filter</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPendapatan"><i class="anticon anticon-plus m-r-20"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Poli</th>
                                        <th>Nominal</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
                                                <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Poli Anak</td>
                                        <td>100.000</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/keuangan/edit-pendapatan') ?>'">
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

<!-- /////////////////////////////////// -->
<!-- MODAL TAMBAH PENDAPATAN -->
<!-- /////////////////////////////////// -->
<div class="modal fade" id="tambahPendapatan">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Pendapatan</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaPendapatan">Nama Pendapatan</label>
                        <input type="text" class="form-control" id="namaPendapatan" placeholder="ex: Poli Anak">
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="text" class="form-control" id="nominal" placeholder="ex: 1.000.000">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                        </div>
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

<!-- /////////////////////////////////// -->
<!-- MODAL FILTER -->
<!-- /////////////////////////////////// -->
<div class="modal fade" id="filterData">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Filter Data</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Range Tanggal</label>
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control datepicker-input" name="start" placeholder="From">
                            <span class="p-h-10">to</span>
                            <input type="text" class="form-control datepicker-input" name="end" placeholder="To">
                        </div>
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