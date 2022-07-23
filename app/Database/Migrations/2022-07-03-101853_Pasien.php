<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'no_rekam_medis' => [
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => FALSE
                ],
                'id_desa' => [
                    'type' => 'CHAR',
                    'constraint' => '30'
                ],
                'id_agama' => [
                    'type' => 'INT',
                ],
                'id_darah' => [
                    'type' => 'CHAR',
                    'constraint' => '3',
                ],
                'id_pekerjaan' => [
                    'type' => 'CHAR',
                    'constraint' => '3',
                ],
                'id_asuransi' => [
                    'type' => 'INT',
                ],
                'nik' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20'
                ],
                'nama_pasien' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'jenis_kelamin' => [
                    'type' => 'CHAR',
                    'constraint' => '12',
                ],
                'tempat_lahir' => [
                    'type' => 'CHAR',
                    'constraint' => '100',
                ],
                'tanggal_lahir' => [
                    'type' => 'DATE',
                ],
                'telepon' => [
                    'type' => 'INT',
                ],
                'jenis_pasien' => [
                    'type' => 'CHAR',
                    'constraint' => '255',
                ],
                'nama_wali' => [
                    'type' => 'CHAR',
                    'constraint' => '255',
                ],
                'nomor_wali' => [
                    'type' => 'INT',
                ],
                'nomor_asuransi'  => [
                    'type' => 'CHAR',
                    'constraint' => '100'
                ],
                'status_perkawinan' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'alamat' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'umur' => [
                    'type' => 'INT',
                ],
            ]
        );

        $this->forge->addKey('no_rekam_medis', TRUE);
        $this->forge->createTable('data_pasien');
    }

    public function down()
    {
        $this->forge->dropTable('data_pasien');
    }
}
