@extends('layouts.app')
@section('content')

<h4>Menajemen Tabel Propinsi</h4>
<a href="{{ route('propinsi.create') }}"
    class="btn btn-info btn-sm">Propinsi Baru</a>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-responsive martop-sm">
    <thead>
        <th>ID</th>
        <th>Propinsi</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($propinsi as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td><a href="{{ route('propinsi.show', $p->id) }}">
                    {{ $p->nama_propinsi }}</a></td>
            <td>
                <form action="{{ route('propinsi.destroy', $p->id) }}"
                    method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('propinsi.edit', $p->id) }}"
                        class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit"
                        class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection