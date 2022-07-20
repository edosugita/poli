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
            'dataRiwayat' => $this->riwayat->findAll(),
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
