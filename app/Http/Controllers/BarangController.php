<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // READ: Menampilkan daftar barang
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    // CREATE: Menampilkan form tambah
    public function create()
    {
        return view('barang.create');
    }

    // CREATE: Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate(['nama_barang' => 'required', 'satuan' => 'required', 'harga' => 'required|numeric', 'stok' => 'required|integer']);
        Barang::create($request->all());
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    // UPDATE: Menampilkan form edit
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    // UPDATE: Memperbarui data
    public function update(Request $request, Barang $barang)
    {
        $request->validate(['nama_barang' => 'required', 'satuan' => 'required', 'harga' => 'required|numeric', 'stok' => 'required|integer']);
        $barang->update($request->all());
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil diperbarui.');
    }

    // DELETE: Menghapus data
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus.');
    }
}
