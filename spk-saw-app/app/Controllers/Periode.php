<?php

namespace App\Controllers;

class Periode extends BaseController
{
    public function index()
    {
        return view('periode/index');
    }
    public function add()
    {
        return view('periode/add');
    }
}