<?php

namespace App\Controllers;

use App\Models\AntrianModel;

class Tindakan extends BaseController
{
    public function __construct()
    {
        $this->antrian = new AntrianModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Tambah Tindakan Pasien',
            'dataAntrian' => $this->antrian->getAntrian(session()->get('id')),
        ];

        return view('Admin/Tindakan/index', $data);
    }
}
