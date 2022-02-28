<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Visi_misi extends Controller
{
	public function index()
	{

		$data = [
			'title' => 'Bisnis Digital',
		];
		echo view('_partial/mheader');
		echo view('_partial/mtopbar');
		echo view('_partial/mnavbar');
		echo view('visi&misi/index', $data);
		echo view('_partial/mfooter');
	}

	//--------------------------------------------------------------------

}
