<?php

namespace App\Controllers;

class Riwayat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Riwayat Tindakan',
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
