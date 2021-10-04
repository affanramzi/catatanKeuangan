<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subkategori;

class SubkategoriController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkategori = subkategori::orderBy('created_at', 'DESC')->get();

    return view('index', compact('subkategoris'));
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

        $subkategori = new subkategori();
        $subkategori->nama = $request->nama;

        if($subkategori->save()) {
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
        $subkategori = subkategori::find($id);

    return view('edit', compact('subkategoris'));
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

        $subkategori = new subkategori();
        $subkategori->nama = $request->nama;

        if($subkategori->save()) {
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
        $subkategori = subkategori::find($id);

    if($subkategori->delete()) {
        return redirect()->route('form.index')->with('message', 'Berhasil dihapus');
    } else {
        return redirect()->route('form.index')->with('message', 'Tidak bisa dihapus');
    }
    }
}
