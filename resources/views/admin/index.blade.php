@extends('layouts.adminapp')

@section('container')
<div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    Selamat Datang, Admin!
</div>
<div class="flex space-x-4 mt-4">
    <a href="/admin/mahasiswa"
    class="flex-1 max-w-sm p-6 bg-yellow-400 border rounded-lg shadow hover:bg-yellow-600 dark:bg-yellow-700 dark:border-yellow-700 dark:hover:bg-yellow-800">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Total Mahasiswa</h5>
            <p class="font-bold text-5xl text-white dark:text-white">{{ $totalMahasiswa }}</p>
        </a>

        <a href="/admin/dosen"
        class="flex-1 max-w-sm p-6 bg-green-500 border rounded-lg shadow hover:bg-green-600 dark:bg-green-700 dark:border-green-700 dark:hover:bg-green-800">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Total Dosen</h5>
        <p class="font-bold text-5xl text-white dark:text-white">{{ $totalDosen }}</p>
    </a>

    <a href="/admin/user"
            class="flex-1 block max-w-sm p-6 bg-blue-500 border rounded-lg shadow hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:hover:bg-blue-800">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Total User</h5>
            <p class="font-bold text-5xl text-white dark:text-white">{{ $totalUser }}</p>
        </a>
</div>
@endsection
