@extends('layouts.dosenapp')
@section('containerdosen')
        {{-- {{ dd($bimbingan) }} --}}
        <form action="{{ route('dosens.monitoring.update', ['id' => $pembimbing->id, 'idp' => $bimbingan->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex items-center mt-3 justify-center">
                <div class="w-full max-w-md bg-white shadow-md p-6">
                    <h2 class="text-2xl font-semibold mb-4">Periksa Bimbingan</h2>
            {{-- <div class="mb-4">
                <label for="file_revisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File revisi</label>
                <input type="file" name="file_revisi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                @error('file_revisi')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div> --}}
            <div>
                <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>
                <input type="datetime-local" id="waktu2" name="waktu2" value="{{ now('Asia/Jakarta')->toDateTimeLocalString() }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div> 
            <div class="mb-4">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Menunggu Konfirmasi" {{ old('status', $bimbingan->status) === 'Menunggu Konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                    <option value="ACC" {{ old('status', $bimbingan->status) === 'ACC' ? 'selected' : '' }}>ACC</option>
                    <option value="Revisi" {{ old('status', $bimbingan->status) === 'Revisi' ? 'selected' : '' }}>Revisi</option>
                </select>
                @error('status')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="block w-full mt-1 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">{{ old('keterangan', $bimbingan->keterangan) }}</textarea>
                @error('keterangan')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
            </div>
        </form>
    </div>
    </div>
@endsection