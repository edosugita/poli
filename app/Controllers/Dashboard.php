<?php

namespace App\Controllers;

use App\Models\PasienModel;
use App\Models\PoliModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->poli = new PoliModel();
        $this->pasien = new PasienModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            // 'dataPoli' => $this->poli->findAll(),
            'countPoli' => $this->poli->getCount(),
            'countPasien' => $this->pasien->getCount(),
        ];

        return view('Admin/Dashboard/index', $data);
    }
}
