@extends('layouts.mahasiswaapp')

@section('containermahasiswa')

    <h1>Welcome, {{ $mahasiswa->name }}!</h1>
    <p>NPM: {{ $mahasiswa->NPM }}</p>
    <p>Judul: {{ $mahasiswa->Judul }}</p>

    <!-- Other content for the Mahasiswa dashboard -->

@endsection
