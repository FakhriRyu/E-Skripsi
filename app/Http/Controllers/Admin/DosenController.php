<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        
        return view("admin.dosen.index", compact('dosens'));
    }
    
    public function create()
    {
        return view("admin.dosen.create");
    }
    
    public function store(Request $request)
    {
        try {
            // Validasi data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'NIP' => 'required|string|unique:dosens,nip',
                'password' => 'required|string',
            ]);
            
            // Simpan data ke database
            Dosen::create($validatedData);
            
            // Redirect ke halaman index
            return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen berhasil ditambahkan.');
        } catch (QueryException $e) {
            // Check for foreign key constraint violation
            if (strpos($e->getCode(), '23000') !== false) {
                return redirect()->route('admin.dosen.create')->with('error', 'NIP belum terdaftar.');
            }
            
            // Handle other exceptions or log them
            return redirect()->route('admin.dosen.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        
        
    }
    
    /**
    * Display the specified resource.
    */
    public function show(string $id)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        //
    }
}
