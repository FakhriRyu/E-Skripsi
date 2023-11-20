<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        // Get the currently authenticated Mahasiswa
        $mahasiswa = Mahasiswa::where('NPM', Auth::user()->username)->first();

        return view('mahasiswas.index', compact('mahasiswa'));
    }
}



