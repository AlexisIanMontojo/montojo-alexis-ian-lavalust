<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: AuthController
 */
class AuthController extends Controller
{
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

        // Save logged-in user information
        $_SESSION['user'] = [
            'id'       => $user['id'],
            'username' => $user['username'],
            'role'     => $user['role']
        ];

        // Redirect according to role
        if ($user['role'] === 'admin') {
            redirect('/products');
            return;
        }

        if ($user['role'] === 'user') {
            redirect('/user/products');
            return;
        }

        // Unknown role
        unset($_SESSION['user']);

        $data['error'] = 'Invalid user role.';
        $this->call->view('auth/login', $data);
    }

    public function logout()
    {
        session_destroy();

        redirect('/login');
    }
}