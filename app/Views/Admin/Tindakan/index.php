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
                    <div class="m-t-10">
                        <form method="">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="kodetindakan">Nomor RM</label>
                                        <input type="text" class="form-control" id="kodetindakan" placeholder="ex: 534320">
                                    </div>
                                    <div class="form-group">
                                        <label for="namatindakan">Kode Poli</label>
                                        <input type="text" class="form-control" id="namatindakan" placeholder="ex: Poli Anak">
                                    </div>
                                    <div class="form-group">
                                        <label for="tariftindakan">Tanggal</label>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-calendar"></i>
                                            <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepoli">Dokter</label>
                                        <input type="text" class="form-control" id="kodepoli" placeholder="ex: Alfonso Donin">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="tindakan1">Antrian</label>
                                        <select class="select2" name="tindakan1">
                                            <option value="AP">1</option>
                                            <option value="NL">2</option>
                                            <option value="BN">3</option>
                                            <option value="HL">4</option>
                                            <option value="HL">5</option>
                                            <option value="HL">6</option>
                                            <option value="HL">7</option>
                                            <option value="HL">8</option>
                                            <option value="HL">9</option>
                                            <option value="HL">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tindakan1">Nama Pasien</label>
                                        <select class="select2" name="tindakan1">
                                            <option value="AP">AA</option>
                                            <option value="NL">BB</option>
                                            <option value="BN">CC</option>
                                            <option value="HL">DD</option>
                                            <option value="HL">EE</option>
                                            <option value="HL">FF</option>
                                            <option value="HL">GG</option>
                                            <option value="HL">HH</option>
                                            <option value="HL">II</option>
                                            <option value="HL">JJ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tariftindakan">Umur</label>
                                        <input type="text" class="form-control" id="tariftindakan" placeholder="ex: 19">
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepoli">Alamat</label>
                                        <input type="text" class="form-control" id="kodepoli" placeholder="ex: Surabaya No. 6">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahObat"><i class="anticon anticon-plus m-r-20"></i> Tindakan</button>
                            </div>
                        </div>
                    </div>

                    <div class="m-t-30">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead style="background: #EBF0FF;">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Poli</th>
                                        <th>Detail</th>
                                        <th>Kode Obat</th>
                                        <th>Kode Tindakan</th>
                                        <th>Nama Tindakan</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Poli Anak</td>
                                        <td>Pegal Linu</td>
                                        <td>KD01OB</td>
                                        <td>KD01TD</td>
                                        <td>Urut</td>
                                        <td>1.000.000</td>
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