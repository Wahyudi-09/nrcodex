<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{

		$data = [
			'title' => 'Bisnis Digital',
		];
		echo view('_partial/header');
		echo view('_partial/topbar');
		echo view('_partial/navbar');
		return view('admin/home', $data);
		echo view('_partial/footer');
	}
}
