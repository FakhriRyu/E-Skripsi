@extends('layouts.adminapp')

@section('container')

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
                    Judul
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Fakhri Alwan
                </td>
                <td class="px-6 py-4">
                    G1A021050
                </td>
                <td class="px-6 py-4">
                    Aplikasi Pendeteksi Rezeki
                </td>
                <td class="px-6 py-4">
                    Boko Susilo
                </td>
                <td class="px-6 py-4">
                    Rusdi Effendi
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection