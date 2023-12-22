@extends('layouts.mahasiswaapp')

@section('containermahasiswa')
<div class="container mx-auto mt-5  bg-white max-w-4xl">

    <div class="flex space-x-9">

        <div class="w-full max-w-md bg-white shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Bimbingan Mahasiswa</h2>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $bimbingan->mahasiswa->name }}" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Waktu Bimbingan</label>
                <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ \Carbon\Carbon::parse($bimbingan->waktu1)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY H:mm') }}
                " readonly>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Bagian</label>
                <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $bimbingan->bagian }}" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Status</label>
                <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $bimbingan->status }}" readonly>
            </div>
            <form action="{{ route('download.skripsi', ['filename' => explode("skripsi_files/", $bimbingan->file_skripsi)[1]]) }}" method="get">
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                    Download Skripsi
                </button>
            </form>
            
        </div>

        <div class="w-full max-w-md bg-white shadow-md p-4">
            <h2 class="text-2xl font-semibold mb-4">Bimbingan Dosen</h2>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $bimbingan->dosen->name }}" readonly>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Waktu Konfirmasi</label>
                <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $bimbingan->waktu2 ?: 'belum dikonfirmasi' }}" readonly>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-600">Catatan</label>
                <textarea rows="4" class="block w-full mt-1 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" readonly>{{ $bimbingan->keterangan ?: 'Tidak ada deskripsi' }}</textarea>
            </div>
            {{-- @if ($bimbingan->file_revisi)
    <form action="{{ route('download.skripsi', ['filename' => explode("skripsi_files/", $bimbingan->file_revisi)[1]]) }}" method="get">
        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
            Download Revisi
        </button>
    </form>
@else
    <p>Belum ada file revisi untuk diunduh.</p>
@endif --}}

            
        </div>
    </div>
    </div>
@endsection
