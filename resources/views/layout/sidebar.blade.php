<!-- Sidebar -->
<nav id="sidebar">
        <nav class="navbar">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
            </button>
        </nav>
        <ul class="list-unstyled components">
            <li><a href="{{ route('index') }}" class="logo">
                    <img src="/img/{{ config('infos')[0]['image_logo'] }}" />
                </a></li>
            <li>
                <a href="{{ route('index') }}" class="accueil"><i class="fas fa-home"></i>&nbsp;&nbsp;Accueil</a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fas fa-camera-retro"></i>&nbsp;&nbsp;Prestations</a>
                <ul class="collapse list-unstyled button-group filters-button-group" id="homeSubmenu">
                    @foreach (config('categories') as $categorie)
                    <li>
                        <a href="{{ route('prestation', ['name' => $categorie['slug']]) }}">- {{ $categorie['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('photodart') }}"><i class="fas fa-palette" id="list-photodart"></i>&nbsp;&nbsp;Photos d'art</a>
            </li>
            <li>
                <a href="{{ route('contact') }}"><i class="fas fa-address-book"></i>&nbsp;&nbsp;Contact</a>
            </li>
        </ul>
        <div class="socials">
            <a href="https://www.facebook.com/benroc.photographe" target="_blank"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.instagram.com/rocherdeclencheur/ " target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </nav>