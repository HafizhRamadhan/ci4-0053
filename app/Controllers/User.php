<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        //
        return view('login/v_login');
    }
    public function halaman1()
    {
        return view('halaman');
    }
}
