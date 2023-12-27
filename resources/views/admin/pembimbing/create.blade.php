@extends('layouts.adminapp')

@section('container')
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form method="POST" action="{{ route('admin.pembimbing.store') }}">
    @csrf
    <div class="flex items-center mt-3 justify-center">
        <div class="w-full max-w-md bg-white shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Tambah Data Pembimbing</h2>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="mahasiswa_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Mahasiswa</label>
                    <select name="mahasiswa_id" id="mahasiswa_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <!-- Menampilkan opsi mahasiswa dari database, diurutkan berdasarkan nama (abjad) -->
                        @foreach ($mahasiswas->sortBy('name') as $mahasiswa)
                            <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="dosen1_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembimbing Utama</label>
                    <select name="dosen1_id" id="dosen1_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <!-- Menampilkan opsi dosen dari database, diurutkan berdasarkan nama (abjad) -->
                        @foreach ($dosens->sortBy('name') as $dosen)
                            <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="dosen2_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembimbing Pendamping</label>
                    <select name="dosen2_id" id="dosen2_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <!-- Menampilkan opsi dosen dari database, diurutkan berdasarkan nama (abjad) -->
                        @foreach ($dosens->sortBy('name') as $dosen)
                            <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
                        @endforeach
                    </select>
                </div>                
            
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
            </div>
            </div>
            </div>
        </form>

        <script>
    // Fungsi untuk melakukan filter opsi dosen
    function filterDosen(selectElement, keyword) {
        // Mengambil semua opsi dalam elemen seleksi
        var options = selectElement.options;
        
        // Iterasi melalui opsi dan menyembunyikan/menampilkan berdasarkan keyword
        for (var i = 0; i < options.length; i++) {
            var option = options[i];
            var text = option.text.toLowerCase();
            var display = text.includes(keyword.toLowerCase()) ? 'block' : 'none';
            option.style.display = display;
        }
    }

    // Menambahkan event listener untuk setiap elemen seleksi dosen
    document.getElementById('dosen1_id').addEventListener('input', function (e) {
        filterDosen(e.target, e.target.value);
    });

    document.getElementById('dosen2_id').addEventListener('input', function (e) {
        filterDosen(e.target, e.target.value);
    });
</script>
        @endsection