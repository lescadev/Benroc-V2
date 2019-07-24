<div class="container" id="formulaire">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <p>
                    <div class="flex justifyContent--right">
                        <a class="bouton" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Contactez-moi
                        </a>
                    </div>
                </p>
            </div>
        </div>
    </div>

<div class="collapse" id="collapseExample">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="form">
                    <form action="/presta" role="form" method="POST" id="formulaire">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Votre nom"
                                        value="{{ old('name') }}" required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Votre email"
                                            value="{{ old('email') }}" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <input name="telephone" type="tel" class="form-control" id="tel" placeholder="téléphone"
                                        value="{{ old('tel') }}" required="required" />
                                </div>
                                <input type="hidden" name="prestation_nom" value="{{ $prestationInfos[0]['name'] }}">
                                <input type="hidden" name="prestation_slug" value="{{ $prestationInfos[0]['slug'] }}">
                                <div class="form-group">
                                    <label for="date">Date souhaitée:</label>
                                    <input name="date" type="date" class="form-control" id="date" placeholder="Date souhaitée"
                                        value="{{ old('date') }}" required="required" />
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
        </div>
    </div>
</div>
