<?php

namespace App\Controllers;

class MasterPoli extends BaseController
{
    public function DataTindakan()
    {
        $data = [
            'title' => 'Data Tindakan',
        ];

        return view('Admin/MasterPoli/tindakan', $data);
    }

    public function EditTindakan()
    {
        $data = [
            'title' => 'Edit Data Tindakan',
        ];

        return view('Admin/MasterPoli/editTindakan', $data);
    }

    public function DataDokter()
    {
        $data = [
            'title' => 'Data Dokter',
        ];

        return view('Admin/MasterPoli/dokter', $data);
    }

    public function EditDokter()
    {
        $data = [
            'title' => 'Edit Data Dokter',
        ];

        return view('Admin/MasterPoli/editDokter', $data);
    }
}
