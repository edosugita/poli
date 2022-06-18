<?php

namespace App\Controllers;

class MasterPoli extends BaseController
{
    public function DataPoli()
    {
        $data = [
            'title' => 'Data Poli',
        ];

        return view('Admin/MasterPoli/poli', $data);
    }

    public function EditPoli()
    {
        $data = [
            'title' => 'Edit Data Poli',
        ];

        return view('Admin/MasterPoli/editPoli', $data);
    }

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

    public function DataObat()
    {
        $data = [
            'title' => 'Data Obat',
        ];

        return view('Admin/MasterPoli/obat', $data);
    }

    public function EditObat()
    {
        $data = [
            'title' => 'Edit Data Obat',
        ];

        return view('Admin/MasterPoli/editObat', $data);
    }
}
