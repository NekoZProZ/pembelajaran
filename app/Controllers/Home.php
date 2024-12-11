<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_kk;

class Home extends BaseController
{

	public function index()
	{

			$model=new M_kk;
			$data['data'] = $model->tampil('barang');
		echo view('table', $data);
		
	}


}
