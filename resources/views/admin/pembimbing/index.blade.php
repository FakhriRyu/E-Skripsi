@extends('layouts.adminapp')

@section('container')
<div class="grid grid-cols-8 gap-4 mb-4">
    <a href="{{ route('admin.pembimbing.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Data</a>
</div>

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Mahasiswa
                </th>
                <th scope="col" class="px-6 py-3">
                    NPM
                </th>
                <th scope="col" class="px-6 py-3">
                    Pembimbing Utama
                </th>
                <th scope="col" class="px-6 py-3">
                    Pembimbing Pendamping
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembimbings as $pembimbing)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pembimbing->mahasiswa->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $pembimbing->mahasiswa->NPM }}
                </td>
                <td class="px-6 py-4">
                    {{ $pembimbing->dosen1->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $pembimbing->dosen2->name }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.pembimbing.edit', $pembimbing->id) }}" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Edit</a>
                    <form action="{{ route('admin.pembimbing.destroy', $pembimbing->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
