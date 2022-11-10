<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('dashboard/index')
            . view('templates/footer');
    }
}
