<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateTindakan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => 'ANK1',
                'nama' => 'Perawatan Anak',
                'tarif' => '100000',
                'kode_poli' => 'ANK',

            ],
            [
                'kode' => 'GZI1',
                'nama' => 'Perawatan Gizi',
                'tarif' => '1000000',
                'kode_poli' => 'GZI',
            ],

        ];
        $this->db->table('tindakan')->insertBatch($data);
    }
}
