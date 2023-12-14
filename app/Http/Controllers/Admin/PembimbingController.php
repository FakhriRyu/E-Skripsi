<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembimbingController extends Controller
{
    public function index()
    {
        $pembimbings = Pembimbing::with('mahasiswa', 'dosen1', 'dosen2')->get();
        return view("admin.pembimbing.index", compact('pembimbings'));
    }
    
    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all(); 
        return view('admin.pembimbing.create', compact('mahasiswas', 'dosens'));
    }
    
    public function store(Request $request)
    {
        try {
            // Validasi data
            $validatedData = $request->validate([
                'mahasiswa_id' => 'required|exists:mahasiswas,id',
                'dosen1_id' => 'required|exists:dosens,id',
                'dosen2_id' => 'required|exists:dosens,id',
            ]);
            
            // Simpan data ke database
            Pembimbing::create($validatedData);
            
            // Redirect ke halaman index atau tampilkan pesan sukses
            return redirect()->route('admin.pembimbing.index')->with('success', 'Data Pembimbing berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Handle exceptions or log them
            return redirect()->route('admin.pembimbing.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
