<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: AuthController
 * 
 * Automatically generated via CLI.
 */
class AuthController extends Controller {
    public function __construct()
    {
        parent::__construct();

        $this->call->model('UsersModel', 'userModel');
    }
    public function login()
    {
        $this->call->view('auth/login');
    }

    public function authenticate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->userModel->getUserByUsername($username);

        // User does not exist or password is incorrect
        if (!$user || $password !== $user['password']) {
            $data['error'] = 'Invalid username or password.';
            $this->call->view('auth/login', $data);
            return;
        }

        // Only ADMIN can log in
        if ($user['role'] !== 'admin') {
            $data['error'] = 'Access denied. Only administrators can log in.';
            $this->call->view('auth/login', $data);
            return;
        }

        // Admin login successful
        $_SESSION['user'] = [
            'id'       => $user['id'],
            'username' => $user['username'],
            'role'     => $user['role']
        ];

        redirect('/products');
    }

    public function logout()
    {
        session_destroy();

        redirect('/login');
    }
}