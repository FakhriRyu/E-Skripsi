@extends('layouts.dosenapp')

@section('containerdosen')
<div class="container mx-auto">
    <div
        class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        Selamat Datang, {{ $dosen->name }}! <br>
        NIP: {{ $dosen->NomorNIP }}

        {{-- @if (isset($popOut) && $popOut)
            <div id="popOut" class="pop-out">
                <!-- Konten pop-out di sini -->
                <div id="alert-additional-content-2"
                    class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                    role="alert">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium">Segera Konfirmasi Bimbingan</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm">
                        mohon segera untuk melakukan bimbingan kepada mahasiswa karena anda telah tidak aktif selama 2
                        minggu
                    </div>
                    <div class="flex">
                        <button onclick="tutupPopOut()"
                            class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800"
                            data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        @endif --}}


        <button data-modal-target="profile-modal" data-modal-toggle="profile-modal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Ubah Password
        </button>

        <!-- Main modal -->
        <div id="profile-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Ubah Profil
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="profile-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form method="POST" action="{{ route('dosens.updateProfile') }}" class="p-4 md:p-5">
                        @csrf
                        <!-- Form fields for updating profile information -->
                        <label for="password">Password (optional):</label>
                        <input type="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <label for="password_confirmation">Confirm Password (optional):</label>
                        <input type="password" name="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <button type="submit"
                            class="text-white bg-blue-700 mt-3 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
        <a href="#"
            class="flex-1 max-w-sm p-6 bg-yellow-400 border rounded-lg shadow hover:bg-yellow-600 dark:bg-yellow-700 dark:border-yellow-700 dark:hover:bg-yellow-800">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Mahasiswa Menunggu Konfirmasi</h5>
            <p class="font-bold text-5xl text-white dark:text-white">{{ $jumlahMahasiswaMenunggu }}</p>
        </a>
        <a href="#"
            class="flex-1 max-w-sm p-6 bg-green-500 border rounded-lg shadow hover:bg-green-600 dark:bg-green-700 dark:border-green-700 dark:hover:bg-green-800">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Jumlah Mahasiswa Bimbingan</h5>
            <p class="font-bold text-5xl text-white dark:text-white">{{ $jumlahMahasiswa }}</p>
        </a>
        <a href="#"
            class="flex-1 block max-w-sm p-6 bg-blue-500 border rounded-lg shadow hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:hover:bg-blue-800">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Total Bimbingan</h5>
            <p class="font-bold text-5xl text-white dark:text-white">{{ $totalBimbingan }}</p>
        </a>
    </div>
    </div>

    <script>
        // JavaScript functions to open and close the modal
        function openProfileModal() {
            document.getElementById('profile-modal').classList.remove('hidden');
        }

        function closeProfileModal() {
            document.getElementById('profile-modal').classList.add('hidden');
        }

        // function tutupPopOut() {
        //     document.getElementById('popOut').style.display = 'none';
        // }
    </script>
@endsection
