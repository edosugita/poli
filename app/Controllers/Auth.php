<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\PoliModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->poli = new PoliModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login Poli'
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required|is_not_unique[poli.username]',
                    'errors' => [
                        'required' => 'Username harus di isi',
                        'is_not_unique' => 'Username tidak terdaftar',
                        'strtolower' => 'Username atau Password salah'
                    ]
                ],

                'password' => [
                    'rules' => 'required|min_length[3]|max_length[12]',
                    'errors' => [
                        'required' => 'Kata sandi harus di isi',
                        'min_length' => 'Kata sandi harus memiliki panjang karakter minimal 3',
                        'max_length' => 'Kata sandi harus memiliki panjang karakter maximal 12',
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $nama = $this->request->getVar('nama');
                $password = $this->request->getVar('password');


                if (!ctype_lower($nama)) {
                    session()->setFlashdata('fail', 'Username atau Kata sandi salah');
                    return redirect()->back()->withInput();

                $poli_info = $this->poli->where('nama', $nama)->first();
                $check_password = Hash::check($password, $poli_info['password']);

                if (!$check_password) {
                    session()->setFlashdata('fail', 'Kata sandi salah');
                    return redirect()->to('/login')->withInput();

                } else {
                    $poli_info = $this->poli->where('username', $nama)->first();
                    $check_password = Hash::check($password, $poli_info['password']);

                    if (!$check_password) {
                        session()->setFlashdata('fail', 'Username atau Kata sandi salah');
                        return redirect()->to('/login')->withInput();
                    } else {
                        $poli_id = $poli_info['id'];
                        session()->set('loggedUser', $poli_id);

                        $poli = $this->poli->where('username', $nama)->first();
                        return $this->data($poli);
                    }
                }
            }
        }

        return view('Auth/login', $data);
    }

    public function data($poli)
    {
        $data = [
            'id' => $poli['id'],
            'nama' => $poli['nama'],
            'username' => $poli['username'],
            'tarif' => $poli['tarif'],
            'status' => $poli['status'],
        ];

        session()->set($data);
        return redirect()->to('/')->with('success', 'Berhasil login');;
    }

    public function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove(['loggedUser', 'id', 'nama', 'tarif', 'status']);
            return redirect()->to('/login?access=out')->with('fail', 'Kamu berhasil keluar');
        }
    }
}
