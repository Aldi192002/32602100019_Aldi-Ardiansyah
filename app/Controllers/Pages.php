<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('Pages/home');
    }
    public function service()
    {
        return view('Pages/service');
    }
}
