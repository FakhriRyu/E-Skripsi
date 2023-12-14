@extends('layouts.dosenapp')

@section('containerdosen')

<div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    Selamat Datang, {{ $dosen->name }}! <br>
    NIP: {{ $dosen->NomorNIP }}
</div>

@endsection
