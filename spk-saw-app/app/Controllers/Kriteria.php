<?php

namespace App\Controllers;

class Kriteria extends BaseController
{
    public function index()
    {
        return view('kriteria/index');
    }
    public function add()
    {
        return view('kriteria/add');
    }
}
