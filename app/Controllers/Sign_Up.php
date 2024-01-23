<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;

class Sign_Up extends BaseController
{
    public function index()
    {
        echo view('sign_up');
    }

    public function create_account()
    {
        $model=new M_model();

        $nama_pengguna=$this->request->getPost('nama_pengguna');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $maker_karyawan=session()->get('id');

        $user=array(
            'username'=>$username,
            'password'=>md5($password),
            'level'=>'1',
        );

        $model=new M_model();
        $model->simpan('user', $user);
        $where=array('username'=>$username);
        $id=$model->getarray('user', $where);
        $iduser = $id['id_user'];

        $pengguna = array(
            'nama_pengguna' => $nama_pengguna,
            'id_user_pengguna' => $iduser,

        );
        $model->simpan('pengguna', $pengguna);
        return redirect()->to('/');
    }
}
