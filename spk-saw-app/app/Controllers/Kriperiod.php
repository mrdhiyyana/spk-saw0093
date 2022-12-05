<?php

namespace App\Controllers;

class Kriperiod extends BaseController
{
    public function index()
    {
        return view('kriperiod/index');
    }
    public function add()
    {
        return view('kriperiod/add');
    }
}