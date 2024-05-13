<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Movie;
class MovieController extends Controller
{
    //meihat semua data
    public function getMovie(){
        // melihat semua data yang ada didalam model 'Movie'
        $movies = Movie::all();
        // dump data atau melihat isi data dari sebuah variable
        // dd($movies);
        // passing data movie ke view 'movie.index'
        return view('movie.index', compact('movies'));
    }

    public function getMovieById($id){
        // menampilkan data movie berdasarkan id yang dipilih
        $movies = Movie::findOrFail($id);
        return view('movie.show', compact('movies'));
    }
}
