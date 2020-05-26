<?php namespace App\Controllers;

Class Student extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('student/index');
        echo view('footer');
    }

    public function create()
    {
        echo view('header');
        echo view('student/create');
        echo view('footer');
    }

    public function edit()
    {
        echo view('header');
        echo view('student/edit');
        echo view('footer');
    }
}