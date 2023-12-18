<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
{
    $totalMahasiswa = Mahasiswa::count();
    $totalDosen = Dosen::count();
    $totalUser = User::count();

    return view('admin.index', compact('totalMahasiswa', 'totalDosen', 'totalUser'));
}
}
