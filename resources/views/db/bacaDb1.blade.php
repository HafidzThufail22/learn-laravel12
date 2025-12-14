@extends('layouts.app')
<h3>TABEL KOTA</h3>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID</td>
        <td>KOTA</td>
        <td>ID PROP</td>
    </tr>
    @foreach($kota as $k)
    <tr>
        <td>{{ $k->id }}</td>
        <td>{{ $k->nama_kota }}</td>
        <td>{{ $k->propinsi_id }}</td>
    </tr>
    @endforeach
</table>