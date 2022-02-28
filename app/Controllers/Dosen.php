<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dosen extends Controller
{
	public function index()
	{

		$data = [
			'title' => 'Bisnis Digital'
		];

		echo view('_template/header');
		echo view('_template/navbar');
		echo view('dosen/index', $data);
		echo view('_template/footer');
	}
}
