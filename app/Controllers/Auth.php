<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        $data['title'] = 'LOGIN';
        return view('login', $data);
    }

    function login()
    {
        $username = htmlspecialchars((string)$this->request->getPost('username'));
        $password = htmlspecialchars((string)$this->request->getPost('user_password'));
        $model = new UserModel();
        $user = $model->findUser($username);
        if (empty($user))
            return redirect()->back()->with('danger', 'User tidak ditemukan. Hubungi admin!');
        if (!password_verify($password, $user->user_password))
            return redirect()->back()->with('danger', 'Password Salah!');

        session()->set('user', $user);
        return redirect()->to('admin');
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('auth');
    }
}
