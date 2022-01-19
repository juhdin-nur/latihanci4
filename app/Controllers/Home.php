<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
	    echo view('layout/header');
	    echo view('pages/home');
	    echo view('layout/footer');
    }
    public function about()
    {
	    echo view('layout/header');
	    echo view('pages/about');
	    echo view('layout/footer');
    }
    public function contact()
    {
	    echo view('layout/header');
	    echo view('pages/contact');
	    echo view('layout/footer');
    }
}
