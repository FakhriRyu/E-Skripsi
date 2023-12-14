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
            // Get the Pembimbing with relationships loaded
            $bimbingans = Bimbingan::with('mahasiswa') // Adjust the relationship name if needed
                ->where('dosen_id', $dosen->id)
                ->get();
            // Pass data to the view
            return view('dosens.monitoring.index', compact('bimbingans'));
        } else {
            // Handle the case where no Dosen is found
            return view('dosens.monitoring.index');
        }
    }


    public function show($id)
    {
        // Get the Pembimbing based on the provided ID
        // $pembimbing = Pembimbing::findOrFail($id)->where('dosen_id','=',auth()->user()->username);
        $dosen = Dosen::where('NIP','=',auth()->user()->username)->first();
        // dd($dosen->id);
        $bimbingans = Bimbingan::where('dosen_id','=',$dosen->id)->get();

        // dd(auth()->user());
        // Additional logic or data retrieval for the show function can be added here
        // Pass data to the view
        return view('dosens.monitoring.show', compact('bimbingans'));
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
        // Validate the incoming request data
        $request->validate([
            // 'judul' => 'required',
            // 'bagian' => 'required',
            // 'waktu1' => 'required|date',
            'status' => 'required',
            // 'waktu2' => 'required|date',
            'file_skripsi' => 'file|mimes:pdf,doc,docx',
            // 'file_revisi' => 'file|mimes:pdf,doc,docx',
            // Add any other validation rules as needed
        ]);

        try {
            // Find the Bimbingan based on the provided IDs
            $bimbingan = Bimbingan::findOrFail($idp);
            // $pembimbing = Pembimbing::findOrFail($id);
            // dd($bimbingan);
            // Update non-file fields
            $bimbingan->update([
                // 'judul' => $request->input('judul'),
                // 'bagian' => $request->input('bagian'),
                // 'waktu1' => $request->input('waktu1'),
                'status' => $request->input('status'),
                'keterangan' => $request->input('keterangan'),
                // 'waktu2' => $request->input('waktu2'),
                // Add any other non-file fields here
            ]);

            // Update the file_skripsi if a new file is provided
            // if ($request->hasFile('file_skripsi')) {
            //     // Delete the old file
            //     Storage::delete($bimbingan->file_skripsi);

            //     // Store the new file
            //     $bimbingan->file_skripsi = $request->file('file_skripsi')->store('skripsi_files');
            // }

            // Update the file_revisi if a new file is provided
            if ($request->hasFile('file_revisi')) {
                // Delete the old file
                Storage::delete($bimbingan->file_revisi);

                // Store the new file
                $bimbingan->file_revisi = $request->file('file_revisi')->store('revisi_files');
            }

            // Save the changes
            $bimbingan->save();

            return redirect()->route('dosens.monitoring.show2', ['id' => $id, 'idp' => $bimbingan->id])
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
