<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Bisnis Digital',
		];
		echo view('_partial/mheader');
		echo view('_partial/mtopbar');
		echo view('_partial/mnavbar');
		echo view('home/index', $data);
		echo view('_partial/mfooter');
	}
}
