<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTindakan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tarif' => [
                'type' => 'FLOAT'
            ],
            'kode_poli' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
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
        $this->forge->addForeignKey('kode_poli', 'poli', 'kode');
        $this->forge->createTable('tindakan');
    }

    public function down()
    {
        $this->forge->dropTable('tindakan');
    }
}
