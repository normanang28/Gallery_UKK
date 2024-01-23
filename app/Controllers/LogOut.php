<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;

class LogOut extends BaseController
{
    public function index()
    {
        if(session()->get('id') > 0) {

            $model = new M_model(); 
            session()->destroy();

            return redirect()->to('/');

        } else {
            return redirect()->to('/home/dashboard');
        }
    }
}
