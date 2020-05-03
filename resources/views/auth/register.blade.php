@extends('layouts.app', [
  'class' => 'off-canvas-sidebar',
  'classPage' => 'register-page',
  'activePage' => 'register',
  'title' => __('SOS DOCTEUR'),
  'pageBackground' => asset("material").'/img/register.jpg'
])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 ml-auto mr-auto">
      <div class="card card-signup">
        <h2 class="card-title text-center">{{ __('Inscription du personnel de santé') }}</h2>
        <div class="card-body">
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="info info-horizontal">
                <div class="icon icon-rose">
                  <i class="material-icons">timeline</i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ __('Covid-19') }}</h4>
                  <p class="description">
                      {{ __('
                      Le virus qui entraîne la COVID-19 se transmet ‎principalement par des
                      gouttelettes produites ‎lorsqu’une personne infectée tousse ...
                      ') }}
                  </p>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-primary">
                  <i class="material-icons">airplay</i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ __('Téléconsultation') }}</h4>
                  <p class="description">
                      {{ __("Le déploiement de la télémédecine est un enjeu clé pour l’amélioration
                      de l’organisation du système de santé et l’accès...") }}
                  </p>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-info">
                  <i class="material-icons">departure_board</i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ __('SOS ambulance') }}</h4>
                  <p class="description">
                      {{ __("Nos équipes vous accompagnent
                      dans vos déplacements vers des établissements de santé
                      ou pour convenances personnelles.
                      ") }}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-5 mr-auto">
              <div class="social text-center">
                <button class="btn btn-just-icon btn-round btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
                <h4 class="mt-3"> Nos réseaux sociaux </h4>
              </div>
              <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="has-default{{ $errors->has('name') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="{{ __('Nom...') }}" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                      <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('name') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>

                <div class="has-default{{ $errors->has('surname') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">perm_identity</i>
                      </span>
                    </div>
                    <input type="text" name="surname" class="form-control" placeholder="{{ __('Prénoms...') }}" value="{{ old('surname') }}" required>
                    @if ($errors->has('name'))
                      <div id="name-error" class="error text-danger pl-3" for="surname" style="display: block;">
                        <strong>{{ $errors->first('surname') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>

                <div class="has-default{{ $errors->has('phone') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">perm_phone_msg</i>
                      </span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="{{ __('Contact...') }}" value="{{ old('phone') }}" required>
                    @if ($errors->has('phone'))
                      <div id="name-error" class="error text-danger pl-3" for="phone" style="display: block;">
                        <strong>{{ $errors->first('phone') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>

                <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                      <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('email') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>

                <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">supervised_user_circle</i>
                      </span>
                    </div>
                      <select class="selectpicker" style="display:inline-block" name="sexe" data-style="select-with-transition" title="" data-size="100">
                        <option value="" selected hidden>{{ __('Choisir son sexe') }}</option>
                        <option value="1" @if (old('sexe') == '1') selected="selected" @endif>{{ __('Feminin') }}</option>
                        <option value="2" @if (old('sexe') == '2') selected="selected" @endif>{{ __('Masculin') }}</option>
                      </select>
                      @if ($errors->has('user_type'))
                        <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                          <strong>{{ $errors->first('sexe') }}</strong>
                        </div>
                      @endif
                  </div>
                </div>

                <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">recent_actors</i>
                      </span>
                    </div>
                      <select class="selectpicker" style="display:inline-block" name="user_type" data-style="select-with-transition" title="" data-size="100">
                        <option value="" selected hidden>{{ __('Personnel Type') }}</option>
                        <option value="1" @if (old('user_type') == '1') selected="selected" @endif>{{ __('Admin') }}</option>
                        <option value="2" @if (old('user_type') == '2') selected="selected" @endif>{{ __('Medecin') }}</option>
                        <option value="3" @if (old('user_type') == '3') selected="selected" @endif>{{ __('Pharmacien') }}</option>
                      </select>
                      @if ($errors->has('user_type'))
                        <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                          <strong>{{ $errors->first('user_type') }}</strong>
                        </div>
                      @endif
                  </div>
                </div>

                <div class="has-default{{ $errors->has('password') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" name="password" placeholder="{{ __('Mot de pass...') }}" class="form-control" required>
                    @if ($errors->has('password'))
                      <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                        <strong>{{ $errors->first('password') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                <div class="has-default mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmer le mot de Pass...') }}" required>
                  </div>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="policy" value="1" {{ old('policy', 1) ? 'checked' : '' }} >
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                    <small>
                      {{ __('j\'accepte ') }}
                      <a href="#">{{ __('les termes et conditions du contrat') }}</a>
                    </small>
                  </label>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-success btn-round mt-4">{{ __('Enrégistrer') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
    });
  </script>
@endpush
