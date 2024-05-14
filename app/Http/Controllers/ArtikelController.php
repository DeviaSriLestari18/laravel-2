<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    //
    //meihat semua data
    public function getArtikel()
    {
        // melihat semua data yang ada didalam model 'Movie'
        $artikels = Artikel::all();
        // dump data atau melihat isi data dari sebuah variable
        // dd($movies);
        // passing data movie ke view 'movie.index'
        return view('artikel.index', compact('artikels'));
    }

    public function getArtikelById($id)
    {
        // menampilkan data movie berdasarkan id yang dipilih
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    public function getArtikelByKategori($kategori)
    {
        $artikels = Artikel::where('kategori', $kategori)->get();
        return view('artikel.kategori', compact('artikels'));
    }

}
