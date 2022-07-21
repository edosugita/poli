<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_antrian' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'no_rm' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
                'unique' => true
            ],
            'id_poli' => [
                'type' => 'INT',
                'unsigned' => TRUE,
            ],
            'no_antrian' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'waktu' => [
                'type' => 'VARCHAR',
                'constraint' => '12'
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addKey('id_antrian', true);
        $this->forge->createTable('antrian');
    }

    public function down()
    {
        $this->forge->dropTable('antrian');
    }
}
