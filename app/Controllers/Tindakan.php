<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\DetailTindakan;
use App\Models\DokterModel;
use App\Models\Obat;
use App\Models\PasienModel;
use App\Models\PoliModel;
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
        $this->poliModel = new PoliModel();
    }

    public function index()
    {
        $id_poli = session()->get('loggedUser');
        $poli = $this->poliModel->where('id', $id_poli)->first();
        $data = [
            'title' => 'Tambah Tindakan Pasien',
            'dataAntrian' => $this->antrian->getAntrian(session()->get('id')),
            'dataDokter' => $this->dokter->where('id_poli', $id_poli)->findAll(),
            'dataTindakan' => $this->tindakan->where('kode_poli', $poli['kode'])->findAll(),
            'dataObat' => $this->obat->findAll()
        ];

        return view('Admin/Tindakan/index', $data);
    }

    public function store()
    {
        $data = [
            'id_dokter' => $this->request->getVar('id_dokter'),
            'id_antrian' => $this->request->getVar('id_antrian'),
            'no_rm' => $this->request->getVar('no_rm'),
            'array_kode_tindakan' => $this->request->getVar('array_kode_tindakan'),
            'array_kode_obat' => $this->request->getVar('array_kode_obat')
        ];
        if ($this->detailTindakan->insertTindakan($data)) {
            return redirect()->to('tindakan')->with('success', 'Data Tindakan Berhasil Di-input');
        }
        return redirect()->back()->with('failed', 'Data Gagal Ditambahkan');
    }

    public function add($id)
    {

        //        punya edo
//        $getPasien = $this->antrian->getPasien($id);
//        $data = [
//            'title' => 'Tindakan Pasien | ' . $getPasien[0]['nama_pasien'],
//            'dataPasien' => $getPasien,
//            'dataTindakan' => $this->tindakan->findAll(),
//            'dataObat' => $this->obat->findAll(),
//        ];
//
//        if ($this->request->getMethod() == 'post') {
//            $validation = $this->validate([]);
//
//            if (!$validation) {
//                $data['validation'] = $this->validator;
//            } else {
//                $htindakan = $this->request->getVar('htindakan');
//                $hobat = $this->request->getVar('hobat');
//                $tindakan = $this->tindakan->getHargaTindakan($this->request->getVar('tindakan'));
//                $obat = $this->obat->getHargaObat($this->request->getVar('obat'));
//                $dokter = $this->dokter->getIdDokter($this->request->getVar('dokter'));
//
//                if ($tindakan == 'pt' || $obat == 'po') {
//                    return redirect()->back()->with('fail', 'Tindakan atau Obat harus di isi');
//                } else {
//                    $newData = [
//                        'no_rm' => $this->request->getVar('norm'),
//                        'kode_poli' => $this->request->getVar('kodepoli'),
//                        'kode_tindakan' => $tindakan[0]['kode'],
//                        'kode_obat' => $obat[0]['kode'],
//                        'id_dokter' => $dokter[0]['id'],
//                        'deskripsi' => $this->request->getVar('deskripsi'),
//                    ];
//
//                    $query = $this->detailTindakan->insert($newData);
//
//                    if (!$query) {
//                        return redirect()->back()->with('fail', 'Tidak dapat menginputkan data kedalam DB!');
//                    } else {
//                        return redirect()->to('/tindakan')->with('success', 'Tindakan pasien berhasil di tambahkan!');
//                    }
//                }
//            }
//        }
//
//        return view('Admin/Tindakan/add', $data);
    }
}
