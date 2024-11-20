<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TbuserModel;
class LoginController extends BaseController
{
    public function index()
    {
        return view('Auth/login');
    }

    public function do_login()
    {
        $model = new TbuserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            if (password_verify($password, $data['password'])) {
                $this->session->set([
                                'id' => $data['id'],
                                'firstname' => $data['firstname'],
                                'lastname' => $data['lastname'],
                                'username' => $data['username'],
                                'logged_in' => TRUE
                            ]);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Wrong Password')->withInput();
            }
        } else {
            return redirect()->back()->with('error', 'Wrong Username')->withInput();
        }
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
