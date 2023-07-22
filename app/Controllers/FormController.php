<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function profile()
    {
        return view('layout/profile');
    }
    public function experience()
    {
        return view('layout/experience');
    }
}
