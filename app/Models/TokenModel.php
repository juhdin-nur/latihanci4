<?php

namespace App\Models;

use CodeIgniter\Model;

class TokenModel extends Model
{
    protected $table = 'api_token';
    protected $id = 'id';

    protected $allowedFields = ['id', 'token'];

    public function getToken($id)
    {
        $builder = $this->table('api_token');
        $data = $builder->where('id', $id)->first();
        return $data['token'];
    }
}
