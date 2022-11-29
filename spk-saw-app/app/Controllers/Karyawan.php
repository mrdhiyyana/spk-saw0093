<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
    public function index()
    {
        return view('karyawan/index');
    }
    public function add()
    {
        return view('karyawan/add');
    }
}
