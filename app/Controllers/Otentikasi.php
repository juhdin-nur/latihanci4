<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\OtentikasiModel;
use Faker\Provider\Base;

class Otentikasi extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $validation = \Config\Services::validation();
        $aturan = [
            'email' => [
                'rules' => 'required|valid_email',
                'error' => [
                    'required' => 'silahkan masukkan email',
                    'valid_email' => 'Silahkan masukkan email yang valid'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Silahkan masukkan password'
                ]
            ]
        ];


        $validation->setRules($aturan);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->fail($validation->getErrors());
        }

        $model = new OtentikasiModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->getEmail($email);
        if ($data['password'] != $password) {
            return $this->fail("Password tidak sesuai");
        }

        helper('jwt');
        $response = [
            'message' => 'Otentikasi berhasil dilakukan',
            'data' => $data,
            'access_token' => createJWT($email)
        ];
        return $this->respond($response);
    }
}
