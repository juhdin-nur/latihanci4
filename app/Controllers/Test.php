<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
	   $faker = \Faker\Factory::create();
	   dd($faker->name);
    }
    public function baru(){
    	echo $_SERVER['DOCUMENT_ROOT'];
    }
}
