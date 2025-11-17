@extends('layouts.app')
@section('content')

<h4>Daftar Kota</h4>
<a href="{{ route('kota.create') }}" class="btn btn-info btn-sm">Tambah Kota</a>

@if ($message = Session::get('message'))
<div class="alert alert-success mt-sm">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-responsive mt-sm">
    <thead>
        <th>ID</th>
        <th>Propinsi</th>
        <th>Nama Kota</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach($kotas as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->propinsi->nama_propinsi ?? '-' }}</td>
            <td>{{ $k->nama_kota }}</td>
            <td>
                <form action="{{ route('kota.destroy', $k->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('kota.edit', $k->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kota ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection