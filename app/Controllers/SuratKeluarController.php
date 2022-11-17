<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratKeluar;
use App\Models\Instansi;


class SuratKeluarController extends BaseController
{
    public function index()
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();

        $data = [
            'title' => 'Surat Keluar',
            'suratkeluar' => $suratkeluar,
            'instansi' => $instansi
        ];

        return view('templates/header', $data)
            . view('suratkeluar/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();

        $data = [
            'title' => 'Create Surat Keluar',
            'suratkeluar' => $suratkeluar,
            'instansi' => $instansi
        ];

        return view('templates/header', $data)
            . view('suratkeluar/create', $data)
            . view('templates/footer');
    }

    public function store()
    {
        if (!$this->validate([
            'no_surat' => 'required',
            'id_instansi' => 'required',
            'tujuan_surat' => 'required',
            'pengirim_surat' => 'required',
            'tgl_kirim_surat' => 'required',
            'tgl_surat' => 'required',

        ])) {
            return redirect()->to('/create');
        }
        $suratKeluarModel = new SuratKeluar();
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'id_instansi' => $this->request->getPost('id_instansi'),
            'tujuan_surat' => $this->request->getPost('tujuan_surat'),
            'pengirim_surat' => $this->request->getPost('pengirim_surat'),
            'tgl_kirim_surat' => $this->request->getPost('tgl_kirim_surat'),
            'tgl_surat' => $this->request->getPost('tgl_surat'),

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
        //$instansiId = $suratMasukModel->find($id_instansi);
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
            'no_surat' => 'required',
            'id_instansi' => 'required',
            'tujuan_surat' => 'required',
            'pengirim_surat' => 'required',
            'tgl_kirim_surat' => 'required',
            'tgl_surat' => 'required',
        ])) {
            return redirect()->to('/suratkeluar');
        }
        $suratKeluarModel = new SuratKeluar();
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'id_instansi' => $this->request->getPost('id_instansi'),
            'tujuan_surat' => $this->request->getPost('tujuan_surat'),
            'pengirim_surat' => $this->request->getPost('pengirim_surat'),
            'tgl_kirim_surat' => $this->request->getPost('tgl_kirim_surat'),
            'tgl_surat' => $this->request->getPost('tgl_surat'),
        ];

        $suratKeluarModel->update($id_surat_keluar, $data);
        return redirect()->to('/suratkeluar');
    }
}
