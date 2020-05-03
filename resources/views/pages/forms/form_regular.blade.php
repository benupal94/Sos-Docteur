@extends('layouts.app',
  ['activePage' => 'form_regular',
  'menuParent' => 'forms',
  'titlePage' => __('Catégorie d\'anonce')
  ])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">contacts</i>
            </div>
            <h4 class="card-title">
              Inserer un nouveau type
            </h4>
          </div>
          <div class="card-body ">
            <form method="post" action="{{route('type_info.store')}}" class="form-horizontal">
              @csrf
              <div class="row">
                <label class="col-md-2 col-form-label">
                  Type
                </label>
                <div class="col-md-10">
                  <div class="form-group has-default">
                    <input type="text" name="category" class="form-control">
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <div class="row">
                  <div class="col-md-9">
                    <button type="submit" class="btn btn-fill btn-rose">
                      Valider
                    </button>
                  </div>
                </div>
              </div>
            </form>
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
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
@endpush
