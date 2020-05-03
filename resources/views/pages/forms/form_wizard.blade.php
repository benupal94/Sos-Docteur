@extends('layouts.app',
  ['activePage' => 'form_wizard',
    'menuParent' => 'forms',
    'titlePage' => __('Publication d\'une anonce')
  ])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="col-md-8 col-12 mr-auto ml-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card card-wizard" data-color="rose" id="wizardProfile">

            <div class="card-header text-center">
              <h3 class="card-title" style="color:#164888;">
                AIMES - AFRIQUE
              </h3>
              <h5 class="card-description">
                Publication des anonces et informations destinées aux publique
              </h5>
            </div>
            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                    Commoniqué
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#account" data-toggle="tab" role="tab">

                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#address" data-toggle="tab" role="tab"></a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="about">
                  <h5 class="info-text">
                    Espace Campagnes, Débats, Rappels, Conseils, Information, ...
                  </h5>
                  <div class="row justify-content-center">
                    <div class="col-sm-12">
                      <form method="post" action="{{route('info.store')}}">
                        @csrf
                        <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">keyboard_hide</i>
                            </span>
                          </div>
                          <div class="form-group">
                            <select name="type_id" class="form-control">
                              @foreach ($type_info as $type_info)
                                  <option value="{{ $type_info->id }}">{{ $type_info->category }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">announcement</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <textarea name="contenu" class="form-control" required>
                          </textarea>
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons" style="color:red;">warning</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput12" class="bmd-label-floating">Détails</label>
                          <input type="text" name="detail" class="form-control" id="exampleInput12" required>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="ml-auto">
                          <input type="submit" class="btn btn-next btn-fill btn-rose btn-wd" value="Publier">
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
@endpush
