<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\DetailTindakan;
use App\Models\DokterModel;
use App\Models\Obat;
use App\Models\PasienModel;
use App\Models\Tindakan as ModelsTindakan;

class Tindakan extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->pasien = new PasienModel();
        $this->antrian = new AntrianModel();
        $this->dokter = new DokterModel();
        $this->tindakan = new ModelsTindakan();
        $this->obat = new Obat();
        $this->detailTindakan = new DetailTindakan();
    }

    public function index()
    {
        $data = [
            'title' => 'Tambah Tindakan Pasien',
            'dataAntrian' => $this->antrian->getAntrian(session()->get('id')),
            'dataDokter' => $this->dokter->findAll(),
        ];

        return view('Admin/Tindakan/index', $data);
    }

    public function add($id)
    {
        $getPasien = $this->antrian->getPasien($id);
        $data = [
            'title' => 'Tindakan Pasien | ' . $getPasien[0]['nama_pasien'],
            'dataPasien' => $getPasien,
            'dataTindakan' => $this->tindakan->findAll(),
            'dataObat' => $this->obat->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'deskripsi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Deskripsi penyakit harus di isi',
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $htindakan = $this->request->getVar('htindakan');
                $hobat = $this->request->getVar('hobat');
                $tindakan = $this->tindakan->getHargaTindakan($this->request->getVar('tindakan'));
                $obat = $this->obat->getHargaObat($this->request->getVar('obat'));
                $dokter = $this->dokter->getIdDokter($this->request->getVar('dokter'));

                if ($tindakan == 'pt' || $obat == 'po') {
                    return redirect()->back()->with('fail', 'Tindakan atau Obat harus di isi');
                } else {
                    $newData = [
                        'no_rm' => $this->request->getVar('norm'),
                        'kode_poli' => $this->request->getVar('kodepoli'),
                        'kode_tindakan' => $tindakan[0]['kode'],
                        'kode_obat' => $obat[0]['kode'],
                        'total_harga' => $hobat + $htindakan,
                        'id_dokter' => $dokter[0]['id'],
                        'deskripsi' => $this->request->getVar('deskripsi'),
                    ];

                    $query = $this->detailTindakan->insert($newData);

                    if (!$query) {
                        return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
                    } else {
                        return redirect()->to('/tindakan')->with('success', 'Tindakan pasien berhasil di tambahkan!');
                    }
                }
            }
        }

        return view('Admin/Tindakan/add', $data);
    }
}
