@extends('layouts.app')
@section('content')

<h4>Tambah Kota</h4>

<form action="{{ route('kota.store') }}" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="propinsi_id" class="control-label">Propinsi</label>
        <select name="propinsi_id" id="propinsi_id" class="form-control">
            @foreach($propinsi as $p)
            <option value="{{ $p->id }}">{{ $p->nama_propinsi }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="nama_kota" class="control-label">Nama Kota</label>
        <input type="text" class="form-control" name="nama_kota" id="nama_kota" value="{{ old('nama_kota') }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('kota.index') }}" class="btn btn-default">Kembali</a>
    </div>

</form>

@endsection