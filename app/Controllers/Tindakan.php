<?php

namespace App\Controllers;

class Tindakan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tambah Tindakan Pasien',
        ];

        return view('Admin/Tindakan/index', $data);
    }
}
