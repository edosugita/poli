<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PoliModel;
use App\Models\Tindakan as TindakanModel;

class TindakanController extends BaseController
{
    private TindakanModel $tindakanModel;
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


        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'kode' => [
                    'rules' => 'required|is_unique[tindakan.kode]',
                    'errors' => [
                        'required' => 'Kode tindakan harus di isi',
                        'is_unique' => 'Kode tindakan sudah terdaftar',
                        'min_length' => 'Kode tindakan harus memiliki panjang karakter minimal 5',
                        'max_length' => 'Kode tindakan harus memiliki panjang karakter maximal 99999'
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama tindakan harus di isi'
                    ]
                ],
                'tarif' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Tarif tindakan harus di isi',
                        'integer' => 'Tarif tindakan harus berupa angka'
                    ]
                ],


            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'kode_poli' => $this->request->getVar('kode_poli'),
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'tarif' => $this->request->getVar('tarif'),
                ];

                $query = $this->tindakanModel->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                } else {
                    return redirect()->to('/master/tindakan')->with('success', 'Tindakan berhasil ditambahkan!');
                }
            }
        }

        return view('Admin/MasterPoli/tindakan/index', $data);
    }

    public function edit($id)
    {
        $poliModel = new PoliModel();

        $data = [
            'title' => 'Edit Tindakan',
            'tindakan' => $this->tindakanModel->find($id),
            'dataPoli' => $poliModel->where('kode !=', 'MSP')->find()
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'kode' => [
                    'rules' => 'required|is_unique[tindakan.kode]',
                    'errors' => [
                        'required' => 'Kode tindakan harus di isi',
                        'is_unique' => 'Kode tindakan sudah terdaftar',
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama tindakan harus di isi'
                    ]
                ],
                'tarif' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Tarif tindakan harus di isi',
                        'integer' => 'Tarif tindakan harus berupa angka'
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'kode_poli' => $this->request->getVar('kode_poli'),
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'tarif' => $this->request->getVar('tarif'),
                ];

                $query = $this->tindakanModel->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                } else {
                    return redirect()->to('/master/tindakan')->with('success', 'Tindakan berhasil diupdate!');
                }
            }
        }
        return view('Admin/MasterPoli/tindakan/edit', $data);
    }
}
