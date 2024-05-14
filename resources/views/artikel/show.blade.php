@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>{{$artikel->judul}}</b></p>
                    <p> Kategori: {{$artikel->kategori}}</p>
                    <p> Konten: {{$artikel->konten}} </p>
                    <p> Penulis: {{$artikel->penulis}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
