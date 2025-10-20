@extends('layouts.app')
@section('content')
<h4>Propinsi Baru</h4>
<form action="{{ route('propinsi.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('nama_propinsi') ?
 'has-error' : '' }}">
        <label for="nama_propinsi" class="control-label">Propinsi</label>
        <input type="text" class="form-control" name="nama_propinsi"
            placeholder="Propinsi" value="{{ old('nama_propinsi') }}">
        @if ($errors->has('nama_propinsi'))
        <span class="help-block">{{ $errors->first('nama_propinsi') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('propinsi.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection