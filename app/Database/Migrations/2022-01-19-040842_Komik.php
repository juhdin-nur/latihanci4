<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'title' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null' => true
            ],
            'slug' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null' => true
            ],
            'penulis' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null' => true
            ],
            'penerbit' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null' => true
            ],
            'sampul' => [
                'type'              => 'TEXT',
                'null' => true
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('komik');
    }

    public function down()
    {
        $this->forge->dropTable('komik');
    }
}
