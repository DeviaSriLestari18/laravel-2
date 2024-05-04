@php
    $sekolah =\App\Models\Sekolah::where('id','=','1')->orderBy('id','desc')->get();
@endphp

@foreach ($sekolah as $data)
<h1>ID :{{ $data->id}}</h1>
<h1>Nama : {{ $data->nama}}</h1>
<h1>Alamat : {{ $data->alamat}}</h1>
<h1>Email : {{ $data->email}}</h1>
<h1>Telepon : {{ $data->tlp}}</h1>
<h1>Status : {{ $data->status}}</h1>
<hr>
@endforeach
