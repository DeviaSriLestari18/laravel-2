@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Data Buku
                    <a href="{{route('buku.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Cover</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no =1; @endphp
                            @foreach ($buku as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->penulis->nama_penulis}}</td>
                                <td align="center"><img src="{{ asset ('images/buku/' .$item->cover)}}" style="width:50px;" alt=""></td>
                                <td>
                                    <form action="{{route('buku.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('buku.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                    </a>
                                    <a href="{{route('buku.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                    </a>
                                    <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection