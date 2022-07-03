<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'no_rm' => [
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => FALSE
                ],
                'id_petugas' => [
                    'type' => 'INT',
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
                'nik' => [
                    'type' => 'INT',
                ],
                'nama_petugas' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'jenis_kelamin' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
                'tempat_lahir' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
                'tanggal_lahir' => [
                    'type' => 'DATE',
                ],
                'telepon' => [
                    'type' => 'INT',
                ],
                'tanggal_pendafaran' => [
                    'type' => 'DATE',
                ],
                'jenis_pasien' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
                'nama_wali' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
                'nomor_wali' => [
                    'type' => 'INT',
                ],
                'status_verifikasi' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
                'berkas_tambahan' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
                'nomor_asuransi' => [
                    'type' => 'CHAR',
                    'constraint' => '256',
                ],
            ]
        );

        $this->forge->addKey('no_rm', TRUE);
        $this->forge->createTable('data_pasien');
    }

    public function down()
    {
        $this->forge->dropTable('data_pasien');
    }
}
