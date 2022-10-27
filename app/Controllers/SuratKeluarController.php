<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratKeluar;

class SuratKeluarController extends BaseController
{
    public function index()
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->findAll();

        $data = [
            'title' => 'Surat Keluar',
            'suratkeluar' => $suratkeluar
        ];

        return view('templates/header', $data)
            . view('suratkeluar/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create Surat Keluar'
        ];

        return view('templates/header', $data)
            . view('suratkeluar/create', $data)
            . view('templates/footer');
    }

    public function store()
    {
        $koneksi = mysqli_connect("localhost", "root", "", "teoweblanjut");
        if (!$this->validate([
            'id_surat_masuk' => 'required',
            'isi_surat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $suratKeluarModel = new SuratKeluar();
        $data = [
            'id_surat_masuk' => $this->request->getPost('id_surat_masuk'),
            'isi_surat' => $this->request->getPost('isi_surat')
        ];

        $suratKeluarModel->save($data);
        return redirect()->to('/suratkeluar');
    }

    public function delete($id_surat_keluar)
    {
        $suratKeluarModel = new SuratKeluar();
        $suratKeluarModel->delete($id_surat_keluar);

        return redirect()->to('/suratkeluar');
    }

    public function edit($id_surat_keluar)
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->find($id_surat_keluar);

        $data = [
            'title' => 'Edit Surat Keluar'
        ];

        return view('templates/header', $data)
            . view('suratkeluar/edit', $suratkeluar)
            . view('templates/footer');
    }

    public function update($id_surat_keluar)
    {
        if (!$this->validate([
            'id_surat_keluar' => 'required',
            'isi_surat' => 'required',
        ])) {
            return redirect()->to('/edit/' . $id_surat_keluar);
        }
        $suratKeluarModel = new SuratKeluar();
        $data = [
            'id_surat_keluar' => $this->request->getVar('id_surat_keluar'),
            'isi_surat' => $this->request->getVar('isi_surat'),
        ];

        $suratKeluarModel->update($id_surat_keluar, $data);
        }
    }