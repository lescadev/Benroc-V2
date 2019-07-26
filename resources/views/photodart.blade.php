@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Mariage - Portrait - Reportages</title>
@endsection

@section('content')

<h1 class="titreGal">Galerie Photos d'art</h1>
<div class="resize">
    <div class="conteneur">
        @foreach ($arts as $art)
            <div class="imgSwap">
                <a href="/storage/{{ $art['image'] }}" data-lightbox="prestation" alt="photographe-Limoges-photos-art"
                    data-title="{!! $art['description'] !!}"><img src="/storage/{{ $art['image'] }}" /></a>
            </div>
        @endforeach
    </div>
</div>

@endsection