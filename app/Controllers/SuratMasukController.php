<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratMasuk;

class SuratMasukController extends BaseController
{
    public function index()
    {
        $suratMasukModel = new SuratMasuk();
        $suratmasuk = $suratMasukModel->findAll();

        $data = [
            'title' => 'Surat Masuk',
            'suratmasuk' => $suratmasuk
        ];

        return view('templates/header', $data)
            . view('suratmasuk/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create Surat Masuk'
        ];

        return view('templates/header', $data)
            . view('suratmasuk/create', $data)
            . view('templates/footer');
    }

    public function store()
    {
        if (!$this->validate([
            'no_surat' => 'required',
            'tgl_terima_surat' => 'required',
            'tgl_surat' => 'required',
            'asal_surat' => 'required',
            'isi_surat' => 'required',
            'keterangan_surat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $suratMasukModel = new SuratMasuk();
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'tgl_terima_surat' => $this->request->getPost('tgl_terima_surat'),
            'tgl_surat' => $this->request->getPost('tgl_surat'),
            'asal_surat' => $this->request->getPost('asal_surat'),
            'isi_surat' => $this->request->getPost('isi_surat'),
            'keterangan_surat' => $this->request->getPost('keterangan_surat')
        ];

        $suratMasukModel->save($data);
        return redirect()->to('/suratmasuk');
    }

    public function delete($id)
    {
        $suratMasukModel = new SuratMasuk();
        $suratMasukModel->delete($id);

        return redirect()->to('/suratmasuk');
    }

    public function edit($id)
    {
        $suratMasukModel = new SuratMasuk();
        $suratmasuk = $suratMasukModel->find($id);

        $data = [
            'title' => 'Edit Surat Masuk'
        ];

        return view('templates/header', $data)
            . view('suratmasuk/edit', $suratmasuk)
            . view('templates/footer');
    }

    public function update($id)
    {
        if (!$this->validate([
            'no_surat' => 'required',
            'isi_surat' => 'required',
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $suratMasukModel = new SuratMasuk();
        $data = [
            'no_surat' => $this->request->getVar('no_surat'),
            'isi_surat' => $this->request->getVar('isi_surat'),
        ];

        $suratMasukModel->update($id, $data);
        return redirect()->to('/suratmasuk');
    }
}
