<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PoliModel;
use App\Models\Tindakan as TindakanModel;

class TindakanController extends BaseController
{
    private TindakanModel $tindakanModel ;
    public function  __construct()
    {
        $this->tindakanModel = new TindakanModel();
    }

    public function index()
    {
        $poliModel = new PoliModel();
        $data = [
            'title' => 'Data Tindakan',
            'dataPoli' => $poliModel->where('kode !=', 'MSP')->find(), // select all poli except master
            'dataTindakan' => $this->tindakanModel->findAll()
        ];

        return view('Admin/MasterPoli/tindakan/index', $data);
    }

    public function create()
    {
        $data = [
            'kode_poli' => $this->request->getVar('kode_poli'),
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'tarif' => $this->request->getVar('tarif'),
        ];

        $this->tindakanModel->insert($data);

        return redirect()->to(site_url('master/tindakan'));
    }

    public function edit($id)
    {
        $poliModel = new PoliModel();

        $data = [
            'title' => 'Edit Tindakan',
            'tindakan' => $this->tindakanModel->find($id),
            'dataPoli' => $poliModel->where('kode !=', 'MSP')->find()
        ];

        return view('Admin/MasterPoli/tindakan/edit', $data);
    }

    public  function update($id)
    {

        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'tarif' => $this->request->getVar('tarif'),
            'kode_poli' => $this->request->getVar('kode_poli'),
        ];


        if (!$this->tindakanModel->update($id, $data)) {
            return redirect()->back();
        }


        return redirect()->to(site_url('master/tindakan'));
    }
}
