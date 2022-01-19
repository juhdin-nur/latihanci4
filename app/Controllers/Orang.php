<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController{
	protected $orangModel;
	public function _construct()
	{
		$this->orangModel = new OrangModel();
	}
	public function index()
	{
		$data =[
			'title'=> 'Daftar Orang',
			'orang'=> $this->orangModel->findAll();
		];
		return view('orang/index',$data);
	}
}
