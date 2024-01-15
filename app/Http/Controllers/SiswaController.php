<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('Siswa.index', compact(['siswa']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'jurusan' => 'required'
        ]);

        Siswa::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/Siswa')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('Siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'jurusan' => 'required'
        ]);

        Siswa::where('id', $id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/Siswa')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa, $id)
    {
        Siswa::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Hapus data Berhasil!');
    }
}
