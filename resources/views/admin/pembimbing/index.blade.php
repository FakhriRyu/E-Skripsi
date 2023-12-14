@extends('layouts.adminapp')

@section('container')
<div class="grid grid-cols-8 gap-4 mb-4">
    <a href="{{ route('admin.pembimbing.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Data</a>
</div>

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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection