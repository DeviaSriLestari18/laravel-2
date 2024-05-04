@php
    // $siswa =\App\Models\Siswa::find(10);
    // $siswa2 =\App\Models\Siswa::where('kelas',"XI RPL 2")->orderBy('id','desc')->first();
    // ->orderBy('id','desc')
    // ->where('nama','Devia Sri L')
@endphp

<h1>tanpa foreach</h1>
<h1>ID :{{ $siswa2->id ?? 'kosong'}}</h1>
<h1>Nama : {{ $siswa2->nama ?? 'kosong'}}</h1>
<h1>Kelas : {{ $siswa2->kelas ?? 'kosong'}}</h1>
<h1>Jenis Kelamin : {{ $siswa2->jenis_kelamin ?? 'kosong'}}</h1>
<hr>

