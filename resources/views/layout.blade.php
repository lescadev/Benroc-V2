<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Benoit Rocher, Photographe indépendant sur Limoges et Saint Léonard-de-Noblat en Nouvelle-Aquitaine, réalise des prestations: Mariage, Reportages, Portraits, Reportages Entreprises,...">
    <meta name="keywords"
        content="Benoît, Rocher, photographe, Limoges, portrait, mariage, photo, prestation, entreprise, reportage">
    <meta name="author" content="Henrik H. Boelsmand">
    @yield('title')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href={{ asset('css/lightbox.css')}}>
    <link rel="icon" href="/img/{{ config('infos')[0]['image_logo'] }}"/>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <div class="wrapper">

        @include('layout.sidebar')

        <!-- content -->

        <div id="content">
            <div class="content-inner">
                @yield('content')
            </div>

            @include('layout.footer')
        </div>
    </div>

    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src={{ asset('js/vendor/lightbox.min.js')}}></script>
    @yield('script')
</body>

</html>
