<?php

namespace App\Controllers;

class Struktur extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Bisnis Digital',
		];
		echo view('_partial/mheader');
		echo view('_partial/mtopbar');
		echo view('_partial/mnavbar');
		echo view('struktur/index', $data);
		echo view('_partial/mfooter');
	}
}
