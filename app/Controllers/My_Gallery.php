<?php

namespace App\Controllers;

class My_Gallery extends BaseController
{
    public function index()
    {
        echo view('layout/my_gallery');
    }

    public function upload()
    {
        echo view('my_gallery/upload');
    }  
}
