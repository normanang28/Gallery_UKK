<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;

class My_Gallery extends BaseController
{
    public function index()
    {
        if(session()->get('id')>0) {

        $model = new M_model();
        
        $id_user = session()->get('id');
        $whereAlbum = array('maker_album' => $id_user);
        $data['data'] = $model->tampilWhere('album', $whereAlbum);

        $whereUser = array('id_user' => $id_user);
        $data['foto'] = $model->getRow('user', $whereUser);

        echo view('layout/my_gallery', $data);

        }else{
            return redirect()->to('/');
        }
    }

    public function album()
    {
        if(session()->get('id')>0) {

        $model=new M_model();
        $nama_album=$this->request->getPost('nama_album');
        $maker_album=session()->get('id');
        $data=array(

            'nama_album'=>$nama_album,
            'maker_album'=>$maker_album
        );

        $model->simpan('album',$data);
        return redirect()->to('/My_Gallery');

        }else{
            return redirect()->to('/');
        }
    } 

    public function delete_album($id)
    {
        if(session()->get('id')>0) {

        $model=new M_model();
        $where=array('id_album'=>$id);
        $model->hapus('album',$where);

        return redirect()->to('/My_Gallery');

        }else{
            return redirect()->to('/');
        }
    }

    public function image()
    {
        $model=new M_model();
        $kategori=$this->request->getPost('kategori');
        $nama_gallery=$this->request->getPost('nama_gallery');
        $chose_album=$this->request->getPost('id_album');   
        $maker_gallery=session()->get('id');
        $data=array(

            'kategori'=>$kategori,
            'nama_gallery'=>$nama_gallery,
            'id_album_gallery'=>$chose_album,
            'maker_gallery'=>$maker_gallery
        );

        try {
            $foto = $this->request->getFile('gallery');
            if ($foto && $foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . '/public/gallery/', $newName);
                $data['gallery'] = $newName; 
            }

            $model->simpan('gallery',$data);
            return redirect()->to('/My_Gallery');
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }   
    }

    public function our_gallery($id)
    {
        if(session()->get('id')>0) {

        $model=new M_model();
        $where2=array('album.id_album'=>$id); 
        $on='gallery.id_album_gallery=album.id_album';
        $data['data']=$model->our_gallery('gallery', 'album', $on, $where2);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        $where=array('id_user' => session()->get('id'));
        $data['foto']=$model->getRow('user',$where);

        echo view('layout/our_gallery', $data);

        }else{
            return redirect()->to('/');
        }
    }

    public function delete_gallery($id)
    {
        if(session()->get('id')>0) {

        $model=new M_model();
        $where=array('id_gallery'=>$id);
        $model->hapus('gallery',$where);

        return redirect()->to('/My_Gallery');

        }else{
            return redirect()->to('/');
        }
    }
}
