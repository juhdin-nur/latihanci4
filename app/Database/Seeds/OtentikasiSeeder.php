<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OtentikasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'juhdinfb@gmail.com',
            'password' => '1600Juh1992',
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];
        $this->db->table('otentikasi')->insert($data);
    }
}
