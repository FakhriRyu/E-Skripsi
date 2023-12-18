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
        ->orderByDesc('waktu1') // Add this line to sort by waktu1 in descending order
        ->get();

        // dd($mahasiswa);
        // dd($bimbingans);

        // Additional logic or data retrieval for the show function can be added here
        // Pass data to the view
        return view('dosens.monitoring.show', compact('mahasiswa', 'bimbingans'));
    }



    public function show2($id, $idp)
    {

        // dd($idp);

        // Get the Pembimbing based on the provided ID
        $bimbingan = Bimbingan::findOrFail($idp);

        // Additional logic or data retrieval for the show function can be added here

        // Pass data to the view
        return view('dosens.monitoring.detail', compact('bimbingan'));
    }
    public function edit($id, $idp)
    {
        // Get the Bimbingan based on the provided ID
        $bimbingan = Bimbingan::find($idp);
        $pembimbing = Pembimbing::find($id);

        // dd($pembimbing);

        // Return the view with the Bimbingan data
        return view('dosens.monitoring.edit', compact('bimbingan', 'pembimbing'));
    }

    public function update(Request $request, $id, $idp)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'status' => 'required|in:Menunggu Konfirmasi,ACC,Revisi',
            'waktu2' => 'nullable|date',
            'keterangan' => 'nullable|string',
            // 'file_revisi' => 'file|mimes:pdf,doc,docx',
            // Add any other validation rules as needed
        ]);
        

        try {

        $bimbingan = Bimbingan::find($idp);
        $bimbingan->update([
            // 'judul' => $request->input('judul'),
            // 'bagian' => $request->input('bagian'),
            'status' => $request->input('status'),
            'waktu2' => $request->input('waktu2'),
            'keterangan' => $request->input('keterangan'),
            // 'file_revisi' => $request->input('file_revisi')->store('revisi_files'),
            // 'waktu2' => $request->input('waktu2'), 
            // Add any other non-file fields here
        ]);
        if ($request->hasFile('file_revisi')) {
            // Delete the old file
            Storage::delete($bimbingan->file_revisi);
            // Store the new file
            $bimbingan->file_revisi = $request->file('file_revisi')->store('revisi_files');
        }
        // Save the changes
        $bimbingan->save();
        return redirect()->route('dosens.monitoring.detail', ['id' => $id, 'idp' => $bimbingan->id])
            ->with('success', 'Bimbingan updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
    }
}


}
