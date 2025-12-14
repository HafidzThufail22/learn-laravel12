<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Propinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class KotaController extends Controller
{
    /* =========================
     * PRAKTIK 1 — GATE
     * ========================= */
    public function gate()
    {
        $kota = Kota::find(1);

        if (!$kota) {
            abort(404, 'Data kota tidak ditemukan');
        }

        if (Gate::allows('baca', $kota)) {
            echo "ID User : " . Auth::user()->id . "<br>";
            echo "Nama User : " . Auth::user()->name . "<br>";
            echo "Akses membaca tabel kota DIIZINKAN";
        } else {
            echo "ID User : " . Auth::user()->id . "<br>";
            echo "Nama User : " . Auth::user()->name . "<br>";
            echo "Akses membaca tabel kota TIDAK DIIZINKAN";
        }
        exit;
    }

    /* =========================
     * TEST RELASI KOTA -> USER
     * ========================= */
    public function testRelasi()
    {
        $kota = Kota::find(1);

        if (!$kota) {
            echo "Data kota dengan ID 1 tidak ditemukan.";
            exit;
        }

        echo "Nama Kota: " . $kota->nama_kota . "<br>";
        echo "Pemilik Kota: " . ($kota->user ? $kota->user->name : 'Belum ada user');
        exit;
    }

    /* =========================
     * PRAKTIK 3 — CRUD + POLICY
     * ========================= */

    // READ
    public function index()
    {
        $kotas = Kota::with(['propinsi', 'user'])->orderBy('id', 'ASC')->get();
        return view('kota.index', compact('kotas'));
    }

    // FORM CREATE
    public function create()
    {
        $this->authorize('create', Kota::class);

        $propinsi = Propinsi::orderBy('nama_propinsi')->get();
        return view('kota.create', compact('propinsi'));
    }

    // CREATE
    public function store(Request $request)
    {
        $this->authorize('create', Kota::class);

        $request->validate([
            'propinsi_id' => 'required|exists:propinsi,id',
            'nama_kota'   => 'required|string|max:100',
        ]);

        Kota::create([
            'nama_kota'   => $request->nama_kota,
            'propinsi_id' => $request->propinsi_id,
            'user_id'     => Auth::id(), // pemilik data
        ]);

        return redirect()->route('kota.index')
            ->with('message', 'Kota berhasil ditambahkan.');
    }

    // FORM EDIT
    public function edit(Kota $kota)
    {
        $this->authorize('update', $kota);

        $propinsi = Propinsi::orderBy('nama_propinsi')->get();
        return view('kota.edit', compact('kota', 'propinsi'));
    }

    // UPDATE
    public function update(Request $request, Kota $kota)
    {
        $this->authorize('update', $kota);

        $request->validate([
            'propinsi_id' => 'required|exists:propinsi,id',
            'nama_kota'   => 'required|string|max:100',
        ]);

        $kota->update([
            'nama_kota'   => $request->nama_kota,
            'propinsi_id' => $request->propinsi_id,
        ]);

        return redirect()->route('kota.index')
            ->with('message', 'Kota berhasil diubah.');
    }

    // DELETE
    public function destroy(Kota $kota)
    {
        $this->authorize('delete', $kota);

        $kota->delete();

        return redirect()->route('kota.index')
            ->with('message', 'Kota berhasil dihapus.');
    }
}
