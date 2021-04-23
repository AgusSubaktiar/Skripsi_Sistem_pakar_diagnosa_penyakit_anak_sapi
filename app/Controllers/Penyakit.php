<?php

namespace App\Controllers;

class Penyakit extends BaseController
{
	public function index()
	{
    return view('pages/penyakit');
    }
    public function detail()
    {
        return view('pages/penyakit_view');
    }
}