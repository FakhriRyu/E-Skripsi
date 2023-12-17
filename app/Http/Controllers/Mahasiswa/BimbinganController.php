<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Bimbingan;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BimbinganController extends Controller {
    public function index() {
        // Get the authenticated user
        $user = Auth::user();
        
        // Get the Pembimbing based on the NPM (username) of the authenticated user
        $pembimbing = Pembimbing::with('mahasiswa')->whereHas('mahasiswa', function ($query) use ($user) {
            $query->where('NPM', $user->username);
        })->first();
        
        
        // Get the Mahasiswa associated with the Pembimbing
        $mahasiswa = $pembimbing->mahasiswa;

        $dosen1 = $pembimbing->dosen1;
        $dosen2 = $pembimbing->dosen2;
        
        
        $bimbingans = $pembimbing->bimbingans()->orderByDesc('waktu1')->get();
        
        // Pass the Mahasiswa, Pembimbing, and Bimbingans data to the view
        return view('mahasiswas.monitoring', [
            'mahasiswa' => $mahasiswa,
            'pembimbing' => $pembimbing,
            'dosen1' => $dosen1,
            'dosen2' => $dosen2,
            'bimbingans' => $bimbingans,
        ]);
    }
    
    public function create() {
        // $user = Auth::user();

        // $pembimbing = Pembimbing::with('mahasiswa')->whereHas('mahasiswa', function ($query) use ($user) {
        //     $query->where('NPM', $user->username);
        // })->first();

        // $mahasiswa = $pembimbing->mahasiswa;

        // $dosen1 = $pembimbing->dosen1;
        // $dosen2 = $pembimbing->dosen2;
        
        // return view('mahasiswas.monitoring', ['mahasiswa' => $mahasiswa, 'pembimbing' => $pembimbing, 'dosen1' => $dosen1 , 'dosen2' => $dosen2]);
    }
    
    public function store(Request $request) {
        try {
            // dd($request);
            // Validate the incoming request data
            $validatedData = $request->validate([
                'mahasiswa_id' => 'required',
                'judul' => 'nullable',
                'bagian' => 'required',
                'dosen_id' => 'required',
                'file_skripsi' => 'required|file|mimes:pdf,doc,docx',
                'waktu1' => 'required|date',
            ]);
            
            // Get the authenticated user
            $user = Auth::user();
            
            // Get the Pembimbing based on the NPM (username) of the authenticated user
            $pembimbing = Pembimbing::with('mahasiswa')->whereHas('mahasiswa', function ($query) use ($user) {
                $query->where('NPM', $user->username);
            })->first();

            
            
            // Store the Skripsi data in the database
            $bimbingan = new Bimbingan([
                'mahasiswa_id' => $validatedData['mahasiswa_id'],
                'judul' => $validatedData['judul'],
                'bagian' => $validatedData['bagian'],
                'dosen_id' => $validatedData['dosen_id'],
                'file_skripsi' => $validatedData['file_skripsi']->store('skripsi_files'),
                'waktu1' => $validatedData['waktu1'],
            ]);
            
            // Associate the Bimbingan with the Pembimbing
            $pembimbing->bimbingans()->save($bimbingan);
            
            return redirect()->route('mahasiswa.monitoring')->with('success', 'Data skripsi berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: '.$e->getMessage())->withInput();
        }
    }
    
    public function show($id) {
        try {
            // Get the authenticated user
            $user = Auth::user();
            
            // Get the Bimbingan based on the ID and the association with the Pembimbing
            $bimbingan = Pembimbing::with('bimbingans')->whereHas('mahasiswa', function ($query) use ($user) {
                $query->where('NPM', $user->username);
            })->firstOrFail()->bimbingans()->findOrFail($id);
            
            // You can add additional logic here if needed
            
            // Pass the Bimbingan data to the view
            return view('mahasiswas.bimbingan.show', [
                'bimbingan' => $bimbingan
            ]);
        } catch (\Exception $e) {
            // Handle the exception as needed
            return redirect()->back()->with('error', 'Terjadi kesalahan: '.$e->getMessage());
        }
    }
    
    public function downloadSkripsi($filename) {
        $filePath = 'skripsi_files/'.$filename;
        if(Storage::exists($filePath)) {
            return response()->file(storage_path("app/{$filePath}"));
        }
        
        abort(404, 'File not found');
    }
    
}
