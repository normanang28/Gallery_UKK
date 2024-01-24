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

    public function like($id)
    {
        if(session()->get('id')>0) {

        $model=new M_model();
        $maker_like=session()->get('id');
        $data=array(

            'id_gallery_like'=>$id,
            'status_like'=>'Like',
            'maker_like'=>$maker_like
        );

        $model->simpan('like',$data);
        return redirect()->to('/');

        }else{
            return redirect()->to('/');
        }
    } 

    public function comments($id)
    {
        if(session()->get('id')>0) {

        $model=new M_model();
        $comment=$this->request->getPost('comment');
        $maker_comment=session()->get('id');
        $data=array(

            'id_gallery_comment'=>$id,
            'comment'=>$comment,
            'maker_comment'=>$maker_comment
        );

        $model->simpan('comment',$data);
        return redirect()->to('/');

        }else{
            return redirect()->to('/');
        }
    } 
}
