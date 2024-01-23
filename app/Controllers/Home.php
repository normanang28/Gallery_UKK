<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;

class Home extends BaseController
{

    public function index()
    {
        if (session()->get('level') > 0) {
            return redirect()->to('home/dashboard'); 
        } else {
            $model = new M_model();
            return view('sign_in');
        }
    }
    
    public function sign_in()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');

        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p)
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {
            $where=array('id_user_pengguna'=>$cek['id_user']);
            $pengguna=$model->getarray('pengguna', $where);

                if ($pengguna) { 
                session()->set('id', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('nama_pengguna', $pengguna['nama_pengguna']);
                session()->set('level', $cek['level']);

                return redirect()->to('/home/dashboard');
            } else {
            }
        }
        return redirect()->to('/');
    }

    public function dashboard()
    {   
        if(session()->get('id')>0) {

        $model = new M_model();
        $data['data'] = $model->tampil('gallery');

        echo view('layout/home', $data);
        
        }else{
            return redirect()->to('/');
        }
    }
}
