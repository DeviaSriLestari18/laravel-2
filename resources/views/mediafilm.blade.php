@php
$mediaFilm= \App\Models\MediaFilm::all;
@endphp

@foreach ($mediaFilm as $item)
<h1>Media Film</h1>
<h1>Id : {{$item->id}}</h1>
<h1>Film Id : {{$item->film_id}}</h1>
<h1>Media Type : {{$item->media_type}}</h1>
<h1>Media Title : {{$item->media_title}}</h1>
<h1>Url Media : {{$item->url_media}}</h1>
@endforeach
