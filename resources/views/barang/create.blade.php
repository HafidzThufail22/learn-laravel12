@extends('layouts.app')
@section('content')

<h4>Tambah Barang Baru</h4>

@if ($errors->any())
<div class="alert alert-danger mt-sm">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('barangs.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama_barang" class="control-label">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" required>
    </div>
    <div class="form-group">
        <label for="satuan" class="control-label">Satuan</label>
        <input type="text" class="form-control" name="satuan" id="satuan" value="{{ old('satuan') }}" required>
    </div>
    <div class="form-group">
        <label for="harga" class="control-label">Harga</label>
        <input type="number" step="0.01" class="form-control" name="harga" id="harga" value="{{ old('harga') }}" required>
    </div>
    <div class="form-group">
        <label for="stok" class="control-label">Stok</label>
        <input type="number" class="form-control" name="stok" id="stok" value="{{ old('stok') }}" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('barangs.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>

@endsection