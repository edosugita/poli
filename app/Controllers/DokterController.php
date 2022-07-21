<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\PoliModel;

class DokterController extends BaseController
{
    private DokterModel $dokterModel;
    private PoliModel $poliModel;

    public function __construct()
    {
        helper(['form']);
        $this->dokterModel = new DokterModel();
        $this->poliModel = new PoliModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Dokter',
            'dataDokter' => $this->dokterModel->join('poli', 'poli.id = dokter.id_poli')->select('dokter.nama as nama_dokter, nomor_induk, poli.nama as nama_poli, no_telp, dokter.id as id')->findAll(),
        ];

        return view('Admin/MasterPoli/dokter/index', $data);
    }

    public function add()
    {
        $dataPoli = $this->poliModel->findAll();
        // delete first item from database (master poli)
        array_shift($dataPoli);
        $data = [
            'title' => 'Tambah Data Dokter',
            'dataPoli' => $dataPoli
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
            'id_poli' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Poli harus diisi'
                ]
            ]
        ]);

        // if data invalid, return validator instance
        if (!$validation) {
            $data['validation'] = $this->validator;
            $data['title'] = 'Tambah Data Dokter';

            $dataPoli = $this->poliModel->findAll();
            // delete first item from database (master poli)
            array_shift($dataPoli);
            $data['dataPoli'] = $dataPoli;
            return view('Admin/MasterPoli/dokter/add', $data);
        }


        $data = [
            'nomor_induk' => $this->request->getVar('nomor_induk'),
            'nama' => $this->request->getVar('nama'),
            'no_telp' => $this->request->getVar('no_telp'),
            'id_poli' => $this->request->getVar('id_poli')
        ];

        $result = $this->dokterModel->insert($data, true);

        if (!$result) {
            return redirect()->back()->with('fail', 'Gagal menambahkan data dokter');
        }

        return redirect('master/dokter')->with('success', 'Berhasil menambahkan data dokter');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Dokter',
        ];

        $dokter = $this->dokterModel->find($id);

        if (!$dokter) {
            return redirect()->to('master/dokter');
        }

        $data['dokter'] = $dokter;

        return view('Admin/MasterPoli/dokter/edit', $data);
    }

    public function update($id)
    {
        $validation = $this->validate([
            'nomor_induk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor induk harus diisi',
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
            $data['dokter'] = $this->dokterModel->find($id);
            return view('Admin/MasterPoli/dokter/edit', $data);
        }

        $data = [
            'nomor_induk' => $this->request->getVar('nomor_induk'),
            'nama' => $this->request->getVar('nama'),
            'no_telp' => $this->request->getVar('no_telp'),
            'spesialis' => $this->request->getVar('spesialis')
        ];

        $result = $this->dokterModel->update($id, $data);

        if (!$result) {
            return redirect()->back()->with('fail', 'gagal mengupdate data dokter');
        }

        return redirect()->to('master/dokter/' . $id . '/edit')->with('success', 'Data dokter behasil diperbarui');
    }
}
