<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $data = Nilai::all();
        return view('nilai.index', compact('data'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'matakuliah' => 'required',
            'nilai' => 'required|numeric'
        ]);

        Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Nilai $nilai)
    {
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'matakuliah' => 'required',
            'nilai' => 'required|numeric'
        ]);

        $nilai->update($request->all());

        return redirect()->route('nilai.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', 'Data berhasil dihapus');
    }
}
