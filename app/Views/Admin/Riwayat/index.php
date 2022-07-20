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
                        <h5>Data Riwayat Tindakan</h5>
                    </div>
                    <hr>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Poli</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($dataRiwayat as $data) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td>Carter Vetrovs</td>
                                            <td>Poli Anak</td>
                                            <td>Laki-laki</td>
                                            <td>Sakit Pinggang</td>
                                            <td>09:15-09:45am</td>
                                            <td>
                                                <button class="btn btn-icon btn-hover btn-sm btn-rounded" onclick="location.href='<?= base_url('/riwayat/edit') ?>'">
                                                    <i class="anticon anticon-form" style="color: #336CFB;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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