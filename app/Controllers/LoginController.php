<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function login()
    {
        helper(['form', 'url']);

        
        if ($this->request->getMethod() === 'post') {
            // Retrieve form input
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Load the UserModel
            $userModel = new UserModel();

            // Fetch the user by username
            $user = $userModel->where('username', $username)->first();

            if ($user) {
                // Verify password
                if (password_verify($password, $user['password'])) {
                
                    session()->set([
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        'is_logged_in' => true,
                    ]);

                    // Redirect to dashboard
                    return redirect()->to('/home');
                } else {                    
                    return redirect()->back()->with('error', 'Invalid password.');
                }
            } else {
                return redirect()->back()->with('error', 'User not found.');
            }
        }

        return view('auth/login');
    }
}

