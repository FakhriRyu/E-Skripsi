@extends('layouts.dosenapp')

@section('containerdosen')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bagian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu dan Tanggal
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bimbingans as $bimbingan)
                {{-- {{ dd($bimbingan) }} --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $bimbingan->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $bimbingan->bagian }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $bimbingan->status }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $bimbingan->dosen->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $bimbingan->waktu1 }}
                        </td>

                        <td>
                                <a href="{{ route('dosens.monitoring.detail', ['id' => $bimbingan->pembimbing->mahasiswa_id, 'idp' => $bimbingan->id]) }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                    Buka
                                </a>
                                <a href="{{ route('dosens.monitoring.edit', ['id' => $bimbingan->pembimbing->mahasiswa_id, 'idp' => $bimbingan->id]) }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                    edit
                                </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center">No bimbingan data available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
