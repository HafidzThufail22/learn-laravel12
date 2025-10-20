<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propinsi;

class PropinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propinsi = Propinsi::orderBy('id', 'DESC')->paginate(5);
        return view('propinsi.index', compact('propinsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_propinsi' => 'required',

        ]);
        $propinsi = Propinsi::create($request->all());
        return redirect()->route('propinsi.index')
            ->with(
                'message',
                'Propinsi baru berhasil ditambahkan!'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propinsi = Propinsi::findOrFail($id);
        return view('propinsi.show', compact('propinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propinsi = Propinsi::findOrFail($id);
        return view('propinsi.edit', compact('propinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_propinsi' => 'required',

        ]);
        $propinsi = Propinsi::findOrFail($id)
            ->update($request->all());

        return redirect()->route('propinsi.index')
            ->with('message', 'Propinsi baru berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propinsi = Propinsi::findOrFail($id);
        $propinsi->delete();

        return redirect()->route('propinsi.index')
            ->with('message', 'Propinsi berhasil dihapus!');
    }
}
