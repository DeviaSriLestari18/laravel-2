{{-- @php
    $film =\App\Models\Film::all();
    // $mediaFilm =\App\Models\MediaFilm::all();
    // $orangTua =\App\Models\Film::find(2);
    // $anak =\App\Models\DetailFilm::find(5);
    // $mediaFilm =\App\Models\MediaFilm::find(3);
@endphp

@foreach ($film as $item )

<h4>Daftar Film</h4>
{{-- menampilkan sebuah data --}}
{{-- <h2>ID Film :{{$item->id}}</h2>
<h2>Judul Film :{{$item->judul}}</h2>
<a href ="{{url('film/' .$item->id)}}">Detail Film</a>
<hr>
@endforeach --}}

@extends('layout.layout')
@php
    $film =\App\Models\Film::all();
@endphp
@section('content')
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($film as $item)
        <div class="col">
            <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$item->judul}}</text></svg>

            <div class="card-body">
              <p class="card-text">{{$item->deskripsi}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{url('film/' .$item->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        @endforeach
          @endsection
