@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Mariage - Portrait - Reportages</title>
@endsection

@section('content')

<div class="grid">
    @foreach ($arts as $art)
    <div class="grid-item">
        <div class="imgSwap">
            <a href="/img/{{ $art['image'] }}" data-lightbox="prestation" alt="photographe-Limoges-photos-art"
                data-title="{!! $art['description'] !!}"><img src="/img/{{ $art['image'] }}" /></a>
        </div>
    </div>
    @endforeach
</div>

@endsection
