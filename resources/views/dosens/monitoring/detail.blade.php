@extends('layouts.dosenapp')

@section('containerdosen')
    <div class="max-w-2xl mx-auto p-8">
        <h2 class="text-2xl font-semibold mb-4">Detail Bimbingan</h2>

        <dl class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">Judul</dt>
                <dd class="text-lg">{{ $bimbingan->judul }}</dd>
            </div>

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">Bagian</dt>
                <dd class="text-lg">{{ $bimbingan->bagian }}</dd>
            </div>

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">File Skripsi</dt>
                <dd class="text-lg">
                    <a href="{{ route('download.skripsi', ['filename' => explode("skripsi_files/", $bimbingan->file_skripsi)[1]]) }}" class="text-blue-500 hover:underline">
                        Download Skripsi
                    </a>
                </dd>
            </div>
            
            

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">Pembimbing</dt>
                <dd class="text-lg">{{ optional($bimbingan->pembimbing)->dosen1->name }}</dd>
            </div>

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">Waktu dan Tanggal</dt>
                <dd class="text-lg">
                    {{ $bimbingan->waktu1 }}
                </dd>
            </div>

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">file revisi</dt>
                <dd class="text-lg">{{ $bimbingan->file_revisi }}</dd>
            </div>

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="text-lg">{{ $bimbingan->status }}</dd>
            </div>

            <div class="mb-4">
                <dt class="text-sm font-medium text-gray-500">waktu2</dt>
                <dd class="text-lg">{{ $bimbingan->waktu2 }}</dd>
            </div>

        </dl>
    </div>
@endsection
