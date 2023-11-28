<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    function index()
    {
        return view('dosens.index');
    }
}
