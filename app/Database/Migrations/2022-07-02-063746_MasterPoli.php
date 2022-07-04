<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterPoli extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ],
                'kode' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'unique' => TRUE
                ],
                'nama' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ],
                'tarif' => [
                    'type' => 'INT',
                ],
                'status' => [
                    'type' => 'BOOLEAN',
                ],
                'password' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
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
            ]
        );

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('poli');
    }

    public function down()
    {
        $this->forge->dropTable('poli');
    }
}
