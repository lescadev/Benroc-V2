<div id="galeriecontent">
    <h1 class="titreGal">Galerie {{ $prestationInfos[0]['name'] }}</h1>
    @include('flash-message')
        <div class="resize">
            <div class="conteneur">
                @foreach ($prestationPhotos as $prestationPhoto)
                <div class="imgSwap">
                    <a href="/img/{{ $prestationPhoto['image'] }}" data-lightbox="prestation"
                        data-title="{!! $prestationPhoto['description'] !!}"><img
                            alt="Photographe-Limoges-Prestation-{!! $prestationPhoto['description'] !!}" loading="lazy"
                            src="/img/{{ $prestationPhoto['image'] }}" /></a>
                </div>
                @endforeach
            </div>
        </div>

</div>