@extends('layouts.dosenapp')

@section('containerdosen')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Judul: 
                <p class="mt-1 mb-3 text-sm font-semibold text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->judul ? $mahasiswa->judul : 'belum memiliki judul' }}
                </p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bagian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu dan Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bimbingans as $bimbingan)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $mahasiswa->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $bimbingan->bagian }}
                        </td>
                        <td class="px-6 py-4">
                            @if($bimbingan->status === 'Revisi')
                    <span class="bg-yellow-200 text-yellow-800 px-2.5 py-1.5 rounded-full">{{ $bimbingan->status }}</span>
                    @elseif($bimbingan->status === 'ACC')
                    <span class="bg-green-200 text-green-800 px-2.5 py-1.5 rounded-full">{{ $bimbingan->status }}</span>
                    @elseif($bimbingan->status === 'Menunggu Konfirmasi')
                    <span class="bg-blue-200 text-blue-800 px-2.5 py-1.5 rounded-full">{{ $bimbingan->status }}</span>
                    @else
                    {{ $bimbingan->status }}
                    @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($bimbingan->waktu1)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY [Jam ]H:mm') }}
                        </td>

                        <td>
                                <a href="{{ route('dosens.monitoring.detail', ['id' => $bimbingan->pembimbing->mahasiswa_id, 'idp' => $bimbingan->id]) }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                    Buka
                                </a>
                                <a href="{{ route('dosens.monitoring.edit', ['id' => $bimbingan->pembimbing->mahasiswa_id, 'idp' => $bimbingan->id]) }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                    Periksa
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
