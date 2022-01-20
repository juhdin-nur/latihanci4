<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ModelPegawai;

class Pegawai extends BaseController
{
    use ResponseTrait;
    function __construct()
    {
        $this->mpegawai = new ModelPegawai();
    }
    public function index()
    {
        $data = $this->mpegawai->orderBy('nama', 'asc')->findAll();
        return $this->respond($data, 200);
    }
    public function show($id)
    {
        $data = $this->mpegawai->where('id', $id)->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound("Data tidak ditemukan untuk id $id");
        }
    }
    public function create()
    {
        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'email' => $this->request->getVar('email')
        // ];
        $data = $this->request->getPost();

        if (!$this->mpegawai->save($data)) {
            return $this->fail($this->mpegawai->errors());
        }

        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Berhasil memasukkan data pegawai'
            ]
        ];
        return $this->respond($response);
    }
    public function update($id)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        $isExists = $this->mpegawai->where('id', $id)->first();
        if (!$isExists) {
            return $this->failNotFound("Data tidak ditemukan untuk id $id");
        }
        if (!$this->mpegawai->save($data)) {
            return $this->fail($this->mpegawai->errors());
        }
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => "Data pegawai dengan id $id berhasil diupdate "
            ]
        ];
        return $this->respond($response);
    }
    public function delete($id = null)
    {
        $data = $this->mpegawai->where('id', $id)->first();
        if ($data) {
            $this->mpegawai->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => "Data dengan id $id berhasil dihapus"
                ]
            ];
            return $this->respondDeleted($response);
        }
        return $this->failNotFound("Data id $id tidak ditemukan");
    }
}
