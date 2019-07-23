<div id="galeriecontent">

    <div class="container">
        <div class="row">
            @foreach ($prestationPhotos as $prestationPhoto)
            <div class="col-lg-2 col-md-4 col-sm-6 resize">
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

</div>