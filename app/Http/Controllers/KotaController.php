<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Propinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $kotas = Kota::with('propinsi')->orderBy('id', 'ASC')->get();
        return view('kota.index', compact('kotas'));
    }

    public function create()
    {
        $propinsi = Propinsi::orderBy('nama_propinsi')->get();
        return view('kota.create', compact('propinsi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'propinsi_id' => 'required|exists:propinsi,id',
            'nama_kota' => 'required|string|max:100',
        ]);

        Kota::create($request->all());

        return redirect()->route('kota.index')->with('message', 'Kota berhasil ditambahkan.');
    }

    public function edit(Kota $kota)
    {
        $propinsi = Propinsi::orderBy('nama_propinsi')->get();
        return view('kota.edit', compact('kota', 'propinsi'));
    }

    public function update(Request $request, Kota $kota)
    {
        $request->validate([
            'propinsi_id' => 'required|exists:propinsi,id',
            'nama_kota' => 'required|string|max:100',
        ]);

        $kota->update($request->all());

        return redirect()->route('kota.index')->with('message', 'Kota berhasil diubah.');
    }

    public function destroy(Kota $kota)
    {
        $kota->delete();
        return redirect()->route('kota.index')->with('message', 'Kota berhasil dihapus.');
    }
}
