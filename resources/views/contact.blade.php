@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Contactez-moi</title>
@endsection

@section('content')


<!-- Formulaire -->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contactez-moi <small>en remplissant le formulaire ci-dessous:</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form form action="/contact" role="form" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Votre nom"
                                    value="{{ old('name') }}" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Votre email"
                                        value="{{ old('email') }}" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="objet" placeholder="Objet"
                                    value="{{ old('objet') }}" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                    required="required" placeholder="Message" maxlength="6000"
                                    value="{{ old('message') }}"></textarea>
                            </div>
                        </div>
                        @csrf
                        <div class="col-md-12">
                            <button type="submit" class="bouton envoyer pull-right">
                                Envoyer Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span>Informations de contact</legend>
                <address>
                    <strong>Réseaux sociaux</strong><br>
                    <a href="https://www.facebook.com/benroc.photographe" target="_blank"><i
                            class="fab fa-facebook"></i> Facebook</a><br>
                    <a href="https://www.instagram.com/rocherdeclencheur/ " target="_blank"><i
                            class="fab fa-instagram"></i> Instagram</a><br>
                </address>
                <address>
                    <strong>Adresse</strong><br>
                    18 rue Louis Valadas <br>
                    87400 Saint Léonard-de-Noblat<br>
                </address>
                <address>
                    <strong>Téléphone</strong><br>
                    0699597502
                </address>
                <address>
                    <strong>Adresse e-mail</strong><br>
                    <a>benoit.roc@gmail.com</a>
                </address>
            </form>
        </div>
    </div>
</div>


@endsection
