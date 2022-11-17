<?php

namespace App\Controllers;
use App\Models\Admin;

class LoginController extends BaseController
{
    public function index()
    {
        return view('loginregister/login');
    }

    public function process(){
        $admin = new Admin();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataAdmin = $admin->where([
            'email' => $email,
        ])->first();
        if ($dataAdmin) {
            if (password_verify($password, password_hash($dataAdmin->password, PASSWORD_BCRYPT))) {
                session()->set([
                    'email' => $dataAdmin->email,
                    'password' => $dataAdmin->password,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}
