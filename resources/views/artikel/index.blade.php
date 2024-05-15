@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Artikel</h1></center>
        @foreach ($artikels as $data)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$data->foto}}" class="card-img-top" width="350px" height="350px">
                <div class="card-body">
                    <p class="card-text" align="center">
                        <a href="artikel/id/{{$data->id}}">{{$data->judul}}</a>
                        <br>
                        <a href="/artikel/kategori/{{$data->kategori}}">{{$data->kategori}}</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
