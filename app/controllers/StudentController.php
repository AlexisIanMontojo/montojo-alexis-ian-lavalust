<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentController
 * 
 * Automatically generated via CLI.
 */
class StudentController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $_SESSION['student_access'] = true;
        $student = [
            'student_id'  => '2023-0062',
            'name'        => 'Alexis Ian M. Montojo',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => '3F3'];

        $this->call->view('StudentHome', $student);
    }

    public function profile(){
        $student = [
        'student_id'  => '2023-0062',
        'name'        => 'Alexis Ian M. Montojo',
        'course'      => 'BS Information Technology',
        'year'        => '3rd Year',
        'section'     => '3F3',
        'email'       => 'montojoalexisian@gmail.com',

        'address'     => 'Suqui, Calapan City, Oriental Mindoro',
        'contact'     => '0962-531-7090',

        'skills' => [
            'PHP',
            'HTML',
            'CSS',
            'JavaScript',
            'MySQL',
            'LavaLust',
            'Web Development'
        ],

        'hobbies' => [
            'Gaming',
            'Coding',
            'Music',
            'Watching Movies',
            'Learning'
        ],

        'description' =>
            'I am a Bachelor of Science in Information Technology student who is interested in web development, programming, and emerging technologies.',

        'social' => [
            'facebook' => 'https://www.facebook.com/alexis.montojo.3/',
            'github'   => 'https://github.com/AlexisIanMontojo'
        ]
         ];

        $this->call->view('StudentProfile', $student);
    }
}