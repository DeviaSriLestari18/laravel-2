@extends('layout.layout')
@section('content')
<center>
<div align="center" class="container">
    <div align="row justify-content-center">
        @foreach ( $artikels as $item )
        <div class="col-md-8">
            <div class="card" style="width:18 rem">
                <img src="{{$item->foto}}" class="card-img-top" width="300px" height="450px>
                <div class="card-body">
                    <p class="card-text"><b>{{$item->judul}}</b></p>
                    <p> Kategori: {{$item->kategori}}</p>
                    <p> Konten: {{$item->konten}} </p>
                    <p> Penulis: {{$item->penulis}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</center>
@endsection
