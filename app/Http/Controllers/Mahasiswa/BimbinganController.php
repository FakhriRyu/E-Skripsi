<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    function index()
    {
        return view('Mahasiswas.Bimbingan.index');
    }
}
