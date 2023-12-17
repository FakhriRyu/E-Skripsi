@extends('layouts.mahasiswaapp')

@section('containermahasiswa')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Judul: 
            <p class="mt-1 mb-3 text-sm font-semibold text-gray-500 dark:text-gray-400">
                {{ $mahasiswa->judul ? $mahasiswa->judul : 'Anda belum memiliki judul' }}
            </p>
        </caption>
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
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
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bimbingans as $bimbingan)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                    {{ $bimbingan->dosen->name }}
                </td>
                <td class="px-6 py-4">
                    {{ \Carbon\Carbon::parse($bimbingan->waktu1)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY [Jam ]H:mm') }}
                </td>                                                         
                <td>
                    <a href="{{ route('mahasiswa.monitoring.show', ['id' => $bimbingan->id]) }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        Buka
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
<div class="fixed bottom-6 right-6">
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md flex items-center">
        <svg class="w-10 h-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
        </svg>
    </button>
</div>

<!-- Modal utama -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-screen-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Bimbingan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            @if ($mahasiswa->status != 'Menunggu Konfirmasi' && $mahasiswa->bimbingans->where('status', 'Menunggu Konfirmasi')->isEmpty())
            <form method="POST" action="{{ route('mahasiswa.monitoring.store') }}" enctype="multipart/form-data" class="p-4 md:p-5">
                @csrf
                <div class="grid gap-2 mb-4 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mahasiswa->name }}" readonly>
                        <input type="hidden" id="mahasiswa_id" name="mahasiswa_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mahasiswa->id }}" readonly>
                    </div>
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $mahasiswa->judul ? $mahasiswa->judul : 'Belum ada judul' }}" readonly>
                    </div>
                </div> 
                <div class="grid gap-2 mb-4 md:grid-cols-2"> 
                    <div>
                        <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>
                        <input type="datetime-local" id="waktu1" name="waktu1" value="{{ now('Asia/Jakarta')->toDateTimeLocalString() }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>                        
                    <div>
                        <label for="bagian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bagian</label>
                        <input type="text" id="bagian" name="bagian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : Bab 1" required>
                    </div>
                </div>
                <div class="grid gap-2 mb-4 md:grid-cols-1"> 
                    <label for="dosen" class="block text-sm font-medium text-gray-900 dark:text-white">Dosen</label>
                    <select name="dosen_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Dosen</option>
                        <option value="{{ $dosen1->id }}">{{ $dosen1->name }}</option>
                        <option value="{{ $dosen2->id }}">{{ $dosen2->name }}</option>
                    </select>
                    
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                        <input name="file_skripsi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Tambah
                    </button>
                </div>
            </form>
            @else
            <div class="p-4 md:p-5 text-center">
                @if ($mahasiswa->status == 'Menunggu Konfirmasi')
                Anda sudah melakukan bimbingan. Mohon tunggu konfirmasi.
                @else
                Ada bimbingan yang menunggu konfirmasi. Mohon tunggu hingga selesai.
                @endif
            </div>
            @endif
        </div>
    </div>
</form>
</div>
</div>
</div>
@endsection