<?php

namespace App\Controllers;

use App\Models\DetailTindakan;

class Riwayat extends BaseController
{
    public function __construct()
    {
        $this->riwayat = new DetailTindakan();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Riwayat Tindakan',
            'dataRiwayat' => $this->riwayat
                ->join('data_pasien', 'data_pasien.no_rekam_medis = detail_tindakan_pasien.no_rm')
                ->select('distinct(nama_pasien), no_rekam_medis as no_rm')
                ->findAll(),
        ];

        return view('Admin/Riwayat/index', $data);
    }

    public function EditRiwayat()
    {
        $data = [
            'title' => 'Edit Data Riwayat Tindakan',
        ];

        return view('Admin/Riwayat/edit', $data);
    }
}
