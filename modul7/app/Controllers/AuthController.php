<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $model = new UserModel();
        $username = request()->getPost('username');
        $email = request()->getPost('email');
        $password = request()->getVar('password');

        $dataUser = $model->where([
            "username" => $username,
            "email" => $email
        ])->first();

        if ($dataUser) {
            $pas = $dataUser['password'];
            $authenticatePassword = password_verify($password, $pas);
            if ($authenticatePassword) {
                session()->set([
                    "username" => $username,
                    "email" => $email,
                    "isLoggedIn" => true
                ]);

                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata(["pesan" => "Login gagal, username, email atau password salah"]);
                return redirect()->to(base_url('/login'));
            }
        } else {
            session()->setFlashdata(["pesan" => "Login gagal, username, email atau password salah"]);
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
