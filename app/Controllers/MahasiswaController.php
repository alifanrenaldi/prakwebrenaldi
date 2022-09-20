<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('templates/header', $data)
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];

        return view('templates/header', $data)
            . view('mahasiswa/create')
            . view('templates/footer');
    }

    public function store()
    {
        if (!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $mahasiswaModel->save($data);

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->find($id);

        $data = [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswaModel->find($id)
        ];

        return view('templates/header', $data) .
            view('mahasiswa/edit', $data) .
            view('templates/footer');
    }
    public function update($id)
    {
        if (!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ])) {
            return redirect()->to('/edit/'.$id);
        }
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $mahasiswaModel->update($id, $data);

        return redirect()->to('/mahasiswa');
    }
}
