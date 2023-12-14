@extends('layouts.dosenapp')

@section('containerdosen')

<form method="POST" action="{{ route('mahasiswa.monitoring.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <input type="enum" id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul" required>
        </div>
        <div>
            <label for="waktu2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>
            <input type="datetime-local" id="waktu2" name="waktu2" value="{{ now('Asia/Jakarta')->toDateTimeLocalString() }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input name="file_revisi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>
        <div>
            <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
            <input type="text-area" id="keterangan" name="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh : Bab 1" required>
        </div>
    </div>
    <div class="grid grid-cols-5 gap-3">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>
</form>

@endsection