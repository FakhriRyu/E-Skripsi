@extends('layouts.adminapp')

@section('container')
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form method="POST" action="{{ route('admin.dosen.update', $dosen->id) }}">
    @csrf
    @method('PUT')
    <div class="flex items-center mt-3 justify-center">
        <div class="w-full max-w-md bg-white shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Ubah Data Dosen</h2>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Dosen</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $dosen->name) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan nama" required>
                    </div>
                    <div>
                        <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="NIP" name="NIP" value="{{ old('NIP', $dosen->NIP) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Email" readonly required>
                    </div>
                    <div>
                        <label for="NomorNIP"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                        <input type="text" id="NomorNIP" name="NomorNIP" value="{{ old('NIP', $dosen->NomorNIP) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan NIP" required>
                    </div>
                </div>
                
                <div class="grid grid-cols-4 gap-3">
                    <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah</button>
                </div>
            </div>
        </div>
    </form>
    @endsection
    