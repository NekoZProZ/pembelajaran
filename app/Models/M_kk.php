<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kk extends Model
{

public function tampil($cahya){
		return $this->db->table($cahya)
                        ->get()
                        ->getResult();

	}

	

}