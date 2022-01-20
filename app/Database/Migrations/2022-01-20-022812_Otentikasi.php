<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Otentikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment' => true
            ],
            'email'     => [
                'type'          => 'VARCHAR',
                'constraint'    => 200,
                'null'          => true
            ],
            'password'          => [
                'type'          => 'TEXT',
                'null'          => true
            ],
            'created_at' => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('otentikasi');
    }

    public function down()
    {
        $this->forge->dropTable('otentikasi');
    }
}
