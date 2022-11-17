<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratMasuk;
use App\Models\Instansi;


class SuratMasukController extends BaseController
{
    public function index()
    {
        $suratMasukModel = new SuratMasuk();
        $suratmasuk = $suratMasukModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();

        $data = [
            'title' => 'Surat Masuk',
            'suratmasuk' => $suratmasuk,
            'instansi' => $instansi
        ];

        return view('templates/header', $data)
            . view('suratmasuk/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $suratMasukModel = new SuratMasuk();
        $suratmasuk = $suratMasukModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();

        $data = [
            'title' => 'Create Surat Masuk',
            'suratmasuk' => $suratmasuk,
            'instansi' => $instansi
        ];

        return view('templates/header', $data)
            . view('suratmasuk/create', $data)
            . view('templates/footer');
    }

    public function store()
    {
        $koneksi = mysqli_connect("localhost", "root", "", "teoweblanjut");
        if (!$this->validate([
            'no_surat' => 'required',
            'tgl_terima_surat' => 'required',
            'tgl_surat' => 'required',
            'id_instansi' => 'required',
            'asal_surat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $suratMasukModel = new SuratMasuk();
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'tgl_terima_surat' => $this->request->getPost('tgl_terima_surat'),
            'tgl_surat' => $this->request->getPost('tgl_surat'),
            'id_instansi' => $this->request->getPost('id_instansi'),
            'asal_surat' => $this->request->getPost('asal_surat'),
        ];

        $suratMasukModel->save($data);
        return redirect()->to('/suratmasuk');
    }

    public function delete($id_surat_masuk)
    {
        $suratMasukModel = new SuratMasuk();
        $suratMasukModel->delete($id_surat_masuk);

        return redirect()->to('/suratmasuk');
    }

    public function edit($id_surat_masuk)
    {
        $suratMasukModel = new SuratMasuk();
        $suratmasuk = $suratMasukModel->find($id_surat_masuk);
        //$instansiId = $suratMasukModel->find($id_instansi);
        $data = [
            'title' => 'Edit Surat Masuk'
        ];

        return view('templates/header', $data)
            . view('suratmasuk/edit', $suratmasuk)
            . view('templates/footer');
    }

    public function update($id_surat_masuk)
    {
        if (!$this->validate([
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'tgl_terima_surat' => 'required',
            'tgl_surat' => 'required',
            'id_instansi' => 'required',
        ])) {
            return redirect()->to('/suratmasuk');
        }
        $suratMasukModel = new SuratMasuk();
        $data = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tgl_terima_surat' => $this->request->getVar('tgl_terima_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'id_instansi' => $this->request->getVar('id_instansi'),
        ];

        $suratMasukModel->update($id_surat_masuk, $data);
        return redirect()->to('/suratmasuk');
    }
}
