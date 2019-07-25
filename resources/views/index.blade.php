@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Mariage - Portrait - Reportages</title>
@endsection

@section('content')

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $count = 0; ?>
        @foreach ($photos as $photo)
        <div class="carousel-item <?php if($count === 0) echo 'active'; ?>" data-id="<?php echo $count; ?>">
            <img src="/storage/{{ $photo['image'] }}" class="d-block w-100" alt="...">
        </div>
        <?php $count++; ?>
        @endforeach
        <div class="carousel-title-wrapper">
            <h1 class="carousel-title">{{ config('infos')[0]['titre'] }}</h1>
            <p class="carousel-slogan">{{ config('infos')[0]['slogan'] }}</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Slider :: END -->

@component('components.description')
<strong>{{ config('infos')[0]['titre_desc'] }}</strong><br><br>
{!! config('infos')[0]['contenu_desc'] !!}
@endcomponent

<!-- Description -->

@endsection
