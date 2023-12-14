<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardDosenController extends Controller
{
    function index()
    {

        $dosen = Dosen::where('NIP', Auth::user()->username)->first();
        return view('dosens.index', compact('dosen'));
    }
}
