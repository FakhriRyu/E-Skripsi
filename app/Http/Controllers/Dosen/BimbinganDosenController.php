<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BimbinganDosenController extends Controller
{
    function index()
    {
        return view('dosens.bimbingan');
    }
}
