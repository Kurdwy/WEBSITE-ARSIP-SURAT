<?php

namespace App\Controllers;

class ProfilController extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('profil/index')
            . view('templates/footer');
    }
}
