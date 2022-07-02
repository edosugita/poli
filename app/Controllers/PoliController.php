<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\PoliModel;

class PoliController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->poli = new PoliModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Poli',
            'dataPoli' => $this->poli->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'kode' => [
                    'rules' => 'required|is_unique[poli.kode]',
                    'errors' => [
                        'required' => 'Kode poli harus di isi',
                        'is_unique' => 'Kode poli sudah terdaftar'
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama poli harus di isi'
                    ]
                ],
                'tarif' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Tarif poli harus di isi',
                        'integer' => 'Tarif poli harus berupa angka'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[3]|max_length[12]',
                    'errors' => [
                        'required' => 'Kata sandi harus di isi',
                        'min_length' => 'Kata sandi harus memiliki panjang karakter minimal 3',
                        'max_length' => 'Kata sandi harus memiliki panjang karakter maximal 12'
                    ]
                ],
                'cpassword' => [
                    'rules' => 'required|min_length[3]|max_length[12]|matches[password]',
                    'errors' => [
                        'required' => 'Kata sandi harus di isi',
                        'min_length' => 'Kata sandi harus memiliki panjang karakter minimal 3',
                        'max_length' => 'Kata sandi harus memiliki panjang karakter maximal 12',
                        'matches' => 'Kata sandi tidak sama'
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'tarif' => $this->request->getVar('tarif'),
                    'password' => Hash::make($this->request->getVar('password')),
                ];

                $query = $this->poli->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                } else {
                    return redirect()->to('/master/poli')->with('success', 'Poli berhasil ditambahkan!');
                }
            }
        }

        return view('Admin/MasterPoli/poli/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Poli',
            'dataPoli' => $this->poli->find($id),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'kode' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode poli harus di isi',
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama poli harus di isi'
                    ]
                ],
                'tarif' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Tarif poli harus di isi',
                        'integer' => 'Tarif poli harus berupa angka'
                    ]
                ],
                'cpassword' => [
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => 'Kata sandi tidak sama'
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {

                $password = $this->request->getVar('password');

                if ($password == null) {
                    $checkPassword = $this->poli->where('id', $id)->first();
                    $password = $checkPassword['password'];
                } else {
                    $password = Hash::make($password);
                }

                $newData = [
                    'kode' => $this->request->getVar('kode'),
                    'nama' => $this->request->getVar('nama'),
                    'tarif' => $this->request->getVar('tarif'),
                    'password' => $password,
                ];

                // dd($newData);

                $query = $this->poli->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                } else {
                    return redirect()->to('/master/poli')->with('success', 'Poli berhasil di update!');
                }
            }
        }

        return view('Admin/MasterPoli/poli/edit', $data);
    }
}
