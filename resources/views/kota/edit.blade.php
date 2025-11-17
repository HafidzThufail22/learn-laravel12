@extends('layouts.app')
@section('content')

<h4>Ubah Kota</h4>

<form action="{{ route('kota.update', $kota->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <label for="propinsi_id" class="control-label">Propinsi</label>
        <select name="propinsi_id" id="propinsi_id" class="form-control">
            @foreach($propinsi as $p)
            <option value="{{ $p->id }}" {{ $p->id == $kota->propinsi_id ? 'selected' : '' }}>{{ $p->nama_propinsi }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="nama_kota" class="control-label">Nama Kota</label>
        <input type="text" class="form-control" name="nama_kota" id="nama_kota" value="{{ old('nama_kota', $kota->nama_kota) }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('kota.index') }}" class="btn btn-default">Kembali</a>
    </div>

</form>

@endsection