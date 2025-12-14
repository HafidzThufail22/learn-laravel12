@extends('layouts.app')
@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <h2 class="text-2xl font-bold mb-6">Ubah Kota</h2>

                <form action="{{ route('kota.update', $kota->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="propinsi_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Propinsi</label>
                        <select name="propinsi_id" id="propinsi_id"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100">
                            <option value="">-- Pilih Propinsi --</option>
                            @foreach($propinsi as $p)
                            <option value="{{ $p->id }}" {{ (old('propinsi_id', $kota->propinsi_id) == $p->id) ? 'selected' : '' }}>{{ $p->nama_propinsi }}</option>
                            @endforeach
                        </select>
                        @error('propinsi_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="nama_kota" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Kota</label>
                        <input type="text" name="nama_kota" id="nama_kota" value="{{ old('nama_kota', $kota->nama_kota) }}"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100">
                        @error('nama_kota')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex gap-2 pt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Simpan</button>
                        <a href="{{ route('kota.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection