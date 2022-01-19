<?php

namespace App\Models;

use Codeigniter\Model;

class OrangModel extends Model{
	protected $table = 'orang';
	protected $useTimestamps = true;
	protected $allowdFields = ['nama','alamat'];

}
