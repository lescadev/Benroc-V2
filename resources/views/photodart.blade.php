@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Mariage - Portrait - Reportages</title>
@endsection

@section('content')

<h1 class="titreGal">Galerie Photo d'art</h1>
<div class="container">
    <div class="row">
        @foreach ($arts as $art)
        <div class="col-lg-2 col-md-4 col-sm-6 resize">
            <div class="imgSwap">
                <a href="/img/{{ $art['image'] }}" data-lightbox="prestation" alt="photographe-Limoges-photos-art"
                    data-title="{!! $art['description'] !!}"><img src="/img/{{ $art['image'] }}" /></a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection