<div id="galeriecontent">

    <div class="grid">
        @foreach ($prestationPhotos as $prestationPhoto)
        <div class="grid-item">
            <div class="imgSwap">
                <a href="/img/{{ $prestationPhoto['image'] }}" data-lightbox="prestation"
                    data-title="{!! $prestationPhoto['description'] !!}"><img
                        alt="Photographe-Limoges-Prestation-{!! $prestationPhoto['description'] !!}" loading="lazy"
                        src="/img/{{ $prestationPhoto['image'] }}" /></a>
            </div>
        </div>
        @endforeach
    </div>

</div>

