<?php

namespace App\Controllers;

use App\Models\DokterModel;

class DokterController extends BaseController
{
    private DokterModel $dokterModel;
    public function __construct()
    {
        helper(['form']);
        $this->dokterModel = new DokterModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Dokter',
            'dataDokter' => $this->dokterModel->findAll()
        ];

        return view('Admin/MasterPoli/dokter/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data Dokter',
        ];

        return view('Admin/MasterPoli/dokter/add', $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'nomor_induk' => [
                'rules' => 'required|is_unique[dokter.nomor_induk]',
                'errors' => [
                    'required' => 'Nomor induk harus diisi',
                    'is_unique' => 'Nomor induk sudah terdaftar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required|max_length[12]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Nomor telepon tidak boleh lebih dari 12 angka'
                ]
            ],
            'spesialis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Spesialis harus diisi'
                ]
            ]
        ]);

        // if data invalid, return validator instance
        if (!$validation) {
            $data['validation'] = $this->validator;
            $data['title'] = 'Tambah Data Dokter';
            return view('Admin/MasterPoli/dokter/add', $data);
        }

        $data = [
            'nomor_induk' => $this->request->getVar('nomor_induk'),
            'nama' => $this->request->getVar('nama'),
            'no_telp' => $this->request->getVar('no_telp'),
            'spesialis' => $this->request->getVar('spesialis')
        ];

        $result = $this->dokterModel->insert($data, true);

        if (!$result) {
            return redirect()->back()->with('fail', 'Gagal menambahkan data dokter');
        }

        return redirect('master/dokter')->with('success', 'Berhasil menambahkan data dokter');
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Data Dokter',
        ];

        return view('Admin/MasterPoli/dokter/edit', $data);
    }
}
