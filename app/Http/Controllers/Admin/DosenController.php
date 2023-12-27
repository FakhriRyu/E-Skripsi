<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class DosenController extends Controller
{
    // DosenController.php

public function index(Request $request)
{
    $dosens = Dosen::when($request->search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
        ->orderBy('name') // Sort by name
        ->paginate(10);

    return view('admin.dosen.index', compact('dosens'));
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
                'NomorNIP' => 'required|string|',
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
    public function edit($id)
    {
        // Find the Dosen by ID
        $dosen = Dosen::find($id);

        // Check if Dosen exists
        if (!$dosen) {
            return redirect()->route('admin.dosen.index')->with('error', 'Data Dosen tidak ditemukan.');
        }

        return view('admin.dosen.edit', compact('dosen'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, $id)
    {
        try {
            // Validasi data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'NIP' => 'required|string|unique:dosens,nip,' . $id,
                'NomorNIP' => 'required|string|unique:dosens,nip,' . $id,

            ]);

            // Update data in the database
            Dosen::where('id', $id)->update($validatedData);

            // Redirect back to the index page or show a success message
            return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen berhasil diperbarui.');
        } catch (QueryException $e) {
            // Check for foreign key constraint violation
            if (strpos($e->getCode(), '23000') !== false) {
                return redirect()->route('admin.dosen.edit', $id)->with('error', 'NIP belum terdaftar.');
            }

            // Handle other exceptions or log them
            return redirect()->route('admin.dosen.edit', $id)->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        // Find the Dosen by ID
        $dosen = Dosen::find($id);

        // Check if Dosen exists
        if (!$dosen) {
            return redirect()->route('admin.dosen.index')->with('error', 'Data Dosen tidak ditemukan.');
        }

        // Delete the Dosen
        $dosen->delete();

        // Redirect back to the index page or show a success message
        return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen berhasil dihapus.');
    }
}
