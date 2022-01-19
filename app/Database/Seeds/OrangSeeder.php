<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
	public function run()
	{
		/* $data = [
            'nama' => 'Juhdin Nur',
	    'alamat'    => 'Jl. Cendana Gang 4 No.32',
	    'created_at'=> Time::now(),
	    'updated_at'=> Time::now()
        ];

        // Simple Queries
       // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
       $this->db->table('orang')->insert($data);*/

		// $data = [
		// 	[
		// 		'title' => 'Naruto',
		// 		'slug' => 'Naruto',
		// 		'penulis' => 'Masashi Kishimoto',
		// 		'penerbit' => 'Shonen Jump',
		// 		'sampul' => 'naruto.jpg',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	],
		// 	[
		// 		'title' => 'One Piece',
		// 		'slug' => 'One-Piece',
		// 		'penulis' => 'Eichiro Oda',
		// 		'penerbit' => 'Gramedia',
		// 		'sampul' => 'onepiece.jpg',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	]
		// ];

		$faker = \Faker\Factory::create('fr_FR');
		for ($i = 0; $i < 200; $i++) {
			$data = [
				'nama' => $faker->name,
				'alamat' => $faker->address,
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at' => Time::now()
			];
			// $this->db->table('komik')->insertBatch($data);
			$this->db->table('orang')->insert($data);
		}
	}
}
