<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailTindakan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'no_rm' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'id_antrian' => [
                'type' => 'int'
            ],
            'kode_tindakan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'kode_obat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'id_dokter' => [
                'type' => 'INT',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('detail_tindakan_pasien');
    }

    public function down()
    {
        $this->forge->dropTable('detail_tindakan_pasien');
    }
}
