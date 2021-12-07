<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }

    public function loginView()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
    }

    public function registerView()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        
    }

    public function resetPasswordView()
    {
        return view('auth/reset-password');
    }

    public function resetPasswordPost()
    {
        
    }

    public function logout()
    {
        
    }
}
