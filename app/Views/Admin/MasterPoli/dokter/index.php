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
                                <a class="btn btn-primary" href="<?= base_url('/master/dokter/add') ?>"><i class="anticon anticon-plus m-r-20"></i> Tambah Dokter</a>
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

<?= $this->endSection(); ?>