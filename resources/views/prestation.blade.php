@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Prestations</title>
@endsection

@section('content')
    @include('prestation.galerie')
    <!-- description presta -->
    @include('prestation.description')
    @include('prestation.form')
@endsection

@section('script')
<script>
$(document).ready(function(){
    // $('#collapseExample').collapse()
    $('#collapseExample').on('show.bs.collapse', function () {
        // do something…
        $('#galeriecontent').addClass('collapse-load')
        // $('html, body').animate({
        //     scrollTop: $('#formulaire').offset().top
        // }, 'slow');
    })
    $('#collapseExample').on('shown.bs.collapse', function () {
        // do something…
        $('#galeriecontent').addClass('collapse-completed')
        $('.grid').isotope('reloadItems').isotope()
        $('html, body').animate({
            scrollTop: $('#formulaire').offset().top
        }, 'slow');
    })
    $('#collapseExample').on('hide.bs.collapse', function () {
        // do something…
        $('#galeriecontent').removeClass('collapse-load').removeClass('collapse-completed')
    })
})
</script>
@endsection