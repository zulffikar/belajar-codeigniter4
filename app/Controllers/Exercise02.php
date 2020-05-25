<?php namespace App\Controllers;

Class Exercise02 extends BaseController
{
    public function index()
    {
        echo view('exercise02/header');
        echo view('exercise02/index');
        echo view('exercise02/footer');
    }

    public function form()
    {
        echo view('exercise02/header');
        echo view('exercise02/form');
        echo view('exercise02/footer');
    }

    public function table()
    {
        echo view('exercise02/header');
        echo view('exercise02/table');
        echo view('exercise02/footer');
    }
}