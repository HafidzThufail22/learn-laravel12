@extends('layouts.app')
@section('content')

<h4>Daftar Barang</h4>
<a href="{{ route('barangs.create') }}" class="btn btn-info btn-sm">Tambah Barang Baru</a>

@if ($message = Session::get('success'))
<div class="alert alert-success mt-sm">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-responsive mt-sm">
    <thead>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @forelse ($barangs as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->satuan }}</td>
            <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
            <td>{{ $barang->stok }}</td>
            <td>
                <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus barang ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Tidak ada data barang.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection