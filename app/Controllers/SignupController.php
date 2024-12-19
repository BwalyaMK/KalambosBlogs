<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class SignupController extends Controller
{
    public function signup()
    {
        helper(['form', 'url']);

        if ($this->request->getMethod() == 'POST') {
            log_message('debug','Form Submitted: ' . json_encode($this->request->getPost()));
        }

        
        if ($this->request->getMethod() === 'post') {
            // Validate input
            $validationRules = [
                'username' => 'required|is_unique[users.username]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
                'confirm_password' => 'required|matches[password]',
            ];

            if (!$this->validate($validationRules)) {
                // Return validation errors
                log_message('error', 'Validation failed: ' . json_encode($this->validator->getErrors()));
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Get validated form data
            $userData = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            ];

            // Save the user to the database
            $userModel = new UserModel();
            if ($userModel->insert($userData)) {
                // Redirect to login page with success message
                log_message('info', 'User created successfully: ' . $this->request->getPost('email'));
                return redirect()->to('/auth/login')->with('success', 'Account created successfully. Please log in.');
            }

            // Handle DB insert error
            log_message('error', 'User creation failed.');
            return redirect()->back()->withInput()->with('error', 'Failed to create an account. Please try again.');
        }

        
        return view('auth/signup');
    }
}
