<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Obat;

class ObatController extends BaseController
{
    public function index()
    {
        $obat = new Obat();
        $data = [
            'title' => 'Data Obat',
            'dataObat' => $obat->findAll()
        ];

        return view('Admin/MasterPoli/obat/index', $data);
    }

    public function new()
    {
        $obat = new Obat();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'satuan' => $this->request->getVar('satuan'),
            'penggunaan_obat' => $this->request->getVar('penggunaan_obat')
        ];

        $obat->insert($data);

        return redirect()->to(site_url('master/obat'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Obat',
        ];

        return view('Admin/MasterPoli/editObat', $data);
    }
}
