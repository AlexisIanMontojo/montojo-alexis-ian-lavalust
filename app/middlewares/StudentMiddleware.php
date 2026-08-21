<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Middleware: StudentMiddleware
 */
class StudentMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param Closure $next
     * @return mixed
     */
    public function handle(Closure $next)
    {
        if (isset($_SESSION['student_access']) && $_SESSION['student_access'] === true) {
            return $next();
        }

        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Access Denied</title>

            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    font-family: "Segoe UI", Tahoma, sans-serif;
                    background: #f5f6fa;
                    min-height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .access-denied {
                    width: 400px;
                    max-width: 90%;
                    background: #ffffff;
                    padding: 40px 30px;
                    text-align: center;
                    border-radius: 12px;
                    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                }

                .icon {
                    width: 70px;
                    height: 70px;
                    margin: 0 auto 20px;
                    background: #ffe5e5;
                    color: #dc3545;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 35px;
                }

                h1 {
                    color: #333;
                    font-size: 26px;
                    margin-bottom: 10px;
                }

                p {
                    color: #777;
                    font-size: 15px;
                    line-height: 1.6;
                    margin-bottom: 25px;
                }

                .back-btn {
                    display: inline-block;
                    padding: 10px 22px;
                    background: #007bff;
                    color: white;
                    text-decoration: none;
                    border-radius: 6px;
                    font-size: 14px;
                    transition: 0.2s;
                }

                .back-btn:hover {
                    background: #0056b3;
                }
            </style>
        </head>

        <body>

            <div class="access-denied">

                <div class="icon">
                    &#9888;
                </div>

                <h1>Access Denied</h1>

                <p>
                    You do not have permission to access the Student Profile page.
                    Please make sure you are authorized to view this page.
                </p>

                <a href="/student" class="back-btn">
                    Back to Home
                </a>

            </div>

        </body>
        </html>
        ';

        exit;
    }
}
