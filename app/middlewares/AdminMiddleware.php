<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: AdminMiddleware
 * 
 * Automatically generated via CLI.
 */
class AdminMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param Closure $next
     * @return mixed
     */
    public function handle(Closure $next)
    {
        if (!isset($_SESSION['user'])) {
            redirect('/login');
            return;
        }

        if ($_SESSION['user']['role'] !== 'admin') {
            echo "Access Denied. Admins only.";
            return;
        }

        return $next();
    }
}
