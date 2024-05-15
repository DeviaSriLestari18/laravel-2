<?php

use App\Models\Siswa;
use App\Models\Sekolah;
use App\Models\albummusik;
use App\Models\film;
use App\Models\DetailFilm;
use App\Models\MediaFilm;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Devia Sri Lestari";
    $jenis_kelamin = "Perempuan";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "Mahasiswa";
    return view('biodata', compact('nama', 'jenis_kelamin', 'pendidikan_terakhir', 'pekerjaan'));
});

// parameter

Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample', compact('nama2'));
});

Route::get('siswa', function(){
    return view ('Siswa');
});

Route::get('sekolah', function () {
    return view ('Sekolah');
});
Route::get('album_musik', function () {
    return view('album_musik');
});
Route::get('film', function () {
    return view('film');
});
Route::get('film/{id}', function (int $id) {
    return view('detail-film', ['film' =>Film::find($id)]);
});

// route with controller
Route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan',[MyController::class,'animals']);

// route movie
Route::get('movie',[MovieController::class,'getMovie'])->middleware('auth');
Route::get('movie/{id}',[MovieController::class, 'getMovieById']);

//route artikel
Route::get('artikel', [ArtikelController::class, 'getArtikel']);
Route::get('artikel/id/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelBykategori']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route crud
Route::resource('penulis',PenulisController::class);
