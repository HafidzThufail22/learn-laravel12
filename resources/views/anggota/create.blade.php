@extends('layouts.app')
@section('content')
<h4>Tambah Anggota</h4>

<form action="{{ route('anggota.store') }}" method="POST">
    @csrf

    <div>
        <label for="nomor_anggota">Nomor Anggota</label><br>
        <input type="text" name="nomor_anggota" id="nomor_anggota" value="{{ old('nomor_anggota') }}">
        @error('nomor_anggota')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}">
        @error('nama')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="alamat">{{ old('alamat') }}</textarea>
        @error('alamat')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="tanggal_lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
        @error('tanggal_lahir')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-top:8px;">
        <button type="submit">Simpan</button>
        <a href="{{ route('anggota.index') }}">Batal</a>
    </div>
</form>

@endsection