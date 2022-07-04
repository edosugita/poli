<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateObat extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => 'KNK1',
                'nama' => 'Konidin',
                'harga' => '10000',
                'satuan' => '1',
                'penggunaan_obat' => 'Batuk Berdahak',

            ],
            [
                'kode' => 'BDRX',
                'nama' => 'Bodrexin',
                'harga' => '13000',
                'satuan' => '1',
                'penggunaan_obat' => 'Pusing',

            ],

        ];
        $this->db->table('obat')->insertBatch($data);
    }
}
