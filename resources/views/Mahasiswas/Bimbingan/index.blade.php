@extends('layouts.mahasiswaapp')

@section('containermahasiswa')

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form method="POST" action="{{ route('mahasiswa.monitoring.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mahasiswa->name }}" readonly>
            <input type="hidden" id="mahasiswa_id" name="mahasiswa_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mahasiswa->id }}" readonly>
        </div>
        <div>
            <label for="bagian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bagian</label>
            <input type="text" id="bagian" name="bagian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : Bab 1" required>
        </div>
        <label for="dosen" class="block text-sm font-medium text-gray-900 dark:text-white">Dosen</label>
        <select name="dosen_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Dosen</option>
            <option value="{{ $dosen1->id }}">{{ $dosen1->name }}</option>
            <option value="{{ $dosen2->id }}">{{ $dosen2->name }}</option>
        </select>
        
        <div>
            <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>
            <input type="datetime-local" id="waktu1" name="waktu1" value="{{ now('Asia/Jakarta')->toDateTimeLocalString() }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input name="file_skripsi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>
    </div>
    <div class="grid grid-cols-5 gap-3">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>
</form>

@endsection
