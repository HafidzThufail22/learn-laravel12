<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{

    public function index()
    {
        $data_anggota = Anggota::all();
        return view('anggota.index', ['anggota' => $data_anggota]);
    }

    public function create()
    {
        return view('anggota.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'nomor_anggota' => 'required|unique:anggota',
            'nama' => 'required|string',
            'alamat' => 'required',
            'email' => 'required|email|unique:anggota',
            'tanggal_lahir' => 'required|date',
        ]);


        Anggota::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota baru berhasil ditambahkan.');
    }
}
