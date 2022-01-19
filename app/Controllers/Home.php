<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home web Juhdin'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Cedana Gang 4 No.32',
                    'kota' => 'Samarinda'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Untung Suropati No.08',
                    'kota' => 'Samarinda'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
