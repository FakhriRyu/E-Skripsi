<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Dosen;
use App\Models\Bimbingan;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MonitoringDosenController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Get the Dosen based on the NIP (username) of the authenticated user
        $dosen = Dosen::where('NIP', $user->username)->first();

        // Check if Dosen is not null before accessing its properties
        if ($dosen) {
            // Get the mahasiswa with a relationship to $dosen as either dosen1 or dosen2
            $mahasiswas = Mahasiswa::whereHas('pembimbings', function ($query) use ($dosen) {
                $query->where('dosen1_id', $dosen->id)
                    ->orWhere('dosen2_id', $dosen->id);
            })->get();

            // dd($mahasiswas);

            // Pass data to the view
            return view('dosens.monitoring.index', compact('mahasiswas'));
        } else {
            // Handle the case where no Dosen is found
            return view('dosens.monitoring.index');
        }
    }


    public function show($id)
    {
        // Get the Pembimbing based on the provided ID
        $dosen = Dosen::where('NIP', '=', auth()->user()->username)->first();
        $mahasiswa = Mahasiswa::findOrFail($id);

        $bimbingans = Bimbingan::where('mahasiswa_id', $mahasiswa->id)
            ->where(function ($query) use ($dosen) {
                $query->where('dosen_id', $dosen->id);
            })
            ->get();

        // dd($mahasiswa);
        // dd($bimbingans);

        // Additional logic or data retrieval for the show function can be added here
        // Pass data to the view
        return view('dosens.monitoring.show', compact('mahasiswa', 'bimbingans'));
    }



    public function show2($id, $idp)
    {

        // Get the Pembimbing based on the provided ID
        $bimbingan = Bimbingan::findOrFail($idp);

        // Additional logic or data retrieval for the show function can be added here

        // Pass data to the view
        return view('dosens.monitoring.detail', compact('bimbingan'));
    }


    public function update(Request $request, $id, $idp)
{
    try {
        // dd($request);
        // Validasi input form jika diperlukan
        $request->validate([
            'file_revisi' => 'nullable|file|mimes:pdf,doc,docx',
            'status' => 'required|in:Menunggu Konfirmasi,ACC,Revisi',
            'keterangan' => 'nullable|string',
            'waktu2' => 'nullable|date',
        ]);

        // Temukan Bimbingan berdasarkan ID yang diberikan
        $bimbingan = Bimbingan::findOrFail($idp);
        
        // Perbarui kolom non-file berdasarkan data yang diterima dari permintaan

        // Periksa apakah ada file revisi yang dikirimkan melalui permintaan
        if ($request->hasFile('file_revisi')) {
            // Menyimpan file revisi ke direktori 'revisi_files' di penyimpanan Laravel
            $fileRevisiPath = $request->file('file_revisi')->store('revisi_files', 'public');

            // Perbarui kolom 'file_revisi' pada model Bimbingan
            $bimbingan->file_revisi = $fileRevisiPath;
        }

        // Simpan perubahan yang telah dibuat pada model Bimbingan
        $bimbingan->save();

        return redirect()->route('dosens.monitoring.detail', ['id' => $id, 'idp' => $bimbingan->id])
            ->with('success', 'Bimbingan updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
    }
}



    // Edit method to display the edit form for Bimbingan
    public function edit($id, $idp)
    {
        // Get the Bimbingan based on the provided ID
        $bimbingan = Bimbingan::findOrFail($idp);
        $pembimbing = Pembimbing::findOrFail($id);

        // Return the view with the Bimbingan data
        return view('dosens.monitoring.edit', compact('bimbingan', 'pembimbing'));
    }
}
