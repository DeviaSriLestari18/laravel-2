<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\penulis;
use App\Models\genre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::latest()->get();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis = Penulis::all();
        $genre = Genre::all();
        return view('buku.create' , compact('penulis', 'genre'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'=>'required|unique:bukus',
            'isbn'=>'required',
            'deskripsi'=>'required',
            'jml_halaman'=>'required|numeric',
            'cover'=>'required|max:2048|mimes:png,jpg',
            'tgl_terbit'=>'required',
            'id_penulis'=>'required',

        ]);

        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->deskripsi = $request->deskripsi;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->id_penulis = $request->id_penulis;
        $buku->tgl_terbit = $request->tgl_terbit;



        // upload foto
        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9999). $img->getClientOriginalName();
            $img->move('images/buku/',$name);
            $buku->cover = $name;
        }

        $buku->save();
        // lampiran banyak genre di buku
        $buku->genre()->attach($request->genre);
        return redirect()->route('buku.index')
        ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $buku = Buku::findOrFail($id);
       $genre = Genre::all();
       $penulis = Penulis::all();
       $selectGenre = $buku->genre->pluck('id')->toArray();
       return view('buku.edit', compact('buku' ,'genre' ,'penulis' ,'selectGenre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul'=>'required',
            'isbn'=>'required',
            'deskripsi'=>'required',
            'jml_halaman'=>'required|numeric',
            // 'cover'=>'required|max:2048kb|mimes:png.jpg',
            'tgl_terbit'=>'required',
            'id_penulis'=>'required',

        ]);

        $buku = Buku::findOrFail($id);
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->deskripsi = $request->deskripsi;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->id_penulis = $request->id_penulis;
        $buku->tgl_terbit = $request->tgl_terbit;


        // upload foto
        if($request->hasFile('cover')){
            $buku->deleteImage(); //untuk hapus gambar sebelum diganti gambar baru
            $img = $request->file('cover');
            $name = rand(1000,9999). $img->getClientOriginalName();
            $img->move('images/buku/',$name);
            $buku->cover = $name;
        }

        $buku->save();
        // mengganti banyak genre di buku
        $buku->genre()->sync($request->genre);
        return redirect()->route('buku.index')
        ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->deleteImage();
        $buku->delete();
        $buku->genre()->detach();
        return redirect()->route('buku.index')
        ->with('success', 'data berhasil dihapus');
    }
}
