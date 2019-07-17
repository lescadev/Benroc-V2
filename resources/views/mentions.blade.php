@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Mentions Légales</title>
@endsection

@section('content')

<!-- Texte des mentions légales -->
<div class="mentions">

     <h1 class="titre_mentions" >{{ $mentions[0]['titre'] }}</h1>

  <div class="texte_mentions">
     {!! $mentions[0]['mentions'] !!}
  </div>
</div>
@endsection