<?php

namespace App\Controllers;

use App\Models\AntrianModel;

class TindakanData extends BaseController
{
    public function __construct()
    {
        $this->antrian = new AntrianModel();
    }

    public function index()
    {
        $antrian = $this->request->getVar('antrian');

        $dataAntrian = $this->antrian->getIdAntrian($antrian);

        $data = array(
            'no_rm' => $dataAntrian[0]['no_rm'],
            'nama_pasien' => $dataAntrian[0]['nama_pasien'],
            'nama_poli' => $dataAntrian[0]['nama'],
            'alamat' => $dataAntrian[0]['alamat'],
        );

        echo json_encode($data);
    }
}
