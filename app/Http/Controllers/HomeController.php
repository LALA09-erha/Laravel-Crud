<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        #mengambil data dari database mahasiswa
        $mahasiswa = \App\Models\MahasiswaModel::all();
        #memanggil view index.blade.php
        return view('pages.tampil', ['mahasiswa' => $mahasiswa]);
    }
}