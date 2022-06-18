<?php

namespace App\Controllers;

class Pasien extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Pasien',
        ];

        return view('Admin/Pasien/index', $data);
    }

    public function EditPasien()
    {
        $data = [
            'title' => 'EditData Pasien',
        ];

        return view('Admin/Pasien/edit', $data);
    }
}
