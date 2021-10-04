<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::orderBy('created_at', 'DESC')->get();

    return view('index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:1|max:10'
        ]);

        $kategori = new kategori();
        $kategori->nama = $request->nama;

        if($kategori->save()) {
            return redirect()->route('form.index')->with('message', 'Berhasil ditambahkan');
        } else {
            return redirect()->back()->with('message', 'Gagal');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::find($id);

    return view('edit', compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|min:1|max:10'
        ]);

        $kategori = new kategori();
        $kategori->nama = $request->nama;

        if($kategori->save()) {
            return redirect()->route('form.index')->with('message', 'Berhasil ditambahkan');
        } else {
            return redirect()->back()->with('message', 'Gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::find($id);

    if($kategori->delete()) {
        return redirect()->route('form.index')->with('message', 'Berhasil dihapus');
    } else {
        return redirect()->route('form.index')->with('message', 'Tidak bisa dihapus');
    }
    }
}
