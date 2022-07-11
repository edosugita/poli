<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Obat as ObatModel;

class ObatController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->obat = new ObatModel();
    }

    public function index()
    {
        $obat = new ObatModel();
        $data = [
            'title' => 'Data Obat',
            'dataObat' => $obat->findAll()
        ];

        return view('Admin/MasterPoli/obat/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data Obat',
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'kode' => [
                    'rules' => 'required|is_unique[obat.kode]',
                    'errors' => [
                        'required' => 'Kode obat harus di isi',
                        'is_unique' => 'Kode obat sudah terdaftar',
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama obat harus di isi'
                    ]
                ],
                'harga' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Harga obat harus di isi',
                        'integer' => 'Harga obat harus berupa angka'
                    ]
                ],
                'penggunaan_obat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penggunaan obat harus di isi'
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'harga' => $this->request->getVar('harga'),
                    'satuan' => $this->request->getVar('satuan'),
                    'penggunaan_obat' => $this->request->getVar('penggunaan_obat'),
                ];

                $query = $this->obat->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                } else {
                    return redirect()->to('/master/obat')->with('success', 'Poli berhasil ditambahkan!');
                }
            }
        }

        return view('Admin/MasterPoli/obat/add', $data);
    }

    public function edit($id)
    {
        $obat = new ObatModel();
        $data = [
            'title' => 'Edit Data Obat',
            'dataObat' => $obat->find($id)
        ];
        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'kode' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode obat harus di isi',
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama obat harus di isi'
                    ]
                ],
                'harga' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Harga obat harus di isi',
                        'integer' => 'Harga obat harus berupa angka'
                    ]
                ],
                'penggunaan_obat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penggunaan obat harus di isi'
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'harga' => $this->request->getVar('harga'),
                    'satuan' => $this->request->getVar('satuan'),
                    'penggunaan_obat' => $this->request->getVar('penggunaan_obat'),
                ];

                $query = $this->obat->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                } else {
                    return redirect()->to('/master/obat')->with('success', 'Poli berhasil ditambahkan!');
                }
            }
        }


        return view('Admin/MasterPoli/obat/edit', $data);
    }
}
