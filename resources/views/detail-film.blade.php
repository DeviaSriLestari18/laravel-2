@extends('layout.layout')
@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{ $film->judul }}</h1>
        <p class="lead text-muted">{{ $film->deskripsi }}</p>
        <p>
          <a href="{{ url($film->DetailFilm->url_imdb) }}" target="_blank" class="btn btn-primary my-2">klik Ke Halaman</a>
          <a href="{{ url('/film') }}" class="btn btn-primary my-2">Kembali</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($film->MediaFilm as $item)
            <div class="col">
                <div class="card shadow-sm">
                  @if ($item->media_type)
                    Url Media : <a href="{{ $item->url_media }}">Klik Disini</a>
                    @else
                        <img src="{{ $item->url_media }}" alt="" height="200">
                    @endif
                </div>
              </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
















{{-- <h1>Judul Film : {{$film->judul}}</h1>
<p>Deskripsi film : {{$film->deskripsi}}</p> --}}

{{-- menampilkan data one to one
<span>
    Detail Film
    <h3>Kode Film : {{$film->DetailFilm->code_film}}</h3>
    <h3>Url IMDB : <a href= "{{$film->DetailFilm->code_film}}" target="_blank">
        Klik Disini</a>
    </h3>

    {{-- menampilkan data one to many --}}
    {{-- @foreach ($film->MediaFilm as $item ) --}}
    {{-- <p>Media Title : {{$item->media_title}}</p>
    @if ($item->media_type)
    Url Media : <a href="{{$item->url_media}}">Klik disini</a>
    @else
    <img src="{{$item->url_media}}" alt="" height="250">
    @endif

    {{-- <p>Url Media : {{ $item->url_media}}</p> --}}
    {{-- <hr>
    @endforeach --}}
