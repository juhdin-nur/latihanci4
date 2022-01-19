<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
	protected $orangModel;
	public function __construct()
	{
		$this->orangModel = new OrangModel();
	}
	public function index()
	{
		$currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$orangsemua = $this->orangModel->search($keyword);
		} else {
			$orangsemua = $this->orangModel;
		}

		$data = [
			'title' => 'Daftar Orang',
			'orang' => $orangsemua->paginate(10, 'orang'),
			'pager' => $orangsemua->pager,
			'currentPage' => $currentPage
		];
		return view('orang/index', $data);
	}
}
