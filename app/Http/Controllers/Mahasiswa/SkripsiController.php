<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    function index()
    {
        return view('mahasiswas.index');
    }
}
