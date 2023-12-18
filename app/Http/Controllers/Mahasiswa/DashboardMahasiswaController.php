<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Bimbingan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        // Get the currently authenticated Mahasiswa
        $mahasiswa = Mahasiswa::where('NPM', Auth::user()->username)->first();

        // Get the latest bimbingan status
        $latestBimbinganStatus = Bimbingan::where('mahasiswa_id', $mahasiswa->id)
            ->latest('waktu1')
            ->value('status');

        // Get information about pembimbing
        $dosenPembimbing1 = $mahasiswa->pembimbings->first()->dosen1->name;
        $dosenPembimbing2 = $mahasiswa->pembimbings->first()->dosen2->name;

        return view('mahasiswas.index', compact('mahasiswa', 'latestBimbinganStatus', 'dosenPembimbing1', 'dosenPembimbing2'));
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'judul' => 'required',
        ]);

        $mahasiswa = Mahasiswa::where('NPM', Auth::user()->username)->first();
        $mahasiswa->judul = $request->input('judul');

        $mahasiswa->save();

        return redirect()->route('mahasiswa.dashboard')->with('success', 'Profil berhasil diperbarui');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $mahasiswa = Auth::user();
        $mahasiswa->password = Hash::make($request->input('password'));
        $mahasiswa->save();

        return redirect()->route('mahasiswa.dashboard')->with('success', 'Password berhasil diperbarui');
    }


}



