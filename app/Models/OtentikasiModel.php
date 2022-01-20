<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class OtentikasiModel extends Model
{
    protected $table = 'otentikasi';
    protected $id = 'id';
    protected $allowedFields = ['email', 'password'];

    public function getEmail($email)
    {
        $builder = $this->table('otentikasi');
        $data = $builder->where('email', $email)->first();
        if (!$data) {
            throw new Exception("Data Otentikasi tidak ditemukan");
        }
        return $data;
    }
}
