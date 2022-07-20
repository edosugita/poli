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
            'id_poli' => [
                'type' => 'DATETIME'
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
