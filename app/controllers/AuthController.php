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
    }
    public function login()
    {
        $this->call->view('auth/login');
    }

    public function authenticate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        /*
         * For this classroom project:
         * username: admin
         * password: admin123
         */

        if (
            $username === 'admin' &&
            $password === 'admin123'
        ) {

            $_SESSION['user'] = $username;

            redirect('products');

            return;
        }

        $data['error'] = 'Invalid username or password.';

        $this->call->view('auth/login', $data);
    }

    public function logout()
    {
        unset($_SESSION['user']);

        session_destroy();

        redirect('login');
    }
}