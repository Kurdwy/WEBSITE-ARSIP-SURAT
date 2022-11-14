<?php

namespace App\Controllers;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;

class DashboardController extends BaseController
{
    public function index()
    {
        $suratMasukModel = new SuratMasuk();
        $suratKeluarModel = new SuratKeluar();

        $jumlah_suratMasuk =  $suratMasukModel->countAllResults();
        $jumlah_suratKeluar =  $suratKeluarModel->countAllResults();
        
        return view('templates/header')
            . view('dashboard/index', [
                'jumlah_suratMasuk'=>$jumlah_suratMasuk,
                'jumlah_suratKeluar'=>$jumlah_suratKeluar,
            ])
            . view('templates/footer');
    }
}
