@extends('layouts.adminapp')

@section('container')
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Dosen
                </th>
                <th scope="col" class="px-6 py-3">
                    NIP
                </th>
                <th scope="col" class="px-6 py-3">
                    Peran
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Boko Susilo
                </td>
                <td class="px-6 py-4">
                    19283162352
                </td>
                <td class="px-6 py-4">
                    Pembimbing Utama
                </td>
                <td class="px-6 py-4">
                    123456
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Rusdi Effendi
                </td>
                <td class="px-6 py-4">
                    192382187662
                </td>
                <td class="px-6 py-4">
                    Pembimbing Pendamping
                </td>
                <td class="px-6 py-4">
                    Dora123
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection