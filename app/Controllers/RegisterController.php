<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TbuserModel;
class RegisterController extends BaseController
{
    public function index()
    {
        return view('Auth/register');
    }
    public function do_register()
    { 
        $model = new TbuserModel();
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // $confirmpassword = $this->request->getPost('confirmpassword');
        $firstname = $this->request->getPost('firstname');
        $middlename = $this->request->getPost('middlename');
        $lastname = $this->request->getPost('lastname');
        $p = password_hash($password, PASSWORD_BCRYPT);
        // echo $confirmpassword;
          // Validate password strength
        if (!$this->isStrongPassword($password)) {
            return redirect()->back()->with('error', 'Password Validate')->withInput();
        }
        if ($model->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email already exists')->withInput();
        }

        // if ($password !== $confirmPassword) {
        //     return redirect()->back()->with('error', 'Passwords do not match')->withInput();
        // } 

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $p,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'lastname' => $lastname
        ];
        $model->insert($data);
        return redirect()->to('/login');
    }
    // Helper function for password validation
    private function isStrongPassword($password)
    {
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        return preg_match($pattern, $password);
    }
}
