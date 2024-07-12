<?php

namespace App\Controllers;

use App\Models\MakananModel;
use CodeIgniter\Controller;

class MakananController extends Controller
{
    public function index()
    {
        $model = new MakananModel();
        $data['cepatsajis'] = $model->findAll();

        return view('makanan/halaman_utama', $data);
    }

    public function create()
    {
        return view('makanan/tambah_makanan');
    }

    public function store()
    {
        $model = new MakananModel();

        $data = [
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'review' => $this->request->getPost('review')
        ];

        $model->insert($data);
        return redirect()->to('/makanan');
    }

    public function edit($id)
    {
        $model = new MakananModel();
        $data['cepat_saji'] = $model->find($id);

        return view('makanan/edit_makanan', $data);
    }

    public function update($id)
    {
        $model = new MakananModel();

        
        $data = [
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'review' => $this->request->getPost('review')
        ];

        $model->update($id, $data);
        return redirect()->to('/makanan');
    }

    public function delete($id)
    {
        $model = new MakananModel();
        $model->delete($id);
        return redirect()->to('/makanan');
    }

  
}
