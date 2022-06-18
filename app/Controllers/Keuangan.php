<?php

namespace App\Controllers;

class Keuangan extends BaseController
{
    public function DataPendapatan()
    {
        $data = [
            'title' => 'Data Pendapatan',
        ];

        return view('Admin/Keuangan/pendapatan', $data);
    }

    public function EditPendapatan()
    {
        $data = [
            'title' => 'Data Pendapatan',
        ];

        return view('Admin/Keuangan/editPendapatan', $data);
    }

    public function DataPengeluaran()
    {
        $data = [
            'title' => 'Data Pengeluaran',
        ];

        return view('Admin/Keuangan/pengeluaran', $data);
    }

    public function EditPengeluaran()
    {
        $data = [
            'title' => 'Data Pengeluaran',
        ];

        return view('Admin/Keuangan/editPengeluaran', $data);
    }
}
