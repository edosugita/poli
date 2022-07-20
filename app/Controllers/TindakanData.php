<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\Obat;
use App\Models\Tindakan;

class TindakanData extends BaseController
{
    public function __construct()
    {
        $this->antrian = new AntrianModel();
        $this->obat = new Obat();
        $this->tindakan = new Tindakan();
    }

    public function index()
    {
        $antrian = $this->request->getVar('antrian');

        $dataAntrian = $this->antrian->getIdAntrian($antrian);

        $data = array(
            'antrian' => $dataAntrian[0]['id_antrian'],
            'no_rm' => $dataAntrian[0]['no_rm'],
            'nama_pasien' => $dataAntrian[0]['nama_pasien'],
            'nama_poli' => $dataAntrian[0]['nama'],
            'umur' => $dataAntrian[0]['umur'],
            'alamat' => $dataAntrian[0]['alamat'],
        );

        echo json_encode($data);
    }

    public function HargaObat()
    {
        $obat = $this->request->getVar('obat');

        $dataObat = $this->obat->getHargaObat($obat);

        // dd($dataObat);

        $data = array(
            'harga' => $dataObat[0]['harga'],
        );

        echo json_encode($data);
    }

    public function HargaTindakan()
    {
        $tindakan = $this->request->getVar('tindakan');

        $dataTindakan = $this->tindakan->getHargatindakan($tindakan);

        // dd($dataTindakan);

        $data = array(
            'harga' => $dataTindakan[0]['tarif'],
        );

        echo json_encode($data);
    }
}
