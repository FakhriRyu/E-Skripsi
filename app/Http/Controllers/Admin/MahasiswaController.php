<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return view("admin.mahasiswa.index", compact('mahasiswas'));
    }

    public function create()
    {
        return view("admin.mahasiswa.create");
    }

    public function store(Request $request)
{
    try {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'NPM' => 'required|string|unique:mahasiswas,npm',
            'Judul' => 'required|string',
        ]);

        // Simpan data ke database
        Mahasiswa::create($validatedData);

        // Redirect ke halaman index
        return redirect()->route('admin.mahasiswa.index')->with('success', 'Data Mahasiswa berhasil ditambahkan.');
    } catch (QueryException $e) {
        // Check for foreign key constraint violation
        if (strpos($e->getCode(), '23000') !== false) {
            return redirect()->route('admin.mahasiswa.create')->with('error', 'NPM belum terdaftar.');
        }

        // Handle other exceptions or log them
        return redirect()->route('admin.mahasiswa.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

// MahasiswaController.php

public function edit($id)
{
    $mahasiswa = Mahasiswa::find($id);
    return view('admin.mahasiswa.edit', compact('mahasiswa'));
}

public function update(Request $request, $id)
{
    // Validasi data
    $validatedData = $request->validate([
        'name' => 'required|string',
        'NPM' => 'required|string|unique:mahasiswas,npm,' . $id,
        'Judul' => 'required|string',
        'Password' => 'required|string',
    ]);

    // Update data in the database
    Mahasiswa::where('id', $id)->update($validatedData);

    // Redirect back to the index page or show a success message
    return redirect()->route('admin.mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui.');
}

// MahasiswaController.php

public function destroy($id)
{
    // Find the Mahasiswa by ID
    $mahasiswa = Mahasiswa::find($id);

    // Check if Mahasiswa exists
    if (!$mahasiswa) {
        return redirect()->route('admin.mahasiswa.index')->with('error', 'Data Mahasiswa tidak ditemukan.');
    }

    // Delete the Mahasiswa
    $mahasiswa->delete();

    // Redirect back to the index page or show a success message
    return redirect()->route('admin.mahasiswa.index')->with('success', 'Data Mahasiswa berhasil dihapus.');
}



}
