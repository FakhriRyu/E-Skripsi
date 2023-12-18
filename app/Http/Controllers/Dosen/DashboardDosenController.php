<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardDosenController extends Controller
{
    function index()
    {

        $dosen = Dosen::where('NIP', Auth::user()->username)->first();
        $jumlahMahasiswa = $this->hitungJumlahMahasiswa($dosen);
        $jumlahMahasiswaMenunggu = $this->hitungJumlahMahasiswaMenunggu($dosen);
        $totalBimbingan = $this->getTotalBimbingan($dosen);

        return view('dosens.index', compact('dosen', 'jumlahMahasiswa', 'jumlahMahasiswaMenunggu', 'totalBimbingan'));
    }
    private function hitungJumlahMahasiswa(Dosen $dosen)
    {
        return Mahasiswa::whereHas('pembimbings', function ($query) use ($dosen) {
            $query->where('dosen1_id', $dosen->id)
                ->orWhere('dosen2_id', $dosen->id);
        })->count();
    }
    private function hitungJumlahMahasiswaMenunggu(Dosen $dosen)
{
    return Mahasiswa::whereHas('pembimbings', function ($query) use ($dosen) {
        $query->where('dosen1_id', $dosen->id)
            ->orWhere('dosen2_id', $dosen->id);
    })->whereHas('bimbingans', function ($query) {
        $query->where('status', 'Menunggu Konfirmasi');
    })->count();
}
private function getTotalBimbingan(Dosen $dosen)
    {
        return $dosen->bimbingans()->count();
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $dosen = Dosen::where('NIP', $user->username)->first();

        // Validate the incoming request data
        $request->validate([
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update User's password if provided
        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }

        return redirect()->route('dosen.dashboard')->with('success', 'Profile updated successfully');
    }
}
