<?php

namespace App\Controllers;

class DokterController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Dokter',
        ];

        return view('Admin/MasterPoli/dokter/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Edit Data Dokter',
        ];

        return view('Admin/MasterPoli/dokter/add', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Data Dokter',
        ];

        return view('Admin/MasterPoli/dokter/edit', $data);
    }
}
