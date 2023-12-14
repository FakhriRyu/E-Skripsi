<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Bimbingan;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MonitoringDosenController extends Controller
{
    function index()
{
    $user = Auth::user();
    // $dosen =$user->dosen;
    // $p = Pembimbing::where('NIP', $user->username);

    // dd($dosen); 

    // dd($user);
    // $pembimbing = Bimbingan::where('dosen_id', $dosen->id)
    // ->get();
    // Get the Pembimbing based on the NIP (username) of the authenticated user
    $pembimbing = Pembimbing::with('dosen1', 'dosen2')->whereHas('dosen1', function ($query) use ($user) {
        $query->where('NIP', $user->username);
    })->orWhereHas('dosen2', function ($query) use ($user) {
        $query->where('NIP', $user->username);
    })->get();

    // dd($pembimbing);

    // Check if Pembimbing is not null before accessing its properties
    if ($pembimbing) {
        // Get the Dosen associated with the Pembimbing
        // $dosen1 = $pembimbing->dosen1;
        // $dosen2 = $pembimbing->dosen2;


        // // Get all students associated with the Pembimbing
        // $students = $pembimbing->mahasiswas;

        // Pass data to the view
        return view('dosens.monitoring.index', compact('pembimbing'));
        // return view('dosens.monitoring', ['dosen1' => $dosen1, 'dosen2' => $dosen2, 'pembimbing' => $pembimbing, 'students' => $students]);
    } else {
        // Handle the case where no Pembimbing is found
        return view('dosens.monitoring.index');
    }
}

public function show($id)
    {
        // Get the Pembimbing based on the provided ID
        $pembimbing = Pembimbing::findOrFail($id);
        // Additional logic or data retrieval for the show function can be added here

        // Pass data to the view
        return view('dosens.monitoring.show', compact('pembimbing'));
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
            $bimbingan = Bimbingan::findOrFail($id);
            // $pembimbing = Pembimbing::findOrFail($id);

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
