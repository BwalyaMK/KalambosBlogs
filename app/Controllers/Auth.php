<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        helper(['form', 'url']);

        if ($this->request->getMethod() === 'post') {
            // Validation rules
            $validationRules = [
                'username' => 'required|is_unique[users.username]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
                'confirm_password' => 'required|matches[password]',
            ];

            // Validate input
            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            
            $userData = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            ];

            // Save user to database
            $userModel = new UserModel();
            if ($userModel->insert($userData)) {
                // This redirects to home when successful
                return redirect()->to('/home')->with('success', 'Account created successfully!');
            }

            // This redirects back when error occurs
            return redirect()->back()->withInput()->with('error', 'Failed to create account. Please try again.');
        }

        
        return view('auth/signup');
    }
}
