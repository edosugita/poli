<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Poli'
        ];

        return view('Auth/login', $data);
    }
}
