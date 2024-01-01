<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Panitia as PanitiaModel;

class Panitia extends BaseController
{
    public function index()
    {
        $model  = new PanitiaModel();
        $data   = [
            'Panitia' => $model->getPanitia(),
        ];
        return view('Panitia', $data);
    }

    public function create() {
        return view('add');
    }

    public function save() {
        $model  = new PanitiaModel();
        $data   = [
            'npm' => $this->request->getPost('npm'), 
            'nama' => $this->request->getPost('nama'), 
            'alamat' => $this->request->getPost('alamat'), 
            'tgl_lhr' => $this->request->getPost('tgl_lhr'), 
            'divisi' => $this->request->getPost('divisi'),
            'jabatan' => $this->request->getPost('jabatan'),
        ];
        $model->savePanitia($data);
        return redirect()->to('Panitia');
    }

    public function edit($id) {
        $model  = new PanitiaModel();
        $data   = [
            'Panitia' => $model->getPanitia($id),
        ];
        return view('edit',$data);
    }
    
    public function update($id) {
        $model  = new PanitiaModel();
        $data   = [
            'npm' => $this->request->getPost('npm'), 
            'nama' => $this->request->getPost('nama'), 
            'alamat' => $this->request->getPost('alamat'), 
            'tgl_lhr' => $this->request->getPost('tgl_lhr'), 
            'divisi' => $this->request->getPost('divisi'),
            'jabatan' => $this->request->getPost('jabatan'),
        ];
        $model->updatePanitia($id, $data);
        return redirect()->to('Panitia');
    }

    public function delete($id) {
        $model  = new PanitiaModel();
        $model->deletePanitia($id);
        return redirect()->to('Panitia');
    }
}