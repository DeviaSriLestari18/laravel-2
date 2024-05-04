@php
    $album_musik =\App\Models\AlbumMusik::where('id','=','25')->orderBy('id','desc')->get();
    // $album_musik =\App\Models\AlbumMusik::where('tahun' ,'2020')->orderBy('id', 'desc')->get();
    // $album_musik2 =\App\Models\AlbumMusik::where('judul',,'pura pura lupa')->orderBy('id','desc')->first();
    // $album_musik =\App\Models\AlbumMusik::find(10);
@endphp

<h1>Id :{{ $album_musik->id}}</h1>
<h1>Judul : {{ $album_musik->judul}}</h1>
<h1>Tahun : {{ $album_musik->tahun}}</h1>
<h1>Cover Album : {{ $album_musik->cover_album}}</h1>
<hr>

